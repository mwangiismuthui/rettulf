@extends('layouts.app')
@section('content')
<!--inner Title Start -->
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                    <h2>{{$music->title}}, By: {{$music->user->name}}</h2>

                    <ul>
                        <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>{{$music->title}}</li>
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
                    <img class="img-responsive" src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                        alt="{{$music->title}}" style="">
                    <div class="artist_wrapper_text">
                        <div class="artist_wrapper_left">
                            <h1>{{$music->title}}</h1>
                            <p>By: {{$music->user->name}}</p>

                            <p>{{$music->description}}</p>
                            @if ($music->type =='music')
                            <div class="artist_btn m24_cover">
                                <div class="lang_apply_btn">
                                    <a id="{{$music->id}}"><i class="flaticon-play-button" id="{{$music->id}}"></i>play</a>
                                    @if (Auth::check())
                                    <a href="{{route('upload_payment',$music->id)}}"><i
                                            class="flaticon-play-button"></i>
                                        Download</a>
                                    @endif


                                </div>
                            </div>
                            @else
                            <div class="artist_btn m24_cover">
                                <div class="lang_apply_btn">                                   
                                    <a id="{{$music->id}}"><i class="flaticon-play-button" id="{{$music->id}}"></i>play</a>                                    
                                </div>                                
                            </div>
                            @if (Auth::check())
                            @if ($music->price == 0)


                            <div class="artist_btn m24_cover">
                                <div class="lang_apply_btn">                                   
                                  
                            <a href="{{route('upload_payment',$music->id)}}"><i
                                class="flaticon-play-button">Download  free beat</i>  
                            </a>                                 
                                </div>                                
                            </div>
                           
                            @else
                            <a style="padding: 15px 30px; margin-top:15px;display:inline-block;" href="{{route('upload_payment',$music->id)}}" class="paypal-button">
                                <span class="paypal-button-title">
                                    Buy for ${{number_format($music->price,2)}} with
                                </span>
                                <span class="paypal-logo">
                                    <i>Pay</i><i>Pal</i>
                                </span>
                            </a>
                            @endif
                                   
                                  
                                    @endif
                            @endif

                        </div>
                        <div class="artist_list_icon">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- artist single wrapper end -->

@endsection