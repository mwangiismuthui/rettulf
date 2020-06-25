<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Location;
use App\Music;
use App\User;
use Auth;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = $this->genres();
        $latestMusic = $this->latestMusic(100);
        $trendingMusic = $this->trendingMusic(3, 100);
        $latestbeats = $this->latestBeats(100);
        $trendingBeats = $this->trendingBeats(3, 100);
        $topsongs = $trendingMusic->merge($latestMusic);
        $topbeats = $trendingBeats->merge($latestbeats);
        $featuredArtists = $this->featuredArtist();
        $featuredProducers = $this->featuredProducers();

        return view('frontend.index', compact('trendingMusic', 'genres', 'latestMusic', 'topsongs','featuredArtists','featuredProducers','topbeats'));
    }

    public function latestMusic($limit)
    {
        $latest = Music::with('user')->orderBy('music.created_at', 'Desc')
        ->where('music.type','=','music')
            ->limit($limit)
            ->get();
        return $latest;
    }
    public function trendingMusic($duration, $limit)
    {

        $number_of_days = \Carbon\Carbon::today()->subDays($duration);
        $trendingMusic = Music::with('user')->where('music.created_at', '>=', $number_of_days)
        ->where('music.type','=','music')
            ->orderBy('views', 'Desc')
            ->limit($limit)
            ->get();
        return $trendingMusic;
    }
    public function latestBeats($limit)
    {
        $latest = Music::with('user')->orderBy('music.created_at', 'Desc')
        ->where('music.type','=','beats')
            ->limit($limit)
            ->get();
        return $latest;
    }
    public function trendingBeats($duration, $limit)
    {

        $number_of_days = \Carbon\Carbon::today()->subDays($duration);
        $trendingMusic = Music::with('user')->where('music.created_at', '>=', $number_of_days)
        ->where('music.type','=','beats')
            ->orderBy('views', 'Desc')
            ->limit($limit)
            ->get();
        return $trendingMusic;
    }
    public function genres()
    {
        return Genre::all();
    }
    public function featuredArtist()
    {
        $featured_artist = User::role('Artist')->where('is_featured', '=', 1)->get();
        return $featured_artist;
    }
    public function featuredProducers()
    {
        $featuredProducers = User::role('Producer')->where('is_featured', '=', 1)->get();
        return $featuredProducers;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleGenre($id)
    {
        $genre = Genre::where('id',$id)->pluck('genre')->first();
        $genre_music = Music::where('genre_id',$id)->get();
        // return $genre_music;
        return view('frontend.genres',compact('genre_music','genre'));
    }
    public function singleArtist($id)
    {
        $user = User::where('id',$id)->get();
        $user_music = Music::where('user_id',$id)
                        ->orderBy('created_at','DESC')->get();
        // return $genre_music;
        return view('frontend.artist_single',compact('user_music','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function myMusic(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->get();
        $my_music = Music::where('user_id',$user_id)->get();
        return view('frontend.mymusic',compact('my_music','user'));

    }
    public function contact(Request $request)
    {
        return view('frontend.contactus');
    }
    public function pricing(Request $request)
    {
        
        return view('frontend.pricing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}