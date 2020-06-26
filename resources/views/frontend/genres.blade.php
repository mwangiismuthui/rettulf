@extends('layouts.app')
@section('content')
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                <h2>{{$genre}}</h2>

                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>{{$genre}}</li>
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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="m24_heading_wrapper">
                <h1>{{$genre}}</h1>
            </div>
        </div>
        <div class=" col-lg-12 col-md-12 col-sm-12">
            <div class="treanding_song_slider playlist_songs_list">
                <div class="owl-carousel owl-theme">
                    @foreach ($genre_music as $music)
                        <div class="item">

                        <div class="treanding_slider_main_box m24_cover">
                            <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}">

                            <div class="m24_treanding_box_overlay">
                                <div class="m24_tranding_box_overlay"></div>
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>download</a></li>
                                </ul>
                                <div class="tranding_play_icon various_concert_icon">
                                    <a  id="{{$music->id}}">
                                        <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="various_song_playlist">
                                <p><a href="#">{{$music->title}} </a></p>

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
@endsection