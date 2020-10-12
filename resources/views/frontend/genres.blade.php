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
                        <li><a href="{{route('index')}}">Home</a> &nbsp;&nbsp;&nbsp;/</li>
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
           @if (sizeOf($musicsplit[0]) < 1)
               <p>No records found!</p>
           @endif
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                @foreach ($musicsplit[0] as $music)
                    @include('layouts.music_list_item')
                @endforeach
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                @foreach ($musicsplit[1] as $music)
                    @include('layouts.music_list_item')
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
