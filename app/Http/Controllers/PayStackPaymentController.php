<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Commision;
use App\Download;
use App\FlutterWaveAPI;
use App\FlutterWavePayment;
use App\Music;
use App\PayStackPayment;
use App\Http\Controllers\Controller;
use App\SiteSetting;
use App\UploadFee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PayStackPaymentController extends Controller
{
    public function initPayStackPayment(Request $request, $music_id)
    {
        $user = Auth::user();
        $logopath = SiteSetting::pluck('logo')->first();
        $music_type = Music::where('id', $music_id)->pluck('type')->first();
        $refnumber = (string)Str::orderedUuid();
        $is_paid = Music::where('id', $music_id)->pluck('is_paid')->first();

        $url = "https://api.paystack.co/transaction/initialize";
        if ($request->source == 'buy') {
            $music_amount = UploadFee::pluck('amount')->first();
            $metadata = [
                'music_id' => $music_id,
                'isUpload' => 0
            ];
        } else if ($request->source == 'upload') {
            $music_amount = UploadFee::pluck('amount')->first();

            $metadata = [
                'music_id' => $music_id,
                'isUpload' => 1
            ];
        } else {
            return Redirect::back()->withErrors(['error' => 'Incorrect url, Please try again later.']);

        }
        $total = (int)$music_amount;
        if ($total == 0 && $is_paid == 1) {
            return redirect()->route('downloadMusic');
        } else {
            $fields = [
                'email' => "customer@email.com",
                'amount' => $total* 100,
                'reference' => $refnumber,
                'metadata' => json_encode($metadata)
            ];
            $fields_string = http_build_query($fields);
            //open connection
            $ch = curl_init();
            //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer sk_test_b065cb156baa04c338379f0e615ed292c3f4488c",
                "Cache-Control: no-cache",
            ));

            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            //execute post
            $result = curl_exec($ch);
            if ($result) {
                $results = json_decode($result, true);
//                return $results['data']['authorization_url'];
                return Redirect::to($results['data']['authorization_url']);
            } else {
                return Redirect::back()->withErrors(['error' => 'Something bad happened, Please try again later.']);
            }
        }
    }


    function PayStackExecute(Request $request)
    {

        $transaction_id = $request->transaction_id;
        $tx_ref = $request->tx_ref;
        $status = $request->status;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $request->reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_b065cb156baa04c338379f0e615ed292c3f4488c",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {


            $results = json_decode($response, true);
            if ($results['status'] == 'success') {
                if ($results['data']['metadata']['isUpload'] == 1) {
                    $user_id = Auth::user()->id;
                    Music::where('id', $results['data']['metadata']['music_id'])->update([
                        'is_paid' => 1,
                    ]);


                    $paystackpayment = new PayStackPayment();
                    $paystackpayment->music_id = $results['data']['metadata']['music_id'];
                    $paystackpayment->user_id = Auth::user()->id;
                    $paystackpayment->currency = $results['data']['currency'];
                    $paystackpayment->ip_address = $results['data']['ip_address'];
                    $paystackpayment->card_type = $results['data']['authorization']['card_type'];
                    $paystackpayment->bank = $results['data']['authorization']['bank'];
//
                    $paystackpayment->save();
//                return $results;
                    return redirect()->route('myMusic')->with('success', 'Beat upload payment made successfully.');

                } else if ($results['data']['metadata']['isUpload'] == 0) {
                    $downloads = Music::where('id', $results['data']['metadata']['music_id'])->pluck('downloads')->first();
                    $new_downloads = $downloads + 1;
                    $user_id = Auth::user()->id;
                    Music::where('id', $results['data']['metadata']['music_id'])->update([
                        'downloads' => $new_downloads,
                    ]);

                    $downloads = new Download();
                    $downloads->music_id = $results['data']['metadata']['music_id'];
                    $downloads->user_id = $user_id;
                    $downloads->save();

                    $paystackpayment = new PayStackPayment();
                    $paystackpayment->music_id = $results['data']['metadata']['music_id'];
                    $paystackpayment->user_id = Auth::user()->id;
                    $paystackpayment->currency = $results['data']['currency'];
                    $paystackpayment->ip_address = $results['data']['ip_address'];
                    $paystackpayment->card_type = $results['data']['authorization']['card_type'];
                    $paystackpayment->bank = $results['data']['authorization']['bank'];
//
                    $paystackpayment->save();

                    $music_amount = Music::where('id', $results['data']['metadata']['music_id'])->pluck('price')->first();
                    $commissionearned = 0.2 * $music_amount;
                    $earnings = 0.8 * $music_amount;
                    $balance = Balance::where('user_id', $user_id)->pluck('balance')->first();
                    $newbalance = $balance + $earnings;
                    Balance::where('user_id', $user_id)->update([
                        'balance' => $newbalance
                    ]);

                    $commission = new Commision();
                    $commission->buyer_id = Auth::user()->id;
                    $commission->seller_id = Auth::user()->id;
                    $commission->music_id = $results['data']['metadata']['music_id'];
                    $commission->amount = $commissionearned;
                    $commission->save();
                    return redirect()->route('downloadedMusic')->with('success', 'Music payment made successfully.');

                } else {
                    return redirect()->route('selectPaymentMethod', $results['data']['metadata']['music_id'] . '?source=buy')->with('error', 'An error occurred.');
                }


            }
        }
    }


}


