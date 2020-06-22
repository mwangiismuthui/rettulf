<?php

namespace App\Http\Controllers;

use App\Seo;
use App\Product;
use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;
class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        if ($request->ajax()) {

            $seo = Seo::with('product')->get();
            return Datatables::of($seo)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="seodelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('seo.edit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.seo.index',compact('products'));
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
    public function edit(Request $request,$id)
    {
        $seos =Seo::where('id',$id)->get();
      
        
        $products = Product::all();
        

        return view ('admin.seo.edit',compact('seos','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'product_id' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors'=>True,
                'message'=>$error->errors()->all(),
            ],Response::HTTP_OK);
        }

        $seo = new Seo();
        $seo->product_id = $request->product_id;
        $seo->meta_description = $request->meta_description;
        $seo->meta_keyword = $request->meta_keyword;
        if ($seo->save()) {
            return response([
                'error'=>False,
                'message'=>'Seo Added Successfully',
            ],Response::HTTP_OK);
        
          
        }
    }



    public function update(Request $request,$id){
      
        $rules = [
            'product_id' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors'=>True,
                'message'=>$error->errors()->all(),
            ],Response::HTTP_OK);
        }

     
        Seo::where('id',$id)->update([
            'product_id'=>$request->product_id,
            'meta_description'=>$request->meta_description,
            'meta_keyword'=>$request->meta_keyword,
        ]);
        return response([
            'success'=>True,
            'message'=>'Seo Updated Succesfully',
        ],Response::HTTP_OK);;
    
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $seo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                $seo_id = $request->seo_id;
        $seo = Seo::find($seo_id);
        if ($seo) {
            $seo->delete();
            return response([
                'success'=>True,
                'message'=>'Seo  deleted Succesfully',
            ],Response::HTTP_OK);
        } else {
            return response([
                'success'=>True,
                'message'=>'Seo  not deleted',
            ],Response::HTTP_OK);
        }
        }
    
    }   
}