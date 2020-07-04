<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Location;
use App\Music;
use App\PaypalPayment;
use App\User;
use App\Seo;
use App\Slider;
use App\Withdrawal;
use Auth;
use Illuminate\Http\Request;
use Response;

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
        $sliders = Slider::all();
        $latestMusic = $this->latestMusic(5);
        $trendingMusic = $this->trendingMusic(7, 5);
        $latestbeats = $this->latestBeats(5);
        $trendingBeats = $this->trendingBeats(7, 5);
        $topsongs = $trendingMusic->merge($latestMusic);
        $topbeats = $trendingBeats->merge($latestbeats);
        $featuredArtists = $this->featuredArtist();
        $featuredProducers = $this->featuredProducers();
        $seo = Seo::where('seos.page_title', 'like', 'Homepage')->first();
        // return $trendingBeats;
        return view('frontend.index', compact('trendingMusic', 'trendingBeats', 'genres', 'latestMusic', 'topsongs', 'featuredArtists', 'featuredProducers', 'topbeats', 'seo','sliders'));
    }

    public function latestMusic($limit)
    {
        $latest = Music::with('user')->orderBy('music.created_at', 'Desc')
            ->where('music.type', '=', 'music')
            ->where('music.status', 1)
            ->limit($limit)
            ->get();
        return $latest;
    }
    public function trendingMusic($duration, $limit)
    {

        $number_of_days = \Carbon\Carbon::today()->subDays($duration);
        $trendingMusic = Music::with('user')->where('music.created_at', '>=', $number_of_days)
            ->where('music.type', '=', 'music')
            ->where('music.status', 1)
            ->orderBy('views', 'Desc')
            ->limit($limit)
            ->get();
        return $trendingMusic;
    }

    public function latestBeats($limit)
    {
        $latest = Music::with('user')->orderBy('music.created_at', 'Desc')
            ->where('music.type', '=', 'beats')
            ->where('music.status', 1)
            ->limit($limit)
            ->get();
        return $latest;
    }
    public function trendingBeats($duration, $limit)
    {

        $number_of_days = \Carbon\Carbon::today()->subDays($duration);
        $trendingMusic = Music::with('user')->where('music.created_at', '>=', $number_of_days)
            ->where('music.type', '=', 'beats')
            ->where('music.status', 1)
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
        $featured_artist = User::role('Artist')->where('is_featured', '=', 1)->withCount('music')->get()->toArray();
        // return $featured_artist;
        $listlen = sizeof($featured_artist);
        if ($listlen > 3) {
            $group = floor($listlen / 3);
            $partlen = floor($listlen / $group);
            $partrem = $listlen % $group;
            $partition = collect(new User());
            $mark = 0;
            for ($px = 0; $px < $group; $px++) {
                $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
                $partition->add(array_slice($featured_artist, $mark, $incr));
                $mark += $incr;
            }
            return collect($partition);
        } else {
           return [];
        }
    }
    public function featuredProducers()
    {
        $featuredProducers = User::role('Producer')->where('is_featured', '=', 1)->withCount('music')->get()->toArray();

        $listlen = sizeof($featuredProducers);
        if ($listlen > 3) {
            $group = floor($listlen / 3);
            $partlen = floor($listlen / $group);
            $partrem = $listlen % $group;
            $partition = collect(new User());
            $mark = 0;
            for ($px = 0; $px < $group; $px++) {
                $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
                $partition->add(array_slice($featuredProducers, $mark, $incr));
                $mark += $incr;
            }
            return collect($partition);
        } else {
           return [];   
        }


       
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleGenre($id)
    {
        $genre = Genre::where('id', $id)->pluck('genre')->first();
        $genre_music = Music::where('genre_id', $id)
            ->where('music.status', 1)
            ->get();
        $seo = Seo::where('seos.page_title', 'like', 'singleGenre')->first();

        if (sizeOf($genre_music) == 1 ) {
            $musicsplit =  $genre_music->split(2);
            $musicsplit[1] = []; 
        } elseif(sizeOf($genre_music) == 0){
            $musicsplit[0] = [];
            $musicsplit[1] = [];
        }else{
            $musicsplit =  $genre_music->split(2);
        }
        // $count = count($genre_music); 
        // $half = $count/2; 
        // $musicsplit = $genre_music->chunk(1);
       
        // $music2 =  $genre_music->skip($half);
        // return $music1;
        
        
        return view('frontend.genres', compact('musicsplit', 'genre','seo'));
    }
    public function singleArtist($id)
    {
        $user = User::where('id', $id)->get();
        $user_music = Music::where('user_id', $id)
            ->where('music.status', 1)
            ->orderBy('created_at', 'DESC')->get();
        $seo = Seo::where('seos.page_title', 'like', 'singleArtist')->first();

        // return $genre_music;
        return view('frontend.artist_single', compact('user_music', 'user'));
    }
    public function singleProducer($id)
    {
        $user = User::where('id', $id)->get();
        $user_music = Music::where('user_id', $id)

            ->where('music.status', 1)
            ->orderBy('created_at', 'DESC')->get();
        $seo = Seo::where('seos.page_title', 'like', 'singleProducer')->first();
        return view('frontend.artist_single', compact('user_music', 'user','seo'));
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
        $user = User::with('balance')->where('id', $user_id)->get();
        $pending_withdrawals = Withdrawal::where('user_id', $user_id)
            // ->where('status',0)
            ->get();
        $published_music_count = Music::where('user_id', $user_id)->where('status',1)->count();
        $unpublished_music_count = Music::where('user_id', $user_id)->where('status',0)->count();
        $my_music = Music::where('user_id', $user_id)

            // ->where('music.status', 1)
            ->get();
        $seo = Seo::where('seos.page_title', 'like', 'myMusic')->first();

        return view('frontend.mymusic', compact('my_music', 'user', 'seo', 'pending_withdrawals','published_music_count','unpublished_music_count'));
    }
    public function contact(Request $request)
    {
        $seo = Seo::where('seos.page_title', 'like', 'contact')->first();

        return view('frontend.contactus', compact('seo'));
    }
    public function pricing(Request $request)
    {

        return view('frontend.pricing');
    }


    public function buymusic($id)
    {
        $music = Music::find($id);
        $seo = Seo::where('seos.page_title', 'like', 'buymusic')->first();
        return view('frontend.buymusic', compact('music', 'seo'));
    }

    public function topArtists()
    {
        $feturedUsers = User::role('Artist')->where('is_featured', '1')->get();
        $users = User::with('music')->get()->sortBy(function ($user) {
            if ($user->hasRole('Artist')) {
                return $user->music->count();
            }
        });
        $seo = Seo::where('seos.page_title', 'like', 'topArtists')->first();
        return view('frontend.users', compact('users', 'feturedUsers', 'seo'));
    }
    public function topProducers()
    {
        $feturedUsers = User::role('Producer')->where('is_featured', '1')->get();
        $users = User::with('music')->get()->sortBy(function ($user) {
            if ($user->hasRole('Producer')) {
                return $user->music->count();
            }
        });
        $seo = Seo::where('seos.page_title', 'like', 'topProducers')->first();
        return view('frontend.users', compact('users', 'feturedUsers', 'seo'));
    }

    public function mostDownloadedSongs()
    {
        $musics = Music::where('downloads', '>', 1)->where('type', 'music')->orderBy('downloads', 'desc')->get();
        $seo = Seo::where('seos.page_title', 'like', 'mostDownloadedSongs')->first();
        $musicsplit = $musics->chunk(2);
        $title = 'Most Downloaded Songs';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }

    public function mostListenedSongs()
    {
        $musics = Music::where('views', '>', 1)->where('type', 'music')->orderBy('views', 'desc')->get();
        $seo = Seo::where('seos.page_title', 'like', 'mostListenedSongs')->first();
        // return $seo;
        if (sizeOf($musics) == 1 ) {
            $musicsplit =  $musics->split(2);
            $musicsplit[1] = []; 
        } elseif(sizeOf($musics) == 0){
            $musicsplit[0] = [];
            $musicsplit[1] = [];
        }else{
            $musicsplit =  $musics->split(2);
        }
        $title = 'Most Listened Songs';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }

    public function newSongs()
    {
        $seo = Seo::where('seos.page_title', 'like', 'newSongs')->first();
        $musics = Music::where('type', 'music')

            ->where('music.status', 1)
            ->latest()->get();
        // dd($musics);
        if (sizeOf($musics) == 1 ) {
            $musicsplit =  $musics->split(2);
            $musicsplit[1] = []; 
        } elseif(sizeOf($musics) == 0){
            $musicsplit[0] = [];
            $musicsplit[1] = [];
        }else{
            $musicsplit =  $musics->split(2);
        }
        $title = 'New Songs';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }

    public function mostDownloadedBeats()
    {
        $seo = Seo::where('seos.page_title', 'like', 'mostDownloadedBeats')->first();

        $musics = Music::where('downloads', '>', 1)->where('type', 'beats')

            ->where('music.status', 1)
            ->orderBy('downloads', 'desc')->get();
        // dd($musics);
        if (sizeOf($musics) == 1 ) {
            $musicsplit =  $musics->split(2);
            $musicsplit[1] = []; 
        } elseif(sizeOf($musics) == 0){
            $musicsplit[0] = [];
            $musicsplit[1] = [];
        }else{
            $musicsplit =  $musics->split(2);
        }
        $title = 'Most Downloaded Beats';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }

    public function mostListenedBeats()
    {
        $seo = Seo::where('seos.page_title', 'like', 'most-Listened-beats')->first();

        $musics = Music::where('views', '>', 1)->where('type', 'beats')

            ->where('music.status', 1)
            ->orderBy('views', 'desc')->get();
            if (sizeOf($musics) == 1 ) {
                $musicsplit =  $musics->split(2);
                $musicsplit[1] = []; 
            } elseif(sizeOf($musics) == 0){
                $musicsplit[0] = [];
                $musicsplit[1] = [];
            }else{
                $musicsplit =  $musics->split(2);
            }
        $title = 'Most Listened Beats';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }

    public function newBeats()
    {
        $seo = Seo::where('seos.page_title', 'like', 'newBeats')->first();

        $musics = Music::where('type', 'beats')

            ->where('music.status', 1)
            ->latest()->get();
        // dd($musics);
        if (sizeOf($musics) == 1 ) {
            $musicsplit =  $musics->split(2);
            $musicsplit[1] = []; 
        } elseif(sizeOf($musics) == 0){
            $musicsplit[0] = [];
            $musicsplit[1] = [];
        }else{
            $musicsplit =  $musics->split(2);
        }
        $title = 'New Beats';
        return view('frontend.musicshop', compact('musicsplit', 'seo', 'title'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadedMusic()
    {
        $seo = Seo::where('seos.page_title', 'like', 'downloadedMusic')->first();

        $downloaded_musics = PaypalPayment::join('music', 'music.id', '=', 'paypal_payments.music_id')->where('paypal_payments.user_id', Auth::user()->id)
            ->join('users', 'users.id', '=', 'music.user_id')->where('paypal_payments.user_id', Auth::user()->id)
            ->orderBy('paypal_payments.created_at', 'DESC')
            ->select([
                'users.name as artistname',
                'music.id as music_id',
                'music.downloads as downloads',
                'music.duration as duration',
                'music.title as title',
                'music.description as description',
                'music.id as music_id',
                'cover_art as cover_art',
            ])
            ->get();
        // return $downloaded_musics;
        return view('frontend.download', compact('downloaded_musics', 'seo'));
    }
    public function downloadMusic(Request $request)
    {

        $music_id = session()->get('music_id');

        $music_path =  Music::where('id', $music_id)->pluck('music')->first();
        $music_title =  Music::where('id', $music_id)->pluck('title')->first();
        //PDF file is stored under project/public/downloads/brochure2020.pdf

        $file = public_path() . "/uploadedFiles/" . $music_path;
        $headers = [
            'Content-Type: application/mp4',
        ];
        $name = $music_title . '' . '.mp4';
        $request->session()->forget('music_id');
        return Response::download($file, $name, $headers);
    }
    public function downloadPurchasedMusic(Request $request, $id)
    {

        $music_id = $id;

        $music_path =  Music::where('id', $music_id)->pluck('music')->first();
        $music_title =  Music::where('id', $music_id)->pluck('title')->first();
        //PDF file is stored under project/public/downloads/brochure2020.pdf

        $file = public_path() . "/uploadedFiles/" . $music_path;
        $headers = [
            'Content-Type: application/mp4',
        ];
        $name = $music_title . '' . '.mp4';
        return Response::download($file, $name, $headers);
    }


    public function searchMusic(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $musics = Music::orderby('title', 'asc')
                ->select("id", "title")
                ->limit(15)
                ->get();
        } else {
            $musics = Music::orderby('title', 'asc')
                ->select("id", "title")
                ->where('title', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%")
                ->limit(15)
                ->get();
        }
        $response = [];
        foreach ($musics as $music) {
            $response[] = [
                "id" => $music->id,
                "text" => $music->title,
            ];
        }
        return response($response, \Symfony\Component\HttpFoundation\Response::HTTP_OK);
    }
}
