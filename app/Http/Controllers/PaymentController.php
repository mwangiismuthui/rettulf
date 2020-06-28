<?php

namespace App\Http\Controllers;

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

class PaymentController extends Controller
{
    //

    public function upload_payment($id)
    {
        $previousUrl = url()->previous();
        $exacturl = substr($previousUrl, 22);
        // dd($exacturl);
        session()->put('music_id', $id);
        session()->put('previous_url', $exacturl);
        // $clientIP = request()->ip();


        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'Ab576qDQ2pShVNyKJms7tcBoxaq_xofpmJq2vBpMWLS2jfRkwnyzHB7QO6yH12gbQQa7OU_NJudN6n4z', // ClientID
                'EDCYQBhWefKcjvS_N26czclv5CzZTC9eF9CGsedOexQDb3K5Hd-M9YtomRosuNFuqfUbry5t-r2HP7gA' // ClientSecret
            )
        );
        // dd($apiContext) ;

        $number_of_days = 1;
        $price = 3;
        $subtotal  = $number_of_days * $price;
        $total = $subtotal + 0;


        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $item1 = new Item();
        $item1->setName('Premium Package')
            ->setCurrency('USD')
            ->setQuantity($number_of_days)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice($price);
        // dd($payer) ;


        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setShipping(0.0)
            ->setTax(0.0)
            ->setSubtotal($subtotal);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($total)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("http://localhost:8000/execute_payment")
            ->setCancelUrl("http://localhost:8000");

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

    public function execute_payment(Request $request)
    {
        $music_id = session()->get('music_id');
        $exacturl = session()->get('previous_url');

        // dd($exacturl) ;

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'Ab576qDQ2pShVNyKJms7tcBoxaq_xofpmJq2vBpMWLS2jfRkwnyzHB7QO6yH12gbQQa7OU_NJudN6n4z', // ClientID
                'EDCYQBhWefKcjvS_N26czclv5CzZTC9eF9CGsedOexQDb3K5Hd-M9YtomRosuNFuqfUbry5t-r2HP7gA' // ClientSecret
            )
        );

        $our_amount = 3;
        //  return request('transactions');
        $paymentId = request('paymentId');

        $payment = Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $details->setShipping(0.0)
            ->setTax(0.0)
            ->setSubtotal($our_amount);

        $amount->setCurrency('USD');
        $amount->setTotal($our_amount);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);

        $result = $payment->execute($execution, $apiContext);
        $music_id = session()->get('music_id');

        $payment_id = request('paymentId');
        $PayerID = request('PayerID');
        if ($exacturl == "mymusic") {

            $storage = $this->uploadedMusic($music_id, $payment_id, $PayerID);
            // dd($exacturl);
        } else {
            $pathToFile = $this->downloadedMusic($music_id, $payment_id, $PayerID);
            return response()->download($pathToFile);
        }

        $request->session()->flush();
        // return redirect()->route('myMusic');
    }
    public function uploadedMusic($music_id, $payment_id, $PayerID)
    {

        $user_id = Auth::user()->id;
        // dd($music_id) ;
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
        // dd($music_id) ;
        $downloads = Music::where('id', $music_id)->pluck('downloads')->first();
        $new_downloads = $downloads + 1;


        $user_id = Auth::user()->id;
        dd($music_id) ;
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
            $music_path =  Music::where('id', $music_id)->pluck('music')->first();
            $music_title =  Music::where('id', $music_id)->pluck('title')->first();
            //   dd($music_title);
            //PDF file is stored under project/public/downloads/brochure2020.pdf
            $file = public_path() . "uploadedFiles/" . $music_path;

            $headers = [
                'Content-Type: application/mp4',
            ];
            $pathToFile = public_path('uploadedFiles/' . $music_path);
            return $pathToFile;
        }
    }

    public function payout($id)
    {
        // "sb-7melu1698512@personal.example.com"
        $user_id = Withdrawal::where('id', $id)->pluck('user_id')->first();
        $amount = Withdrawal::where('id', $id)->pluck('amount')->first();
        $payment_email = User::where('id', $user_id)->pluck('email')->first();
        $clientId = "Ab576qDQ2pShVNyKJms7tcBoxaq_xofpmJq2vBpMWLS2jfRkwnyzHB7QO6yH12gbQQa7OU_NJudN6n4z";
        $clientSecret = "EDCYQBhWefKcjvS_N26czclv5CzZTC9eF9CGsedOexQDb3K5Hd-M9YtomRosuNFuqfUbry5t-r2HP7gA";

        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);
        $request = new PayoutsPostRequest();
        $body = json_decode(
            '{
                "sender_batch_header":
                {
                  "email_subject": "SDK payouts test txn"
                },
                "items": [
                {
                  "recipient_type": "EMAIL",
                  "receiver": "sb-7melu1698512@personal.example.com",
                  "note": "Your 1$ payout",
                  "sender_item_id": "Test_txn_12",
                  "amount":
                  {
                    "currency": "USD",
                    "value": "890.00"
                  }
                }]
              }',
            true
        );
        // return $body;
        $request->body = $body;
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
        return redirect()->back()->with('message','Payment Successfull');
    }
}
