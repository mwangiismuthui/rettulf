<?php

namespace App\Http\Controllers;

use App\Jobs\BulkEmailSender;
use Illuminate\Http\Request;
use App\Music;
use App\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Datatables\Datatables;
use Mail;
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
}
