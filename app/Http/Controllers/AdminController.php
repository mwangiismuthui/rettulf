<?php

namespace App\Http\Controllers;

use App\Jobs\BulkEmailSender;
use Illuminate\Http\Request;
use App\Music;
use App\SiteSetting;
use App\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Datatables\Datatables;
use Validator;
class AdminController extends Controller
{
    function __construct()
    {
         $this->middleware('role:Super-Admin');
    }
    public function dashboard(Request $request)
    {
        $totalMusic = Music::count();
        $producers = User::role('Producer')->count();
        $artists = User::role('Artist')->count();
        if ($request->ajax()) {
            $music = Music::with('user')
                ->orderBy('created_at', 'DESC')
                ->get();
            // dd($music);
            return Datatables::of($music)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == '0') {
                        return ' <a class="btn btn-outline-warning btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">New </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a> 
                        
                        </div>';
                    } elseif ($data->status == '1') {

                        return ' <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Published</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">New </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a> 
                        
                        </div>';
                    }
                })->addColumn('is_paid', function ($data) {
                    if ($data->is_paid == '0') {
                        return ' <a class="btn btn-outline-danger btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unpaid</a>';
                    } elseif ($data->is_paid == '1') {

                        return ' <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paid</a>';
                    }
                })->addColumn('contact', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="mailto:' . $data->user->email . '" ><i class="ti-email"></i></a> &nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="tel:' . $data->phone . '" ><i class="fa fa-phone"></i></a>';
                })

                ->rawColumns(['status', 'contact', 'is_paid'])
                ->make(true);
        }
        return view('admin.dashboard.index',compact('artists','totalMusic','producers'));
    }

    public function adminMusic(Request $request)
    {
        if ($request->ajax()) {
            $music = Music::with('user')->get();
            // dd($music);
            return Datatables::of($music)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == '0') {
                        return ' <a class="btn btn-outline-warning btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">New </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a> 
                        
                        </div>';
                    } elseif ($data->status == '1') {

                        return ' <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Published</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">New </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a> 
                        
                        </div>';
                    }
                })->addColumn('is_paid', function ($data) {
                    if ($data->is_paid == '0') {
                        return ' <a class="btn btn-outline-danger btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unpaid</a>';
                    } elseif ($data->is_paid == '1') {

                        return ' <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paid</a>';
                    }
                })->addColumn('contact', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="mailto:' . $data->user->email . '" ><i class="ti-email"></i></a> &nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="tel:' . $data->phone . '" ><i class="fa fa-phone"></i></a>';
                })

                ->rawColumns(['status', 'action', 'contact', 'is_paid'])
                ->make(true);
        }

        return view('admin.music.index');
    }

    public function changeStatus(Request $request)
    {
        $music_id = $request->music_id;
        $status = $request->status;
        if (music::where('id', $music_id)->update([

            'status' => $status
        ])) {
            return response([
                'success' => "music Status Updated!",
            ], Response::HTTP_OK);
        } else {
            return response([
                'errors' => "music Status not Updated!",
            ], Response::HTTP_OK);
        }
    }
    public function bulkEmails()
    {
     
        return view('admin.emails.index');
    }
    public function bulkEmailsSend(Request $request)
    {
     $clients = $request->clients;
     $subject = $request->subject;
     $themessage = $request->message;
     $data = array(
        'subject' =>$subject,
        'themessage' =>$themessage,     
        
    );

     if ($clients=='producers') {
         $recipient_emails = User::role('Producer')->pluck('email');
        //  return $recipient_emails;
     } elseif ($clients=='artist') {
        $recipient_emails = User::role('Artist')->pluck('email');
                //  return $recipient_emails;

    } elseif ($clients=='normal-users') {
        $recipient_emails = User::role('Normal User')->pluck('email');
                //  return $recipient_emails;

    }elseif ($clients=='both') {
        $producers = User::role('Producer')->pluck('email');
        $artists = User::role('Artist')->pluck('email');
        $recipient_emails = $producers->merge($artists);         
     }elseif ($clients=='') {
       
        return redirect()->back()->with('error','No recipients Selected');
     }
         
  
      BulkEmailSender::dispatch($recipient_emails,$data)->delay(Carbon::now()->addSeconds(5));

    //  dispatch($job);
     
     
        return redirect()->back()->with('success','Success Emails are being sent!');
    }


    public function siteSettingsIndex(Request $request)
    {
        if ($request->ajax()) {

            $sitesettings = SiteSetting::all();
            return Datatables::of($sitesettings)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="sitesettingsDelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('siteSettingsEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.site.index');
    }



    public function siteSettingsStore(Request $request)
    {

        $rules = [
            'logo' => 'required',
            'bank_details' => 'required',
            'client_id' => 'required',
            'paypal_secret' => 'required',
            'beatplaytime' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors'=>True,
                'message'=>$error->errors()->all(),
            ],Response::HTTP_OK);
        }

        if ($request->hasFile('logo')) {
            $coverfileDestination = '/Logos';
            $logo = $request->file('logo');
            $filename = $this->generateUniqueFileName($logo, $coverfileDestination);
            
        }
        $sitesettings = new SiteSetting();
        $sitesettings->logo = $filename;
        $sitesettings->bank_details = $request->bank_details;
        $sitesettings->paypal_client_id = $request->client_id;
        $sitesettings->paypal_secret = $request->paypal_secret;
        $sitesettings->beat_time = $request->beatplaytime;
        if ($sitesettings->save()) {
            return response([
                'error'=>False,
                'message'=>'Site Settings Added Successfully',
            ],Response::HTTP_OK);
        
          
        }
    }

    public function siteSettingsEdit(Request $request,$id)
    {
        $sitesettings =SiteSetting::where('id',$id)->get();
      
        
        

        return view ('admin.site.edit',compact('sitesettings'));
    }


    public function siteSettingsUpdate(Request $request,$id){
        $filename = SiteSetting::where('id',$id)->pluck('logo')->first();
        // dd($request->hasFile('logo'));
       

        $rules = [
            // 'logo' => 'required',
            'bank_details' => 'required',
            'client_id' => 'required',
            'paypal_secret' => 'required',
            'beatplaytime' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors'=>True,
                'message'=>$error->errors()->all(),
            ],Response::HTTP_OK);
        }
        if ($request->hasFile('logo')) {
            $coverfileDestination = '/Logos';
            $logo = $request->file('logo');
            $filename = $this->generateUniqueFileName($logo, $coverfileDestination);
            
        }
     
        SiteSetting::where('id',$id)->update([
           'logo' => $filename,
           'bank_details' => $request->bank_details,
           'paypal_client_id' => $request->client_id,
           'paypal_secret' => $request->paypal_secret,
           'beat_time' => $request->beatplaytime
        ]);
        return redirect()->route('siteSettingsIndex')->with('message','Site Settings Updated Succesfully');
    
     }
     public function sitesettingsDelete(Request $request)
     {
         if($request->ajax()){
                 $siteSettings_id = $request->siteSettings_id;
         $siteSettings = SiteSetting::find($siteSettings_id);
         if ($siteSettings) {
             $siteSettings->delete();
             return response([
                 'success'=>True,
                 'message'=>'Site Settings  deleted Succesfully',
             ],Response::HTTP_OK);
         } else {
             return response([
                 'success'=>True,
                 'message'=>'Site Settings  not deleted',
             ],Response::HTTP_OK);
         }
         }
     
     }   


     
    public function generateUniqueFileName($image, $destinationPath)
    {
        $initial = "Logo";
        $name = $initial  . bin2hex(random_bytes(8)) . '.' . $image->getClientOriginalExtension();
        if ($image->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }
}
