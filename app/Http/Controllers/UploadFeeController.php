<?php

namespace App\Http\Controllers;

use App\UploadFee;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;
class UploadFeeController extends Controller
{
    function __construct()
    {
         $this->middleware('role:Super-Admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $uploadFees = UploadFee::all();
            return Datatables::of($uploadFees)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="UploadFeedelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;
                    <a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('uploadFee.edit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>
                    
                    '
                    ;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view ('admin.uploadFee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $uploadFees = new UploadFee();
            $uploadFees->amount = $request->amount;
            if ($uploadFees->save()) {
                return response([
                    'success'=>True,
                    'message'=>'UploadFee  created Succesfully',
                ],Response::HTTP_OK);
            }else{
                return response([
                    'error'=>True,
                    'message'=>'UploadFee not created',
                ],Response::HTTP_OK);
            }
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UploadFee  $uploadFees
     * @return \Illuminate\Http\Response
     */
    public function show(UploadFee $uploadFees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UploadFee  $uploadFees
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $uploadFees =UploadFee::where('id',$id)->get();
                 

        return view ('admin.uploadFee.edit',compact('uploadFees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploadFee  $uploadFees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        UploadFee::where('id',$id)
                    ->update([
                        'amount'=> $request->amount
                    ]);

                    return redirect()->route('uploadFee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UploadFee  $uploadFees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                $uploadFees_id = $request->fee_id;
        $uploadFees = UploadFee::find($uploadFees_id);
        if ($uploadFees) {
            $uploadFees->delete();
            return response([
                'success'=>True,
                'message'=>'UploadFee  deleted Succesfully',
            ],Response::HTTP_OK);
        } else {
            return response([
                'success'=>True,
                'message'=>'UploadFee  not deleted',
            ],Response::HTTP_OK);
        }
        }
    
    }

}
