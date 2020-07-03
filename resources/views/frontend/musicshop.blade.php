@extends('layouts.app')
@section('content')
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                    <h2>{{$title}}</h2>

                    <ul>
                        <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>{{$title}}</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- inner Title End -->
<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper punjabi_sogns m24_cover">
    <div class="container">
        <div class="row">
          
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                @foreach ($musicsplit[0] as $music)
                <div class="top_songs_list free_music_wrapper m24_cover">
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
                                <p><a href="#">{{\Illuminate\Support\Str::limit($music->title,23, $end='...')}}</a></p>
                                <p class="various_artist_text"><a href="#">{{$music->user->name}}</a></p>
                            </div>

                        </div>
                        <div class="top_list_tract_time">
                            <p>{{$music->duration}}</p>
                        </div>
                    </div>
                    <div class="top_songs_list_right">
                        <div class="top_list_tract_view">
                            <p>{{$music->views}} Plays</p>
                        </div>
                        <div class="top_song_list_picks">
                            <div class="m24_tranding_more_icon">
                                <i class="flaticon-menu"></i>
                            </div>
                            <ul class="tranding_more_option">
                                <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                class="flaticon-download"></i></span>download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                @foreach ($musicsplit[1] as $music)
                <div class="top_songs_list free_music_wrapper m24_cover">
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
                                <p><a href="#">{{\Illuminate\Support\Str::limit($music->title,23, $end='...')}}</a></p>
                                <p class="various_artist_text"><a href="#">{{$music->user->name}}</a></p>
                            </div>

                        </div>
                        <div class="top_list_tract_time">
                            <p>{{$music->duration}}</p>
                        </div>
                    </div>
                    <div class="top_songs_list_right">
                        <div class="top_list_tract_view">
                            <p>{{$music->views}} Plays</p>
                        </div>
                        <div class="top_song_list_picks">
                            <div class="m24_tranding_more_icon">
                                <i class="flaticon-menu"></i>
                            </div>
                            <ul class="tranding_more_option">
                                <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                class="flaticon-download"></i></span>download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection