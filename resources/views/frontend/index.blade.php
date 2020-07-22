@extends('layouts.app')
@section('content')


<div class="main_slider_wrapper slider-area">
   <div id="wowslider-container1">
	<div class="ws_images"><ul>
        @foreach ($sliders as $slider)
        <li><img src="{{ URL::to('/') }}/SliderImages/{{$slider->image_path}}" alt="img" title="{{$slider->title}}" id="wows1_{{$loop->index}}"/>{{$slider->subtitle}}</li>
        @endforeach
	</ul></div>
	<div class="ws_bullets"><div>
        @foreach ($sliders as $slider)
        <a href="#" title="slider-2gfcgcfycycy"><span><img src="{{ URL::to('/') }}/SliderImages/{{$slider->image_path}}" alt="img" />1</span></a>
        @endforeach
	</div></div>
	<div class="ws_shadow"></div>
	</div>	
</div>



<!--slider wrapper end-->
<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper treanding_index_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>trending songs</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider">
                    <div class="owl-carousel owl-theme">

                        @foreach ($trendingMusic as $music)
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}">
                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a
                                                href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                                                    class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                                        </li>
                                        <li><a href="http://www.facebook.com/sharer.php?u={{route('buymusic',$music->id)}}"
                                                target="_blank"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>FaceBook</a>
                                        </li>
                                        <li><a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                                                target="_blank"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>Twitter</a>
                                        </li>
                                        <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                        class="flaticon-download"></i></span>download</a></li>
                                    </ul>
                                    <div class="tranding_play_icon">
                                        <a id="{{$music->id}}">
                                            <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- treanding song wrapper end -->
<!-- release album wrapper start -->


<!-- top songs wrapper start -->
<div class="top_songs_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="song_heading_wrapper m24_cover">
                    <div class="m24_heading_wrapper">
                        <h1>top songs</h1>
                    </div>
                    <div class="relaese_viewall_wrapper">
                        <a href="{{route('mostListenedSongs')}}"> view all <i class="flaticon-right-arrow"></i></a>
                    </div>
                    @foreach ($topsongs as $music)
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                                        alt="{{$music->title}}" style="height: 60px;width:60px;">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a id="{{$music->id}}">
                                                <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="{{route('buymusic',$music->id)}}">{{\Illuminate\Support\Str::limit($music->title,23, $end='...')}}</a></p>
                                    <p class="various_artist_text"><a
                                            href="{{route('singleArtist',$music->user->id)}}">{{$music->user->name}}</a>
                                    </p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>{{$music->duration}}</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>{{$music->views}} {{$music->views == 1 ? 'Play': 'Plays'}}</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a
                                            href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                                                class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                                    </li>
                                    <li><a href="http://www.facebook.com/sharer.php?u={{route('buymusic',$music->id)}}"
                                            target="_blank"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>FaceBook</a>
                                    </li>
                                    <li><a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                                            target="_blank"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>Twitter</a>
                                    </li>
                                    <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                    class="flaticon-download"></i></span>download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">

                <div class="m24_heading_wrapper">
                    <h1>Featured Musicians</h1>
                </div>

                <div class="featured_song_slider">
                    <div class="owl-carousel owl-theme">

                        @foreach ($featuredArtists as $group)
                        <div class="item">
                            @foreach ($group as $artist)
                            <div class="featured_artist_list m24_cover">
                                <img src="{{url('/ProfilePics').'/'.$artist['profile_photo'] }}" class="img-responsive"
                                    alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="{{route('singleArtist',$artist['id'])}}">{{$artist['name']}} </a></p>
                                    <p class="various_artist_text"><a href="#">{{$artist['music_count']}}
                                            {{$artist['music_count'] == 1 ? 'Song' : 'Songs'}}</a>
                                    </p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="{{route('singleArtist',$artist['id'])}}"
                                                    id="{{$artist['id']}}"> <i class="flaticon-play-button"></i>View
                                                    Playlist</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top songs wrapper end -->

<div class="treanding_songs_wrapper treanding_index_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>trending beats</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider">
                    <div class="owl-carousel owl-theme">

                        @foreach ($trendingBeats as $music)
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}">
                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a
                                                href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                                                    class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                                        </li>
                                        <li><a href="http://www.facebook.com/sharer.php?u={{route('buymusic',$music->id)}}"
                                                target="_blank"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>FaceBook</a>
                                        </li>
                                        <li><a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                                                target="_blank"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>Twitter</a>
                                        </li>
                                        <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                        class="flaticon-download"></i></span>download</a></li>
                                    </ul>
                                    <div class="tranding_play_icon">
                                        <a id="{{$music->id}}">
                                            <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top beats wrapper start -->
<div class="top_songs_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="song_heading_wrapper m24_cover">
                    <div class="m24_heading_wrapper">
                        <h1>top Beats</h1>
                    </div>
                    <div class="relaese_viewall_wrapper">
                        <a href="{{route('mostListenedBeats')}}"> view all <i class="flaticon-right-arrow"></i></a>
                    </div>
                    @foreach ($topbeats as $music)
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                                        alt="{{$music->title}}" style="height: 60px;width:60px;">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a id="{{$music->id}}">
                                                <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="{{route('buymusic',$music->id)}}">{{\Illuminate\Support\Str::limit($music->title,23, $end='...')}}</a></p>
                                    <p class="various_artist_text"><a
                                            href="{{route('singleArtist',$music->user->id)}}">{{$music->user->name}}</a>
                                    </p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>{{$music->duration}}</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>{{$music->views}} {{$music->views ==1 ? 'Play' : 'Plays'}}</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a
                                            href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                                                class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                                    </li>
                                    <li><a href="http://www.facebook.com/sharer.php?u={{route('buymusic',$music->id)}}"
                                            target="_blank"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>FaceBook</a>
                                    </li>
                                    <li><a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                                            target="_blank"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>Twitter</a>
                                    </li>
                                    <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                    class="flaticon-download"></i></span>download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">

                <div class="m24_heading_wrapper">
                    <h1>Featured Producers</h1>
                </div>

                <div class="featured_song_slider">
                    <div class="owl-carousel owl-theme">
                        @foreach ($featuredProducers as $group)
                        <div class="item">
                            @foreach ($group as $artist)
                            <div class="featured_artist_list m24_cover">
                                <img src="{{url('/ProfilePics').'/'.$artist['profile_photo'] }}" class="img-responsive"
                                    alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="{{route('singleProducer',$artist['id'])}}">{{$artist['name']}} </a></p>
                                    <p class="various_artist_text"><a href="#">{{$artist['music_count']}}
                                            {{$artist['music_count'] == 1 ? 'Beat' : 'Beats'}}</a>
                                    </p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="{{route('singleProducer',$artist['id'])}}"
                                                    id="{{$music['id']}}"> <i class="flaticon-play-button"></i>View
                                                    Playlist</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top beats wrapper end -->
<!-- Genre start -->
<div class="treanding_songs_wrapper punjabi_sogns m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>Genres</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider playlist_songs_list">
                    <div class="owl-carousel owl-theme">
                        @foreach ($genres as $genre)
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="{{url('/Genre_Images').'/'.$genre->genre_image }}" alt="{{$genre->genre}}">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="{{route('singleGenre',$genre->id)}}">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">{{$genre->genre}}</a></p>

                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Genre end -->



@endsection