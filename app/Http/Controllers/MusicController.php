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
use App\Http\Controllers\PaymentController;
class MusicController extends Controller
{

    // $user_id= Auth::user()->id;
    // protected $user_id 
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
        $categories = Category::all();
        return view('frontend.upload', compact('genres', 'keys', 'categories'));
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
            // 'key_id' => 'required',
            'title' => 'required',
            // 'type' => 'required',
            'description' => 'required',
            // 'tempo' => 'required',
            'cover_art' => 'required',
            'music' => 'required',
            // 'price' => 'required',

        ];
        $messages = [
            'genre_id.required' => 'The Genre is required.',
            'title.required' => 'The Title is required.',
            // 'key_id.required' => 'The Key is required.',
            'type.required' => 'The File type is required.',
            // 'tempo.required' => 'The Tempo of beat is required.',
            'cover_art.required' => 'The Cover art is required.',
            'music.required' => 'The music file is required.',
            'description.required' => 'The music Description is required.',
            'price.required' => 'The music Price is required.',
        ];

        $error = Validator::make($request->all(), $rules, $messages);

        if ($error->fails()) {
            return response([
                'errors' =>  $error->errors()->all(),
            ], Response::HTTP_OK);
        }
        $user = Auth::user();
        if ($user->hasRole('Producer')) {
            $type = "beats";
        } elseif ($user->hasRole('Artist')) {
            $type = "music";
        } else {
            $type = '';
        }
        $payment = new PaymentController;
        $music = new Music();
        $music->user_id = Auth::user()->id;
        // $music->user_id =Auth::user()->id;
        $music->genre_id = $request->genre_id;
        $music->key_id = $request->key_id;
        $music->title = $request->title;
        $music->type = $type;
        $music->tempo_of_beat = $request->tempo;
        $music->description = $request->description;
        $music->price = $request->price;


        if ($request->hasFile('music')) {
            $fileDestination = '/uploadedFiles';
            $musicfiile = $request->file('music');
            $filename = $this->generateUniqueFileName($musicfiile, $fileDestination);
            $music->music = $filename;
            $rawfile = $this->analyzeFile(public_path() . $fileDestination .'/'. $filename);
            $music->duration = $rawfile['playtime_string'];
            $music->size = $rawfile['filesize'];

        }

        if ($request->hasFile('cover_art')) {
            $coverfileDestination = '/uploadedCoverArts';
            $coverart = $request->file('cover_art');
            $filename = $this->generateUniqueFileName($coverart, $coverfileDestination);
            $music->cover_art = $filename;
        }
        if ($music->save()) {
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
    public function musicpath(Request $request)
    {
        if ($request->ajax()) {
        $music_id = $request->id;
        $musics = Music::where('id',$music_id)->get();
        foreach ($musics as $music) {
          $music_path = $music->music;
          $coverart = $music->cover_art;
          $artist = $music->user->name;
        }
        $views = Music::where('id', $music_id)->pluck('views')->first();
        $new_views = $views + 1;
        Music::where('id', $music_id)->update([
           
            'views' => $new_views,
        ]);
        $music = [
            'music_path'=>$music_path,
            'coverart'=>$coverart,
            'artist'=>$artist,
        ];
        
        return $music;
        }
       
    }

    // public function generateUniqueFileName($musicfiile, $destinationPath)
    // {
    //     $initial = "musicfile";
    //     $name = $initial . str_random() . time() . '.' . $musicfiile->getClientOriginalExtension();
    //     if ($musicfiile->move(public_path() . $destinationPath, $name)) {
    //         return $name;
    //     } else {
    //         return null;
    //     }
    // }
    public function generateUniqueFileName($image, $destinationPath)
    {
        $initial = "musicfile_";
        $name = $initial  . bin2hex(random_bytes(8)) . '.' . $image->getClientOriginalExtension();
        if ($image->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }



    public function analyzeFile($full_video_path)
    {
        $getID3 = new \getID3;
        $file = $getID3->analyze($full_video_path);      
        return $file;
    }
}
