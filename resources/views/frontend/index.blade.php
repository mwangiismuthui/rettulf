@extends('layouts.app')
@section('content')


<!-- slider wrapper start -->
<div class="main_slider_wrapper slider-area">
    <div class="slider_side_width"></div>
    <div class="slider_headphone">
        <img src="/frontend/images/headphone.png" class="img-responsive" alt="img">
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-captions caption-1">
                    <div class="container jn_container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content">

                                    <h1 data-animation="animated fadeInUp">sound,</h1>

                                    <h2 data-animation="animated fadeInUp">your world</h2>
                                    <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                        “Olivia”
                                        <br> to interact with Olivia. </p>
                                    <div class="slider_btn m24_cover">
                                        <div class="lang_apply_btn">
                                            <ul>
                                                <li data-animation="animated fadeInUp">
                                                    <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content_img_wrapper">
                                    <img src="/frontend/images/banner2.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-captions caption-2">
                    <div class="container jn_container">
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content">

                                    <h1 data-animation="animated fadeInUp">sound,</h1>

                                    <h2 data-animation="animated fadeInUp">your world</h2>
                                    <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                        “Olivia”
                                        <br> to interact with Olivia. </p>
                                    <div class="slider_btn m24_cover">
                                        <div class="lang_apply_btn">
                                            <ul>
                                                <li data-animation="animated fadeInUp">
                                                    <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content_img_wrapper">
                                    <img src="/frontend/images/banner.jpg" alt="img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-captions caption-3">
                    <div class="container jn_container">
                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content">

                                    <h1 data-animation="animated fadeInUp">sound,</h1>

                                    <h2 data-animation="animated fadeInUp">your world</h2>
                                    <p data-animation="animated fadeInUp">Even while listening to music, simply say
                                        “Olivia”
                                        <br> to interact with Olivia. </p>
                                    <div class="slider_btn m24_cover">
                                        <div class="lang_apply_btn">
                                            <ul>
                                                <li data-animation="animated fadeInUp">
                                                    <a href="#"> <i class="flaticon-play-button"></i>browse</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content_img_wrapper">
                                    <img src="/frontend/images/banner2.jpg" alt="img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                        class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
                </li>
            </ol>
            <div class="carousel-nevigation">
                <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span> prev</span> <i
                        class="flaticon-arrow-1"></i>
                </a>
                <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span> next</span> <i
                        class="flaticon-arrow"></i>
                </a>
            </div>
        </div>
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
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>download</a></li>
                                    </ul>
                                    <div class="tranding_play_icon">
                                    <a  id="{{$music->id}}">
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
                    </div>
                    @foreach ($topsongs as $music)
                         <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}" style="height: 60px;width:60px;">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a  id="{{$music->id}}">
                                                <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">{{$music->title}}</a></p>
                                <p class="various_artist_text"><a href="#">{{$music->user->name}}</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>{{$music->views}} Views</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">

                <div class="m24_heading_wrapper">
                    <h1>Featured Artists</h1>
                </div>

                <div class="featured_song_slider">
                    <div class="owl-carousel owl-theme">
                        @foreach ($featuredArtists as $artist)
                               <div class="item">
                                @foreach ($featuredArtists as $artist)

                            <div class="featured_artist_list m24_cover">
                                <img src="{{url('/ProfilePics').'/'.$artist->profile_photo }}" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">{{$artist->name}} </a></p>
                                    <p class="various_artist_text"><a href="#">{{$artist->music->count()}} tracks</a></p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="{{route('singleArtist',$music->user->id)}}" id="{{$music->id}}"> <i class="flaticon-play-button"></i>View Playlist</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>download</a></li>
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
<!-- top beats wrapper start -->
<div class="top_songs_wrapper m24_cover"> <a  id="{{$music->id}}">
    <i class="flaticon-play-button" id="{{$music->id}}"></i>
</a>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="song_heading_wrapper m24_cover">
                    <div class="m24_heading_wrapper">
                        <h1>top Beats</h1>
                    </div>
                    <div class="relaese_viewall_wrapper">
                    </div>
                    @foreach ($topbeats as $music)
                         <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}" alt="{{$music->title}}" style="height: 60px;width:60px;">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a  id="{{$music->id}}">
                                                <i class="flaticon-play-button" id="{{$music->id}}"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">{{$music->title}}</a></p>
                                <p class="various_artist_text"><a href="#">{{$music->user->name}}</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>{{$music->views}} Views</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>download</a></li>
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
                        @foreach ($featuredProducers as $artist)
                               <div class="item">
                                @foreach ($featuredProducers as $artist)

                            <div class="featured_artist_list m24_cover">
                                <img src="{{url('/ProfilePics').'/'.$artist->profile_photo }}" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">{{$artist->name}} </a></p>
                                    <p class="various_artist_text"><a href="#">{{$artist->music->count()}} tracks</a></p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="{{route('singleProducer',$music->user->id)}}" id="{{$music->id}}"> <i class="flaticon-play-button"></i>View Playlist</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                    
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
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                 
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
                       
                        {{-- <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td8.png" alt="img">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a>
                                        </li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">yellow wood</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td9.png" alt="img">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a>
                                        </li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">veere di wedding</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td4.png" alt="img">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a>
                                        </li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">Lambiyaan Si</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td5.png" alt="img">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a>
                                        </li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">Dilla Ther Jaa</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td6.png" alt="img">

                                <div class="m24_treanding_box_overlay">
                                    <div class="m24_tranding_box_overlay"></div>
                                    <div class="m24_tranding_more_icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-files-and-folders"></i></span>view lyrics</a>
                                        </li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                    <div class="tranding_play_icon various_concert_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="various_song_playlist">
                                    <p><a href="#">4 G Ka Jamana</a></p>

                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Genre end -->



@endsection