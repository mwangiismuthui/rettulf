<?php

namespace App\Http\Controllers;

use App\Commision;
use App\FooterSetting;
use App\Jobs\BulkEmailSender;
use Illuminate\Http\Request;
use App\Music;
use App\SiteSetting;
use App\TemporaryTransaction;
use App\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Datatables\Datatables;
use Validator;

class AdminController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:manage-music', ['only' => ['adminMusic']]);
        $this->middleware('permission:manage-emails', ['only' => ['bulkEmails', 'bulkEmailsSend']]);
        $this->middleware('permission:manage-site-settings', ['only' => ['siteSettingsIndex', 'siteSettingsStore', 'siteSettingsEdit', 'siteSettingsUpdate', 'sitesettingsDelete']]);
        $this->middleware('permission:activate-artist', ['only' => ['activation']]);
    }

    public function dashboard(Request $request)
    {
        $totalMusic = Music::count();
        $producers = User::role('Producer')->count();
        $artists = User::role('Artist')->count();
        $total_sales = Commision::pluck('amount')->sum();
        if ($request->ajax()) {
            $music = Music::with('user')
                ->orderBy('created_at', 'DESC')
                ->get();
            // dd($music);
            return Datatables::of($music)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == '0') {
                        return '<a class="btn btn-outline-warning btn-round waves-effect waves-light view" id="' . $data->id . '"><i class="fa fa-volume-up"></i></a> &nbsp;&nbsp;  &nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unpublished</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">Unpublish </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a>

                        </div>';
                    } elseif ($data->status == '1') {

                        return '<a class="btn btn-outline-warning btn-round waves-effect waves-light view" id="' . $data->id . '"><i class="fa fa-volume-up"></i></a> &nbsp;&nbsp; <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Published</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">Unpublish </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a>

                        </div>';
                    }
                })->addColumn('is_paid', function ($data) {
                    if ($data->is_paid == '0') {
                        return '<a class="btn btn-outline-warning btn-round waves-effect waves-light view" id="' . $data->id . '">Unpaid<i class="fa fa-times-circle-o"></i></a>';
                    } elseif ($data->is_paid == '1') {

                        return '<a class="btn btn-outline-success btn-round waves-effect waves-light view" id="' . $data->id . '">Paid<i class="fa fa-times-circle-o"></i></a>';
                    }
                })->addColumn('contact', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="mailto:' . $data->user->email . '" ><i class="ti-email"></i></a> &nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="tel:' . $data->phone . '" ><i class="fa fa-phone"></i></a>';
                })
                ->rawColumns(['status', 'action', 'contact', 'is_paid'])
                ->make(true);
        }
        return view('admin.dashboard.index', compact('artists', 'totalMusic', 'producers', 'total_sales'));
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
                        return '<a class="btn btn-outline-warning btn-round waves-effect waves-light view" id="' . $data->id . '"><i class="fa fa-volume-up"></i></a> &nbsp;&nbsp;  &nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unpublished</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">Unpublish </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a>

                        </div>';
                    } elseif ($data->status == '1') {

                        return '<a class="btn btn-outline-warning btn-round waves-effect waves-light view" id="' . $data->id . '"><i class="fa fa-volume-up"></i></a> &nbsp;&nbsp; <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Published</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="New(\'' . $data->id . '\')">Unpublish </a>
                        <a class="dropdown-item" data-id="" onclick="Published(\'' . $data->id . '\')">Publish </a>

                        </div>';
                    }
                })->addColumn('is_paid', function ($data) {
                    if ($data->type == 'beats') {
                        if ($data->is_paid == '0') {
                            return '<a class="btn btn-outline-warning btn-round waves-effect waves-light" id="' . $data->id . '">Unpaid<i class="fa fa-times-circle-o"></i></a>';
                        } elseif ($data->is_paid == '1') {

                            return '<a class="btn btn-outline-success btn-round waves-effect waves-light" id="' . $data->id . '">Paid<i class="fa fa-times-circle-o"></i></a>';
                        }
                    }else{
                        return '<a class="btn btn-outline-info btn-round waves-effect waves-light" id="' . $data->id . '">Free<i class="fa fa-times-circle-o"></i></a>';

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
                'success' => true,
                'message' => "Music Status Updated!",
            ], Response::HTTP_OK);
        } else {
            return response([
                'erros' => true,
                'message' => "Music Status not Updated!",
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
            'identifier' =>'BULK-MESSAGES',
            'subject' =>$subject,
            'from_email' =>'noreply@justerudite.com',
            'company_name' =>config('app.name'),
            'message' =>$themessage,

        );

        if ($clients == 'producers') {
            $recipient_emails = User::role('Producer')->pluck('email');
            //  return $recipient_emails;
        } elseif ($clients == 'artist') {
            $recipient_emails = User::role('Artist')->pluck('email');
            //  return $recipient_emails;

        } elseif ($clients == 'normal-users') {
            $recipient_emails = User::role('Normal User')->pluck('email');
            //  return $recipient_emails;

        } elseif ($clients == 'both') {
            $producers = User::role('Producer')->pluck('email');
            $artists = User::role('Artist')->pluck('email');
            $recipient_emails = $producers->merge($artists);
        } elseif ($clients == '') {

            return redirect()->back()->with('error', 'No recipients Selected');
        }


        BulkEmailSender::dispatch($recipient_emails, $data)->delay(Carbon::now()->addSeconds(5));

        //  dispatch($job);


        return redirect()->back()->with('success', 'Success Emails are being sent!');
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
            'logo' => 'required|mimes:png,jpg,jpeg',
            'bank_details' => 'required',
            'client_id' => 'required',
            'paypal_secret' => 'required',
            'beatplaytime' => 'required',
            'favicon' => 'required|mimes:png,jpg,jpeg,ico',
            'loading_icon' => 'required|mimes:gif',

        ];
        $messages = [
            'loading_icon.mimes' => 'Loading Icon must be of farmat: gif',
            'logo.mimes' => 'Logo must be of farmat: png,jpg,jpeg',
            'favicon.mimes' => 'Favicon must be of farmat: png,jpg,jpeg,ico',
        ];
        $error = Validator::make($request->all(), $rules, $messages);
        if ($error->fails()) {
            return response([
                'errors' => True,
                'message' => $error->errors()->all(),
            ], Response::HTTP_OK);
        }

        if ($request->hasFile('logo')) {
            $coverfileDestination = '/Logos';
            $logo = $request->file('logo');
            $logoname = $this->generateUniqueFileName($logo, $coverfileDestination);

        }
        if ($request->hasFile('loading_icon')) {
            $coverfileDestination = '/Loading_Icons';
            $loading_icon = $request->file('loading_icon');
            $loading_iconname = $this->generateUniqueFileName($loading_icon, $coverfileDestination);

        }
        if ($request->hasFile('favicon')) {
            $coverfileDestination = '/Favicon';
            $favicon = $request->file('favicon');
            $faviconname = $this->generateUniqueFileName($favicon, $coverfileDestination);

        }
        $sitesettings = new SiteSetting();
        $sitesettings->logo = $logoname;
        $sitesettings->loading_icon = $loading_iconname;
        $sitesettings->favicon = $faviconname;
        $sitesettings->bank_details = $request->bank_details;
        $sitesettings->paypal_client_id = $request->client_id;
        $sitesettings->paypal_secret = $request->paypal_secret;
        $sitesettings->beat_time = $request->beatplaytime;
        if ($sitesettings->save()) {
            return response([
                'success' => True,
                'message' => 'Site Settings Added Successfully',
            ], Response::HTTP_OK);


        } else {
            return response([
                'error' => True,
                'message' => $error->errors()->all(),
            ], Response::HTTP_OK);
        }
    }

    public function siteSettingsEdit(Request $request, $id)
    {
        $sitesettings = SiteSetting::where('id', $id)->get();


        return view('admin.site.edit', compact('sitesettings'));
    }


    public function siteSettingsUpdate(Request $request, $id)
    {

        // dd($request->hasFile('logo'));


        $rules = [
            'logo' => 'mimes:png,jpg,jpeg',
            'bank_details' => 'required',
            'client_id' => 'required',
            'paypal_secret' => 'required',
            'beatplaytime' => 'required',
            'favicon' => 'mimes:png,jpg,jpeg,ico',
            'loading_icon' => 'mimes:gif',

        ];
        $messages = [
            'loading_icon.mimes' => 'Loading Icon must be of farmat: gif',
            'logo.mimes' => 'Logo must be of farmat: png,jpg,jpeg',
            'favicon.mimes' => 'Favicon must be of farmat: png,jpg,jpeg,ico',
        ];
        $error = Validator::make($request->all(), $rules, $messages);

        if ($error->fails()) {
            return response([
                'errors' => True,
                'message' => $error->errors()->all(),
            ], Response::HTTP_OK);
        }
        if ($request->hasFile('logo')) {
            $coverfileDestination = '/Logos';
            $logo = $request->file('logo');
            $filename = $this->generateUniqueFileName($logo, $coverfileDestination);

        } else {
            $filename = SiteSetting::where('id', $id)->pluck('logo')->first();

        }
        if ($request->hasFile('loading_icon')) {
            $coverfileDestination = '/Loading_Icons';
            $loading_icon = $request->file('loading_icon');
            $loading_iconname = $this->generateUniqueFileName($loading_icon, $coverfileDestination);

        } else {
            $loading_iconname = SiteSetting::where('id', $id)->pluck('loading_icon')->first();
        }
        if ($request->hasFile('favicon')) {
            $coverfileDestination = '/Favicon';
            $favicon = $request->file('favicon');
            $faviconname = $this->generateUniqueFileName($favicon, $coverfileDestination);

        } else {
            $faviconname = SiteSetting::where('id', $id)->pluck('favicon')->first();
        }

        SiteSetting::where('id', $id)->update([
            'logo' => $filename,
            'loading_icon' => $loading_iconname,
            'favicon' => $faviconname,
            'bank_details' => $request->bank_details,
            'paypal_client_id' => $request->client_id,
            'paypal_secret' => $request->paypal_secret,
            'beat_time' => $request->beatplaytime
        ]);
        return redirect()->route('siteSettingsIndex')->with('success', 'Site Settings Updated Succesfully');

    }

    public function sitesettingsDelete(Request $request)
    {
        if ($request->ajax()) {
            $siteSettings_id = $request->siteSettings_id;
            $siteSettings = SiteSetting::find($siteSettings_id);
            if ($siteSettings) {
                $siteSettings->delete();
                return response([
                    'success' => True,
                    'message' => 'Site Settings  deleted Succesfully',
                ], Response::HTTP_OK);
            } else {
                return response([
                    'error' => True,
                    'message' => 'Site Settings  not deleted',
                ], Response::HTTP_OK);
            }
        }

    }

    public function footerSettingsIndex(Request $request)
    {
        if ($request->ajax()) {

            $footerSettings = FooterSetting::all();
            return Datatables::of($footerSettings)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('footerSettingsEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        $isSet = FooterSetting::count();

        return view('admin.site.footer.index',compact('isSet'));
    }

    public function footerSettingsStore(Request  $request){
        $rules = [
            'about' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'footer_text' => 'required',
//            'twitter' => 'required',
//            'facebook' => 'required',
//            'instagram' => 'required',
//            'linkedin' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            return response([
                'errors' => True,
                'message' => $error->errors()->all(),
            ], Response::HTTP_OK);
        }

        $footerSettings = new FooterSetting();
        $footerSettings->about = $request->about;
        $footerSettings->phone = $request->phone;
        $footerSettings->email = $request->email;
        $footerSettings->contact = $request->contact;
        $footerSettings->twitter = $request->twitter;
        $footerSettings->facebook = $request->facebook;
        $footerSettings->instagram = $request->instagram;
        $footerSettings->linkedin = $request->linkedin;
        $footerSettings->footer_text = $request->footer_text;

        if ($footerSettings->save()){
            return response([
                'success' => True,
                'message' => 'Footer Settings saved.',
            ], Response::HTTP_OK);


        } else {
            return response([
                'error' => True,
                'message' => "Failed to save settings",
            ], Response::HTTP_OK);
        }

    }

    public function footerSettingsEdit(Request $request, $id)
    {
        $footerSettings = FooterSetting::where('id', $id)->get();


        return view('admin.site.footer.edit', compact('footerSettings'));
    }


    public function footerSettingsUpdate(Request  $request, $id){
        $rules = [
            'about' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'footer_text' => 'required',
//            'twitter' => 'required',
//            'facebook' => 'required',
//            'instagram' => 'required',
//            'linkedin' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            return response([
                'errors' => True,
                'message' => $error->errors()->all(),
            ], Response::HTTP_OK);
        }

        $footerSettings = FooterSetting::find($id);
        $footerSettings->about = $request->about;
        $footerSettings->phone = $request->phone;
        $footerSettings->email = $request->email;
        $footerSettings->contact = $request->contact;
        $footerSettings->twitter = $request->twitter;
        $footerSettings->facebook = $request->facebook;
        $footerSettings->instagram = $request->instagram;
        $footerSettings->linkedin = $request->linkedin;
        $footerSettings->footer_text = $request->footer_text;


        if ($footerSettings->update()){
            return response([
                'success' => True,
                'message' => 'Footer Settings updated.',
            ], Response::HTTP_OK);


        } else {
            return response([
                'error' => True,
                'message' => "Failed to update settings",
            ], Response::HTTP_OK);
        }

    }

    public function footerSettingsDelete(Request $request)
    {
        if ($request->ajax()) {
            $footerSettings_id = $request->footerset_id;
            dd($footerSettings_id);
            $footerSettings = FooterSetting::find($footerSettings_id);
            if ($footerSettings) {
                $footerSettings->delete();
                return response([
                    'success' => True,
                    'message' => 'Footer Settings  deleted Successfully',
                ], Response::HTTP_OK);
            } else {
                return response([
                    'error' => True,
                    'message' => 'Footer Settings  not deleted',
                ], Response::HTTP_OK);
            }
        }

    }

    public function activation(Request $request)
    {
        if ($request->ajax()) {
            $producers = User::role('Producer')->get();
            $artist = User::role('Artist')->get();
            $users = $producers->merge($artist);
            return Datatables::of($users)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->is_featured == '0') {
                        return ' <a class="btn btn-outline-warning btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unfeatured</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="makeFeatured(\'' . $data->id . '\')">Make Featured </a>
                        <a class="dropdown-item" data-id="" onclick="unFeature(\'' . $data->id . '\')">Unfeature </a>

                        </div>';
                    } elseif ($data->is_featured == '1') {

                        return ' <a class="btn btn-outline-success btn-round waves-effect waves-light dropdown-toggle"        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Featured</a><div class="dropdown-menu">
                        <a class="dropdown-item" data-id="" onclick="makeFeatured(\'' . $data->id . '\')">Make Featured </a>
                        <a class="dropdown-item" data-id="" onclick="unFeature(\'' . $data->id . '\')">Unfeature </a>

                        </div>';
                    }
                })
                ->rawColumns(['status', 'action', 'contact', 'is_paid'])
                ->make(true);
        }

        return view('admin.music.activation');
    }

    public function makeFeatured(Request $request)
    {
        $user_id = $request->user_id;
        $status = $request->status;
        if (User::where('id', $user_id)->update([

            'is_featured' => $status
        ])) {
            return response([
                'success' => True,
                'message' => "Activation Status Updated!",
            ], Response::HTTP_OK);
        } else {
            return response([
                'errors' => True,
                'message' => "Activation Status not Updated!",
            ], Response::HTTP_OK);
        }

    }

    public function generateUniqueFileName($image, $destinationPath)
    {
        $initial = "Logo";
        $name = $initial . bin2hex(random_bytes(8)) . '.' . $image->getClientOriginalExtension();
        if ($image->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }


    public function Musicshow($id)
    {
        if (request()->ajax()) {
            $data = Music::findOrFail($id);
            // return $data;
            return response(['data' => $data], Response::HTTP_OK);
        }
    }


}
