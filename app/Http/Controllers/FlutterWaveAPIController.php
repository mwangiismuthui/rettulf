<?php

namespace App\Http\Controllers;

use App\FlutterWaveAPI;
use App\FooterSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class FlutterWaveAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        if ($request->ajax()) {

            $flutterwaveApi = FlutterWaveAPI::all();
            return Datatables::of($flutterwaveApi)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('flutterWaveConfigEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        $isSet = FlutterWaveAPI::count();

        return view('admin.site.apis.flutterwave',compact('isSet'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flutterWave = new FlutterWaveAPI();
        $flutterWave->public_key = $request->public_key;
        $flutterWave->secret_key = $request->secret_key;
        $flutterWave->encryption_key = $request->encryption_key;
        if($flutterWave->save()){
            return response([
                'success' => True,
                'message' => 'FlutterWave Configuration saved.',
            ], Response::HTTP_OK);
        }else{
            return response([
                'success' => false,
                'message' => 'FlutterWave Configuration not saved.',
            ], Response::HTTP_OK);
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FlutterWaveAPI  $flutterWaveAPI
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flutterWave = FlutterWaveAPI::find($id);
        return view('admin.site.apis.flutterwaveEdit', compact('flutterWave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FlutterWaveAPI  $flutterWaveAPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flutterWave = FlutterWaveAPI::find($id);
        if($flutterWave->update($request->all())){
            return response([
                'success' => True,
                'message' => 'FlutterWave Configuration updated.',
            ], Response::HTTP_OK);
        }else{
            return response([
                'success' => false,
                'message' => 'FlutterWave Configuration not updated.',
            ], Response::HTTP_OK);
        }
    }


}
