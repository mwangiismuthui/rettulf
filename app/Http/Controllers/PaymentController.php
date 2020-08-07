<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Commision;
use App\Music;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Payee;
use Illuminate\Session\Store;
use Session;
use App\TemporaryTransaction;
use Auth;
use App\PaypalPayment;
use App\User;
use App\Withdrawal;
use Response;
use PaypalPayoutsSDK\Core\PayPalHttpClient;
use PaypalPayoutsSDK\Core\SandboxEnvironment;
use PaypalPayoutsSDK\Payouts\PayoutsPostRequest;
use App\Http\Controllers\PayPalClient;
use App\SiteSetting;
use App\UploadFee;
use App\Jobs\BulkEmailSender;
use Carbon\Carbon;


class PaymentController extends Controller
{

    public function upload_payment(Request $request,$id)
    {

         $paypal_client_id = SiteSetting::pluck('paypal_client_id')->first();
         $paypal_secret = SiteSetting::pluck('paypal_secret')->first();
        $previousUrl = url()->previous();
        $exacturl = substr($previousUrl, 24);
        // return $exacturl;
        // https://justerudite.com/
        // // $user_id = request()->ip();
        $music_amount = Music::where('id', $id)->pluck('price')->first();
        $total = (int) $music_amount;
        $is_paid = Music::where('id', $id)->pluck('is_paid')->first();
        if ($total == 0 && $is_paid ==1 ) {
            $request->session()->put('music_id', $id);
            return redirect()->route('downloadMusic');
        } else {
            # code...
      
            $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                    $paypal_client_id, // ClientID
                    $paypal_secret // ClientSecret
                )
            );
//   $apiContext->setConfig(
//             array(
//                 'mode' => 'LIVE',
//                 'log.LogEnabled' => true,
//                 'log.FileName' => '../PayPal.log',
//                 'log.LogLevel' => 'INFO', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
//             )
//         );
            $payer = new Payer();
            $payer->setPaymentMethod("paypal");
            if ($exacturl == "mymusic") {

                $upload_payment = UploadFee::orderBy('created_at', 'DESC')->pluck('amount')->first();
                $upload_payment_amount = (int) $upload_payment;
                $temporary_trans = new TemporaryTransaction();
                $temporary_trans->user_id = Auth::user()->id;
                $temporary_trans->music_id = $id;
                $temporary_trans->amount = $upload_payment_amount;
                $temporary_trans->exacturl = $exacturl;
                $temporary_trans->save();
                $item1 = new Item();
                $item1->setName('Premium Package')
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setSku("123123")
                    ->setPrice($upload_payment_amount);


                $itemList = new ItemList();
                $itemList->setItems(array($item1));

                $details = new Details();
                $details->setShipping(0.0)
                    ->setTax(0.0)
                    ->setSubtotal($upload_payment_amount);

                $amount = new Amount();
                $amount->setCurrency("USD")
                    ->setTotal($upload_payment_amount)
                    ->setDetails($details);
            } else {

                $temporary_trans = new TemporaryTransaction();
                $temporary_trans->user_id = Auth::user()->id;
                $temporary_trans->music_id = $id;
                $temporary_trans->amount = $total;
                $temporary_trans->exacturl = $exacturl;
                $temporary_trans->save();
                // paying for downloading music
                $item1 = new Item();
                $item1->setName('Premium Package')
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setSku("123123")
                    ->setPrice($total);


                $itemList = new ItemList();
                $itemList->setItems(array($item1));

                $details = new Details();
                $details->setShipping(0.0)
                    ->setTax(0.0)
                    ->setSubtotal($total);

                $amount = new Amount();
                $amount->setCurrency("USD")
                    ->setTotal($total)
                    ->setDetails($details);
            }



            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription("Payment description")
                ->setInvoiceNumber(uniqid());

            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl("https://justerudite.com/execute_payment")
                ->setCancelUrl("https://justerudite.com/");

