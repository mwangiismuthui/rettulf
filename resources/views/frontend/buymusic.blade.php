@extends('layouts.app')
@section('content')
    <!--inner Title Start -->
    <div class="indx_title_main_wrapper" xmlns="http://www.w3.org/1999/html">
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


    <div class="pricing_wrapper2 m24_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12  mx-auto">
                    <div class="m24_heading_wrapper m24_cover text-center">

                        <h1>{{$music->title}}</h1>

                        <p>By: {{$music->user->name}}</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="pricing_box_wrapper2 m24_cover">
                        <div class="pricing_heading_wrapper m24_cover">
                            <img class="img-responsive" src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                                 alt="{{$music->title}}" style="width: 130px;height: 130px;border-radius: 50%">
                        </div>
                        <div class="ui_pricing_five_wrapper">
                            <h3>Buy for
                                <br><span>${{number_format($music->price,2)}}</span></h3>
                        </div>
                        <div class="pricing_five_list_wrapper m24_cover">
                            <p><span>Description:</span></p>
                            <p><span>{{$music->description}}</span></p>
                        </div>
                        @if (Auth::check())
                            @if ($music->price == 0 )
                                <div class="ui_pricing_five_btn_wrapper m24_cover">
                                    <a href="{{route('downloadMusic',$music->id)}}">Download Now</a>
                                </div>
                            @else
                                <div class="ui_pricing_five_btn_wrapper m24_cover">
                                    <a href="{{route('selectPaymentMethod',$music->id.'?source=buy')}}">Purchase Now</a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
