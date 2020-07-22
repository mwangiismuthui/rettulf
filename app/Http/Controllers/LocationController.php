<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;


class LocationController extends Controller
{
    function __construct()
    {
        
         $this->middleware('permission:manage-category');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $category = Location::all();
            return Datatables::of($category)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="locationdelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;
                    <a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('location.edit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>
                    
                    '
                    ;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view ('admin.location.index');
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
            $location = new Location();
            $location->location = $request->location;
            if ($location->save()) {
                return response([
                    'success'=>True,
                    'message'=>'Location  created Succesfully',
                ],Response::HTTP_OK);
            }else{
                return response([
                    'error'=>True,
                    'message'=>'Location not created',
                ],Response::HTTP_OK);
            }
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $locations =Location::where('id',$id)->get();
                 

        return view ('admin.location.edit',compact('locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Location::where('id',$id)
                    ->update([
                        'location'=> $request->location
                    ]);

                    return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                $location_id = $request->location_id;
        $location = Location::find($location_id);
        if ($location) {
            $location->delete();
            return response([
                'success'=>True,
                'message'=>'Location  deleted Succesfully',
            ],Response::HTTP_OK);
        } else {
            return response([
                'error'=>True,
                'message'=>'Location  not deleted',
            ],Response::HTTP_OK);
        }
        }
    
    }

}