            $payment = new Payment();
            $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));

            $payment->create($apiContext);
            // dd($payment) ;

            $approvalUrl = $payment->getApprovalLink();
            // dd($approvalUrl) ;

            return redirect($approvalUrl);
        }
    }

    public function execute_payment(Request $request)
    {

        $paypal_client_id = SiteSetting::pluck('paypal_client_id')->first();
        $paypal_secret = SiteSetting::pluck('paypal_secret')->first();

        $user_id = Auth::user()->id;

        $music_id = TemporaryTransaction::where('user_id', $user_id)
            ->orderBy('created_at', 'DESC')
            ->pluck('music_id')
            ->first();
            // dd($music_id);
        $exacturl = TemporaryTransaction::where('user_id', $user_id)
            ->orderBy('created_at', 'DESC')
            ->pluck('exacturl')
            ->first();
            // dd($exacturl);

        $upload_payment_amount = TemporaryTransaction::where('user_id', $user_id)
            ->orderBy('created_at', 'DESC')
            ->pluck('amount')
            ->first();
            // dd($upload_payment_amount);

        session()->put('music_id', $music_id);
        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $total = (int) $music_amount;

      
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $paypal_client_id, // ClientID
                $paypal_secret // ClientSecret
            )
        );
        //   $apiContext->setConfig(
        //     array(
        //         'mode' => 'LIVE',
        //         'log.LogEnabled' => true,
        //         'log.FileName' => '../PayPal.log',
        //         'log.LogLevel' => 'INFO', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
        //     )
        // );

        $paymentId = request('paymentId');

        $payment = Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();
        if ($exacturl == "mymusic") {
            $details->setShipping(0.0)
                ->setTax(0.0)
                ->setSubtotal($upload_payment_amount);

            $amount->setCurrency('USD');
            $amount->setTotal($upload_payment_amount);
            $amount->setDetails($details);
            $transaction->setAmount($amount);
        } else {
            $details->setShipping(0.0)
                ->setTax(0.0)
                ->setSubtotal($total);

            $amount->setCurrency('USD');
            $amount->setTotal($total);
            $amount->setDetails($details);
            $transaction->setAmount($amount);
        }



        $execution->addTransaction($transaction);

        $result = $payment->execute($execution, $apiContext);

        $payment_id = request('paymentId');
        $PayerID = request('PayerID');
        if ($exacturl == "mymusic") {

            $storage = $this->uploadedMusic($music_id, $payment_id, $PayerID);
            $request->session()->forget('amount');
            $request->session()->forget('exacturl');
            $request->session()->forget('music_id');
            return redirect()->route('myMusic');
        } else {
            $pathToFile = $this->downloadedMusic($music_id, $payment_id, $PayerID);
            $request->session()->forget('amount');
            $request->session()->forget('exacturl');
            $request->session()->forget('music_id');
            return redirect()->route('downloadedMusic')->with('success', 'Music purchased succesfully!Find it here to download');
        }
    }
    public function uploadedMusic($music_id, $payment_id, $PayerID)
    {

        $user_id = Auth::user()->id;
        Music::where('id', $music_id)->update([
            'is_paid' => 1,
        ]);
        $payment = new PaypalPayment();
        $payment->paypal_id = $payment_id;
        $payment->payer_id = $PayerID;
        $payment->music_id = $music_id;
        $payment->payment_type = 'uploadedMusic';
        $payment->user_id = $user_id;
        $payment->save();
    }
    public function downloadedMusic($music_id, $payment_id, $PayerID)
    {

        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $user_id = Music::where('id', $music_id)->pluck('user_id')->first();
        $downloads = Music::where('id', $music_id)->pluck('downloads')->first();
        $new_downloads = $downloads + 1;


        $user_id = Auth::user()->id;
        // dd($music_id);
        Music::where('id', $music_id)->update([
            'is_paid' => 1,
            'downloads' => $new_downloads,
        ]);
        $payment = new PaypalPayment();
        $payment->paypal_id = $payment_id;
        $payment->payer_id = $PayerID;
        $payment->music_id = $music_id;
        $payment->payment_type = 'downloadedMusic';
        $payment->user_id = $user_id;
        if ($payment->save()) {
            $commissionearned = 0.2 * $music_amount;
            $earnings = 0.8 * $music_amount;
            $balance = Balance::where('user_id', $user_id)->pluck('balance')->first();
            $newbalance = $balance + $earnings;
            Balance::where('user_id', $user_id)->update([
                'balance' => $newbalance
            ]);

            $commission = new Commision();
            $commission->buyer_id = Auth::user()->id;
            $commission->seller_id = $user_id;
            $commission->music_id = $music_id;
            $commission->amount = $commissionearned;
            $commission->save();
        }
    }

    public function payout($id)
    {
        $user_id = Withdrawal::where('id', $id)->pluck('user_id')->first();
        $amount = Withdrawal::where('id', $id)->pluck('amount')->first();
        $payment_email = User::where('id', $user_id)->pluck('paypal_email')->first();
        // return $payment_email;
        $paypal_client_id = SiteSetting::pluck('paypal_client_id')->first();
        $paypal_secret = SiteSetting::pluck('paypal_secret')->first();

        $clientId = $paypal_client_id;
        $clientSecret = $paypal_secret;

        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);
        $request = new PayoutsPostRequest();



        $data = array(
            'subject' => "Payment Sent",

        );
        $recipient_emails = User::where('id', $user_id)->pluck('email')->first();
        BulkEmailSender::dispatch($recipient_emails, $data)->delay(Carbon::now()->addSeconds(5));

        $our_body = [
            "sender_batch_header" => [
                "email_subject" => "SDK payouts test txn"
            ],
            "items" => [
                [
                    "recipient_type" => "EMAIL",
                    "receiver" => $payment_email,
                    "note" => "Your 1$ payout",
                    "sender_item_id" => "Test_txn_12",
                    "amount" => [
                        "currency" => "USD",
                        "value" => $amount
                    ]
                ]
            ]
        ];
        $our_body2 = json_encode($our_body);

        $request->body = $our_body2;
        $client = PayPalClient::client();
        $response = $client->execute($request);
        print "Status Code: {$response->statusCode}\n";
        print "Status: {$response->result->batch_header->batch_status}\n";
        print "Batch ID: {$response->result->batch_header->payout_batch_id}\n";
        print "Links:\n";
        foreach ($response->result->links as $link) {
            print "\t{$link->rel}: {$link->href}\tCall Type: {$link->method}\n";
        }
        echo json_encode($response->result, JSON_PRETTY_PRINT), "\n";
        Withdrawal::where('id', $id)->update([
            'status' => 1
        ]);
        return redirect()->back()->with('message', 'Payment Successfull');
    }
}
