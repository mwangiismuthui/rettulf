<?php

namespace App\Http\Controllers;

use App\PayStackAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class PayStackAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $paystackAPI = PayStackAPI::all();
            return Datatables::of($paystackAPI)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('paystackConfigEdit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        $isSet = PayStackAPI::count();

        return view('admin.site.apis.paystack',compact('isSet'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paystackAPI = new PayStackAPI();
        $paystackAPI->public_key = $request->public_key;
        $paystackAPI->secret_key = $request->secret_key;
        $paystackAPI->encryption_key = $request->encryption_key;
        if($paystackAPI->save()){
            return response([
                'success' => True,
                'message' => 'PayStack Configuration saved.',
            ], Response::HTTP_OK);
        }else{
            return response([
                'success' => false,
                'message' => 'PayStack Configuration not saved.',
            ], Response::HTTP_OK);
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PayStackAPI  $payStackAPI
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paystackAPI = PayStackAPI::find($id);
        return view('admin.site.apis.paystackEdit', compact('paystack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PayStackAPI  $payStackAPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paystackAPI = PayStackAPI::find($id);
        if($paystackAPI->update($request->all())){
            return response([
                'success' => True,
                'message' => 'PayStack Configuration updated.',
            ], Response::HTTP_OK);
        }else{
            return response([
                'success' => false,
                'message' => 'PayStack Configuration not updated.',
            ], Response::HTTP_OK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PayStackAPI  $payStackAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayStackAPI $payStackAPI)
    {
        //
    }
}
