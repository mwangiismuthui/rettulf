<?php

namespace App\Http\Controllers;

use App\Category;
use App\Genre;
use App\Key;
use App\Music;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;
use Validator;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $keys = Key::all();
        $categories= Category::all();
        return view('frontend.upload',compact('genres','keys','categories'));
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
            'genre_id' => 'required',
            'key_id' => 'required',
            'title' => 'required',
            // 'type' => 'required',
            'description' => 'required',
            'tempo' => 'required',
            'cover_art' => 'required',
            'music' => 'required',
            'price' => 'required',

        ];
        $messages = [
            'genre_id.required' => 'The Genre is required.',
            'title.required' => 'The Title is required.',
            'key_id.required' => 'The Key is required.',
            'type.required' => 'The File type is required.',
            'tempo.required' => 'The Tempo of beat is required.',
            'cover_art.required' => 'The Cover art is required.',
            'music.required' => 'The music file is required.',
            'description.required' => 'The Vehicle Description is required.',
            'price.required' => 'The Vehicle Price is required.',
        ];

        $error = Validator::make($request->all(), $rules, $messages);

        if ($error->fails()) {
            return response([
                'errors' =>  $error->errors()->all(),
            ], Response::HTTP_OK);
        }

        $music = new Music();
        // $music->user_id =Auth::user()->id;
        $music->user_id ="13f21bb7-f46b-472e-ab03-af1cbfef0e28";
        $music->genre_id =$request->genre_id;
        $music->key_id =$request->key_id;
        $music->title =$request->title;
        $music->type ='music';
        $music->tempo_of_beat =$request->tempo;
        $music->description =$request->description;        
        $music->price =$request->price;        
        

        if($request->hasFile('music')){
            $fileDestination = 'uploadedFiles';
            $musicfiile = $request->file('music');
            $filename = $this->generateUniqueFileName($musicfiile, $fileDestination);
            $music->music =$filename;
        }

        if($request->hasFile('cover_art')){
            $coverfileDestination = 'uploadedCoverArts';
            $coverart = $request->file('cover_art');
            $filename = $this->generateUniqueFileName($coverart, $coverfileDestination);
            $music->cover_art = $filename;
        }
        if($music->save())
        {
            return response([
                'success' =>  'Files uploaded successfully',
            ], Response::HTTP_OK);
        } else {

            return response([
                'warning' => 'Files not saved',
            ], Response::HTTP_OK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }

    public function generateUniqueFileName($musicfiile, $destinationPath)
    {
        $initial = "musicfile";
        $name = $initial . str_random() . time() . '.' . $musicfiile->getClientOriginalExtension();
        if ($musicfiile->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }
}
