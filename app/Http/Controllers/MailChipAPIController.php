<?php

namespace App\Http\Controllers;

use App\FlutterWaveAPI;
use App\MailChipAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class MailChipAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $mailChipAPi = MailChipAPI::all();
            return Datatables::of($mailChipAPi)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('mailChipConfigEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $isSet = MailChipAPI::count();

        return view('admin.site.apis.mailchip', compact('isSet'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $mailchimp = new MailChipAPI();
        $mailchimp->api_key = $request->api_key;
        $mailchimp->list_id = $request->list_id;
        if ($mailchimp->save()) {
            $this->setEnv('MAILCHIMP_APIKEY', $mailchimp->api_key);
            $this->setEnv('MAILCHIMP_LIST_ID', $mailchimp->list_id);
            return response([
                'success' => True,
                'message' => 'MailChimp Configuration saved.',
            ], Response::HTTP_OK);
        } else {
            return response([
                'success' => false,
                'message' => 'MailChimp Configuration not saved.',
            ], Response::HTTP_OK);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\MailChipAPI $mailChipAPI
     * @return \Illuminate\Http\Response
     */
    public
    function edit(MailChipAPI $mailChipAPI, $id)
    {
        $mailChimpAPI = MailChipAPI::find($id);
        return view('admin.site.apis.mailchipEdit', compact('mailChimpAPI'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\MailChipAPI $mailChipAPI
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, MailChipAPI $mailChipAPI, $id)
    {
        $mailChipAPI = MailChipAPI::find($id);
        $oldApiValue = $mailChipAPI->api_key;
        $oldIdValue = $mailChipAPI->list_id;
        if ($mailChipAPI->update($request->all())) {
            $this->setEnv('MAILCHIMP_APIKEY', $mailChipAPI->api_key,$oldApiValue);
            $this->setEnv('MAILCHIMP_LIST_ID', $mailChipAPI->list_id,$oldIdValue);
            Artisan::call('config:cache');

            return response([
            'success' => True,
                'message' => 'MailChimp Configuration updated.',
            ], Response::HTTP_OK);
        } else {
            return response([
                'success' => false,
                'message' => 'MailChimp Configuration not updated.',
            ], Response::HTTP_OK);
        }
    }

    private function setEnv($key, $value,$oldValue)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . $oldValue, $key . '=' . $value, file_get_contents($path)
            ));
        }

    }

}
