<?php

namespace App\Http\Controllers;

use App\FlutterWavePayment;
use App\Http\Controllers\Controller;
use App\Music;
use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class FlutterWavePaymentController extends Controller
{

    public function initFlutterwavePayments(Request $request, $music_id)
    {
        $user = Auth::user();
        $logopath = SiteSetting::pluck('logo')->first();
        $music_amount = Music::where('id', $music_id)->pluck('price')->first();
        $total = (int)$music_amount;
        $is_paid = Music::where('id', $music_id)->pluck('is_paid')->first();
        if ($total == 0 && $is_paid == 1) {
            return redirect()->route('downloadMusic');
        } else {
            $requestParamsArray = [
                "tx_ref" =>"hooli-tx-1920bbtytty",
                "amount"=>$total,
                "currency"=>"$",
                "redirect_url"=>route('executepaymentResults',$music_id),
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
            $response = Http::withHeaders([
                'Authorization  ' => 'Bearer FLWSECK_TEST-e3a76b5651f8958c76cf5bbb439b534e-X',
                'Accept' => ' application/json'
                ])->post('https://api.flutterwave.com/v3/payments', $requestParamsArray);


//            $finalRequestParams= json_encode($requestParamsArray);
            if($response->successful()){
                return $response->body();
            }else{
                return $response->throw();
            }

        }
    }


}
