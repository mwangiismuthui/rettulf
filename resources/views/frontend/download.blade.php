@extends('layouts.app')
@section('content')
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                    <h2>My downloads</h2>

                    <ul>
                        <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>My downloads</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- inner Title End -->
<!-- artist single wrapper start -->

<!-- artist single wrapper end -->
<!-- top song wrapper start -->
<div class="album_inner_list m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="album_list_wrapper2">
                <div class="album_list_wrapper">
                    <ul class="album_list_name m24_cover">
                        <li>#</li>
                        <li class="text-center">Song Title</li>
                        <li class="text-center">Artist</li>
                       
                        <li class="text-center">downloads</li>
                        <li class="text-center">time</li>

                        <li class="text-center">Download</li>
                    </ul>
                    <?php
                    
                    $number =0;
                    ?>
                    @foreach ($downloaded_musics as $music)
                    <?php
                    
                    $number++;
                    ?>
                    <ul class="album_inner_list_padding">
                    <li><a ><span class="play_no">0{{$number}}</span><span class="play_hover"> <i class="flaticon-play-button" id="{{$music->music_id}}"></i></span></a></li>
                        <li class="text-center">
                            <div class="top_song_artist_wrapper">

                                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}" style="height: 60px;width:60px;">

                                <div class="top_song_artist_contnt">
                                    <h1><a href="#">{{$music->title}}</a></h1>
                                    <p class="various_artist_text"><a href="#">{{$music->description}}</a></p>
                                </div>

                            </div>
                        </li>
                        <li class="text-center"><a href="#">{{$music->artistname}}</a></li>
                                           
                    <li class="text-center"><a href="#">{{number_format($music->downloads,0)}}</a></li>
                        <li class="text-center"><a href="#">{{$music->duration}}</a></li>
                        <li class="text-center top_song_artist_playlist"><a href="{{route('downloadPurchasedMusic',$music->music_id)}}"><i class="flaticon-download"></i></a></li>
                    </ul>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection