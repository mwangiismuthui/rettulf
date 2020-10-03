<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Commision;
use App\Download;
use App\FlutterWaveAPI;
use App\FlutterWavePayment;
use App\Http\Controllers\Controller;
use App\Music;
use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class FlutterWavePaymentController extends Controller
{

    public function beatFlutterWavePayment(Request $request, $music_id)
    {
        $user = Auth::user();
        $logopath = SiteSetting::pluck('logo')->first();
        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $total = (int)$music_amount;
        $refnumber = (string) Str::orderedUuid();
        $is_paid = Music::where('id', $music_id)->pluck('is_paid')->first();
        $flutterWaveConfig = FlutterWaveAPI::first();
        if ($total == 0 && $is_paid == 1) {
            return redirect()->route('downloadMusic');
        } else {
            $requestParamsArray = [
                "tx_ref" =>$refnumber,
                "amount"=>$total,
                "currency"=>"NGN",
                "redirect_url"=>route('beatUploadPaymentExecute',$music_id),
                "payment_options"=>"card",
               "customer" =>[
                  "email"=>$user->email,
                  "phonenumber"=>$user->phone,
                  "name"=>$user->name
               ],
               "customizations" =>[
                            "title"=>"Music Payments",
                  "description"=>"A payment for beat upload",
                  "logo"=>url('/Logos/'.$logopath)
               ]

            ];

            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => ' application/json',
                'Authorization' => 'Bearer '.$flutterWaveConfig->secret_key,
            ];

            $response = Http::withHeaders($headers)->post('https://api.flutterwave.com/v3/payments', $requestParamsArray);


//            $finalRequestParams= json_encode($requestParamsArray);
            if($response->successful()){
                $results = json_decode($response->body(), true);
//                return $results['data']['link'];

                return Redirect::to( $results['data']['link']);


            }else{
                return Redirect::back()->withErrors(['error'=> 'Something bad happened, Please try again later.']);

            }

        }
    }

    function beatUploadPaymentExecute(Request  $request,$music_id){

        $transaction_id = $request->transaction_id;
        $tx_ref = $request->tx_ref;
        $status = $request->status;
        $curl = curl_init();
        $flutterWaveConfig = FlutterWaveAPI::first();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$transaction_id/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer ".$flutterWaveConfig->secret_key,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $results =  json_decode($response,true);
        if ($results['status'] == 'success'){
            $user_id = Auth::user()->id;
            Music::where('id', $music_id)->update([
                'is_paid' => 1,
            ]);


           $flutterWave =  new FlutterWavePayment();
            $flutterWave->transaction_id = $results['data']['id'];
            $flutterWave->tx_ref = $results['data']['tx_ref'];
            $flutterWave->flw_ref = $results['data']['flw_ref'];
            $flutterWave->amount = $results['data']['amount'];
            $flutterWave->currency = $results['data']['currency'];
            $flutterWave->charged_amount = $results['data']['charged_amount'];
            $flutterWave->app_fee = $results['data']['app_fee'];
            $flutterWave->merchant_fee = $results['data']['merchant_fee'];
            $flutterWave->processor_response = $results['data']['processor_response'];
            $flutterWave->auth_model = $results['data']['auth_model'];
            $flutterWave->payment_created_at = $results['data']['created_at'];
            $flutterWave->account_id = $results['data']['account_id'];
            $flutterWave->amount_settled = $results['data']['amount_settled'];

            $flutterWave->music_id = $music_id;
            $flutterWave->payment_type = 'uploadedMusic';
            $flutterWave->user_id = $user_id;

            $flutterWave->save();
            return redirect()->route('myMusic')->with('success', 'Beat upload payment made successfully.');

        }
    }


    public function musicBuyFlutterWavePayment(Request $request, $music_id)
    {
        $user = Auth::user();
        $logopath = SiteSetting::pluck('logo')->first();
        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $total = (int)$music_amount;
        $refnumber = (string) Str::orderedUuid();
        $is_paid = Music::where('id', $music_id)->pluck('is_paid')->first();
        $flutterWaveConfig = FlutterWaveAPI::first();
        if ($total == 0) {
            return redirect()->route('downloadPurchasedMusic');
        } else {
            $requestParamsArray = [
                "tx_ref" =>$refnumber,
                "amount"=>$total,
                "currency"=>"NGN",
                "redirect_url"=>route('musicBuyPaymentExecute',$music_id),
                "payment_options"=>"card",
                "customer" =>[
                    "email"=>$user->email,
                    "phonenumber"=>$user->phone,
                    "name"=>$user->name
                ],
                "customizations" =>[
                    "title"=>"Music Payments",
                    "description"=>"A payment for beat upload",
                    "logo"=>url('/Logos/'.$logopath)
                ]

            ];

            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => ' application/json',
                'Authorization' => 'Bearer '.$flutterWaveConfig->secret_key,
            ];

            $response = Http::withHeaders($headers)->post('https://api.flutterwave.com/v3/payments', $requestParamsArray);


//            $finalRequestParams= json_encode($requestParamsArray);
            if($response->successful()){
                $results = json_decode($response->body(), true);
//                return $results['data']['link'];

                return Redirect::to( $results['data']['link']);


            }else{
                return Redirect::back()->withErrors(['error'=> 'Something bad happened, Please try again later.']);

            }

        }
    }

    function MusicBuyPaymentExecute(Request  $request,$music_id){

        $transaction_id = $request->transaction_id;
        $tx_ref = $request->tx_ref;
        $status = $request->status;
        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $user_id = Music::where('id', $music_id)->pluck('user_id')->first();
        $downloads = Music::where('id', $music_id)->pluck('downloads')->first();
        $new_downloads = $downloads + 1;
        $flutterWaveConfig = FlutterWaveAPI::first();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$transaction_id/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: 'Bearer ".$flutterWaveConfig->secret_key,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $results =  json_decode($response,true);
//        return $response;
        if ($results['status'] == 'success'){
            $user_id = Auth::user()->id;
            Music::where('id', $music_id)->update([
                'downloads' => $new_downloads,
            ]);
            $downloads = new Download();
            $downloads->music_id = $music_id;
            $downloads->user_id = $user_id;
            $downloads->save();

            $flutterWave =  new FlutterWavePayment();
            $flutterWave->transaction_id = $results['data']['id'];
            $flutterWave->tx_ref = $results['data']['tx_ref'];
            $flutterWave->flw_ref = $results['data']['flw_ref'];
            $flutterWave->amount = $results['data']['amount'];
            $flutterWave->currency = $results['data']['currency'];
            $flutterWave->charged_amount = $results['data']['charged_amount'];
            $flutterWave->app_fee = $results['data']['app_fee'];
            $flutterWave->merchant_fee = $results['data']['merchant_fee'];
            $flutterWave->processor_response = $results['data']['processor_response'];
            $flutterWave->auth_model = $results['data']['auth_model'];
            $flutterWave->payment_created_at = $results['data']['created_at'];
            $flutterWave->account_id = $results['data']['account_id'];
            $flutterWave->amount_settled = $results['data']['amount_settled'];

            $flutterWave->music_id = $music_id;
            $flutterWave->payment_type = 'downloadedMusic';
            $flutterWave->user_id = $user_id;

            if($flutterWave->save()){
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
                return redirect()->route('downloadedMusic')->with('success', 'Music payment made successfully.');
            }


        }
    }

}
