@extends('layouts.app')
@section('content')
@foreach ($user as $artist)
    
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                <h2>{{$artist->name}}</h2>

                    <ul>
                        <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>{{$artist->name}}</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- inner Title End -->
<!-- artist single wrapper start -->
<div class="artist_wrapper m24_cover">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="artist_wrapper_content m24_cover">
                <img src="{{url('/ProfilePics').'/'.$artist->profile_photo }}"  class="img-responsive" alt="{{$artist->name}}">
                    <div class="artist_wrapper_text">
                        <div class="artist_wrapper_left">
                            <h1>{{$artist->name}}</h1>
                            <p>Artist, {{$artist->location->location}}</p>
                            <p>Renowned for his soulful singing, Indian musician Arijit Singh is also a music composer, producer, recordist and programmer. He has several blockbuster songs to his credit and has won 23 awards so far, which makes him one of the most successful sing... Full Bio</p>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- artist single wrapper end -->
<!-- top song wrapper start -->
    
<div class="album_inner_list m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="album_list_wrapper2">
                <div class="album_list_wrapper">
                    <ul class="album_list_name m24_cover">
                        <li>#</li>
                        <li class="song_title_width">Song Title</li>
                        <li class="song_title_width">Artist</li>
                        <li class="text-center">time</li>

                        <li class="text-center">More</li>
                    </ul>
                    <?php
                    
                    $number =0;
                    ?>
                    @foreach ($user_music as $music)
                    <?php
                    
                    $number++;
                    ?>
                    <ul class="album_inner_list_padding">
                    <li><a><span class="play_no">0{{$number}}</span><span class="play_hover"> <i class="flaticon-play-button" id="{{$music->id}}"></i></span></a></li>
                        <li class="song_title_width">
                            <div class="top_song_artist_wrapper">

                                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}" style="height: 60px;width:60px;">

                                <div class="top_song_artist_contnt">
                                    <h1><a href="#">{{$music->title}}</a></h1>
                                    <p class="various_artist_text"><a href="#">{{\Illuminate\Support\Str::limit($music->description,150, $end='...')}}</a></p>
                                </div>

                            </div>
                        </li>
                        <li class="song_title_width"><a href="#">{{$artist->name}}</a></li>
                        <li class="text-center"><a href="#">{{$music->duration}}</a></li>

                        <li class="text-center top_song_artist_playlist">
                            <div class="m24_tranding_more_icon">
                                <i class="flaticon-menu"></i>
                            </div>
                            <ul class="tranding_more_option">
                                <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                                class="flaticon-download"></i></span>download</a></li>
                            </ul>
                        </li>
                    </ul>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection