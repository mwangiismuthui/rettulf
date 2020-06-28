@extends('layouts.app')
@section('content')

        <!--inner Title Start -->
        <div class="indx_title_main_wrapper">
            <div class="title_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="indx_title_left_wrapper m24_cover">
                            <h2>Artists</h2>

                            <ul>
                                <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                                <li>Artists</li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- inner Title End -->
        <!-- treanding song wrapper start -->
        <div class="treanding_songs_wrapper top_artist_padding m24_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="m24_heading_wrapper">
                            <h1>featured artists</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="treanding_song_slider top_artist_border">
                            <div class="owl-carousel owl-theme">
                                @foreach ($feturedUsers as $user)
                                <div class="item">

                                    <div class="treanding_slider_main_box m24_cover">
                                        <img src="{{ $user->profile_photo == "" ? url('/ProfilePics').'/'.Auth::user()->profile_photo : '/frontend/images/pf.png'}}" alt="img">

                                        <div class="m24_treanding_box_overlay">
                                            <div class="m24_tranding_box_overlay"></div>
                                            <div class="m24_tranding_more_icon">
                                                <i class="flaticon-menu"></i>
                                            </div>
                                            <ul class="tranding_more_option">
                                                
                                                <li><a href="#"><span class="opt_icon"><i class="flaticon-share"></i></span>share</a></li>
                                            </ul>
                                            <div class="tranding_play_icon various_concert_icon">
                                                <a href="{{$user->hasRole('Producer') ? route('singleProducer',$user->id) : route('singleArtist',$user->id)}}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="various_song_playlist">
                                            <p><a href="{{$user->hasRole('Producer') ? route('singleProducer',$user->id) : route('singleArtist',$user->id)}}">{{$user->name}}</a></p>

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
        <!-- top artist wrapper start -->
        <div class="treanding_songs_wrapper m24_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="m24_heading_wrapper">
                            <h1>top artists</h1>
                        </div>
                    </div>
                    @foreach ($users as $user)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="treanding_slider_main_box top_artist_wrapper_new m24_cover">
                            <img src="{{ $user->profile_photo == "" ? url('/ProfilePics').'/'.Auth::user()->profile_photo : '/frontend/images/pf.png'}}" alt="img">

                            <div class="m24_treanding_box_overlay">
                                <div class="m24_tranding_box_overlay"></div>
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                                <div class="tranding_play_icon various_concert_icon">
                                    <a href="{{$user->hasRole('Producer') ? route('singleProducer',$user->id) : route('singleArtist',$user->id)}}">
                                        <i class="flaticon-play-button"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="various_song_playlist">
                                <p><a href="{{$user->hasRole('Producer') ? route('singleProducer',$user->id) : route('singleArtist',$user->id)}}">{{$user->name}}</a></p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    {{-- <div class="blog_pagination_section m24_cover">
                        <ul>
                            <li>
                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li class="third_pagger"><a href="#">2</a>
                            </li>
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                            </li>

                            <li>
                                <a href="#" class="next"><i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- top artist wrapper start -->

@endsection