<?php

namespace App\Http\Controllers;

use App\Key;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;
class KeyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:manage-keys');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $key = Key::all();
            return Datatables::of($key)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="keydelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;
                    <a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('key.edit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>
                    
                    '
                    ;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view ('admin.key.index');
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
            $key = new Key();
            $key->key = $request->key;
            if ($key->save()) {
                return response([
                    'success'=>True,
                    'message'=>'Key  created Succesfully',
                ],Response::HTTP_OK);
            }else{
                return response([
                    'error'=>True,
                    'message'=>'Key not created',
                ],Response::HTTP_OK);
            }
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function show(Key $key)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $keys =Key::where('id',$id)->get();
                 

        return view ('admin.key.edit',compact('keys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Key::where('id',$id)
                    ->update([
                        'key'=> $request->key
                    ]);

                    return redirect()->route('key.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                $key_id = $request->key_id;
        $key = Key::find($key_id);
        if ($key) {
            $key->delete();
            return response([
                'success'=>True,
                'message'=>'Key  deleted Succesfully',
            ],Response::HTTP_OK);
        } else {
            return response([
                'success'=>True,
                'message'=>'Key  not deleted',
            ],Response::HTTP_OK);
        }
        }
    
    }

}
