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
                            <img src="{{url('/ProfilePics').'/'.$artist->profile_photo}}" class="img-responsive"
                                 alt="{{$artist->name}}">
                            <div class="artist_wrapper_text">
                                <div class="artist_wrapper_left">
                                    <h1>{{$artist->name}}</h1>
                                    <p>@role('Producer') Producer ,@endrole @role('Artist') Artist
                                        ,@endrole {{$artist->location->location}}</p>
                                    <p>{{$artist->about}}
                                    </p>

                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    @role('Producer')
                    @php
                        $balance= \App\Balance::where('user_id',$artist->id)->pluck('balance')->first();
                    @endphp
                    <div class="pricing_overview">
                        <div class="pricing_overview_heading">
                            <h1>Account Overview</h1>
                        </div>
                        <div class="m24_acc_ovrview_list">
                            <ul>
                                <li>Published Songs
                                    <span>{{$published_music_count}}</span>
                                </li>
                                <li>Unpublished Songs
                                    <span>{{$unpublished_music_count}}</span>
                                </li>
                                <li>Your Balance
                                    <span>${{number_format($balance,2)}}</span>
                                </li>
                                {{-- @foreach ($pending_withdrawals as $pending_withdrawal) --}}
                                {{-- @if ($pending_withdrawal->status==0) --}}
                                <li>Pending Withdrawal...
                                    <span>${{number_format($pending_withdrawals,2)}}</span>
                                </li>
                                {{-- @else --}}

                                {{-- @endif --}}
                                {{-- @endforeach --}}
                            </ul>
                            @if ($balance>=100)
                                <div class="cancel_wrapper renew_btn">
                                    <a id="withrawbutton"><i
                                            class="flaticon-play-button"></i>Withdraw</a>
                                    <form id="withdrawaAmount">
                                        @csrf
                                        <br>
                                        <input type="number" name="amount" id=""
                                               placeholder="Enter amount you wish to Withdraw" class="form-control">
                                        <input type="hidden" name="artist_id" value="{{$artist->id}}" id="artist_id">
                                        <br>
                                        <div class="lang_apply_btn">
                                            <button type="submit">Send</button>

                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="cancel_wrapper renew_btn disabled">
                                    <a><i class="flaticon-play-button" aria-disabled="true"></i>Withdraw</a>
                                </div>
                                <p style="color: #fff">You will be able to request a withdrawal as soon as your balance
                                    reaches the
                                    minimum required amount of $100.00.</p>
                            @endif
                        </div>
                    </div>
                    @endrole
                </div>
            </div>
        </div>
        <!-- artist single wrapper end -->
        <!-- top song wrapper start -->

        <div class="album_inner_list m24_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="m24_heading_wrapper m24_cover text-center">

                            <h1>Your Song List</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="album_list_wrapper2">
                            <div class="album_list_wrapper">
                                <ul class="album_list_name m24_cover">
                                    <li>#</li>
                                    <li class="text-center">Song Title</li>
                                    <li class="text-center">Artist</li>
                                    <li class="text-center">downloads</li>
                                    <li class="text-center">duration</li>
                                    @role('Producer')

                                    <li class="text-center">Payment Status</li>
                                    @else

                                        @endrole
                                        <li class="text-center">More</li>
                                </ul>

                                @foreach ($my_music as $music)
                                    <ul class="album_inner_list_padding">
                                        <li><a id="{{$music->id}}"><span
                                                    class="play_no">0{{ $loop->index + 1}}</span><span
                                                    class="play_hover"> <i
                                                        class="flaticon-play-button" id="{{$music->id}}"></i></span></a>
                                        </li>
                                        <li class="text-center">
                                            <div class="top_song_artist_wrapper">
                                                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                                                     alt="{{$music->title}}" style="height: 60px;width:60px;">
                                                <div class="top_song_artist_contnt">
                                                    <h1><a>{{$music->title}}</a></h1>
                                                    {{-- <p class="various_artist_text"><a>{{\Illuminate\Support\Str::limit($music->description,50, $end='...')}}</a>
                                                    </p> --}}
                                                </div>

                                            </div>
                                        </li>
                                        <li class="text-center"><a>{{$artist->name}}</a></li>


                                        <li class="text-center"><a>{{number_format($music->downloads,0)}}</a></li>
                                        <li class="text-center"><a>{{$music->duration}}</a></li>
                                        @role('Producer')
                                        @if ($music->is_paid==0)
                                            <li class="text-center">
                                                <a href="{{route('selectPaymentMethod',$music->id)}}">Click to Pay</a>
                                            </li>
                                        @else

                                            <li><a><label class="badge badge-success">Paid</label></a></li>
                                        @endif
                                        @else
                                            @endrole
                                            <li class="text-center top_song_artist_playlist">
                                                <div class="m24_tranding_more_icon">
                                                    <i class="flaticon-menu"></i>
                                                </div>
                                                <ul class="tranding_more_option">
                                                    <li><a
                                                            href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                                                                class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                                                    </li>
                                                    <li>
                                                        <a href="http://www.facebook.com/sharer/sharer.php?u={{route('buymusic',$music->id)}}&quote=Check out this music by {{$music->user->name}} on Music"
                                                           onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                                           target="_blank" title="Share on Facebook"><span
                                                                class="opt_icon"><i
                                                                    class="flaticon-share"></i></span>FaceBook</a>

                                                    </li>
                                                    <li>
                                                        <a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                                                           target="_blank"><span class="opt_icon"><i
                                                                    class="flaticon-share"></i></span>Twitter</a>
                                                    </li>
                                                    <li><a href="{{route('buymusic',$music->id)}}"><span
                                                                class="opt_icon"><i
                                                                    class="flaticon-download"></i></span>download</a>
                                                    </li>
                                                    <li><a href="{{route('file.edit',$music->id)}}"><span
                                                                class="opt_icon"><i
                                                                    class="fa fa-pencil"></i></span>edit</a></li>
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
            <script>
                $(document).ready(function () {
                    $(".alert").delay(5000).slideUp(300);
                    $('#withdrawaAmount').hide();
                    $('#withrawbutton').on('click', function () {
                        $('#withdrawaAmount').show();
                    });


                    $("#withdrawaAmount").on("submit", function (event) {
                        event.preventDefault();

                        var id = $('#artist_id').val();
                        console.log(id);

                        $(".imguploadoverlay").fadeIn();
                        $.ajax({
                            url: "/withdraw/" + '' + id,
                            method: "POST",
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: "json",
                            success: function (data) {

                                $(".imguploadoverlay").fadeOut();
                                console.log("success");
                                if (data.errors) {
                                    Lobibox.notify("error", {
                                        pauseDelayOnHover: true,
                                        continueDelayOnInactiveTab: false,
                                        position: "top right",
                                        icon: "fa fa-times-circle",
                                        msg: data.message,
                                    });
                                }
                                if (data.success) {
                                    Lobibox.notify("success", {
                                        pauseDelayOnHover: true,
                                        continueDelayOnInactiveTab: false,
                                        position: "top right",
                                        icon: "fa fa-check-circle", //path to image
                                        msg: data.message,

                                    });


                                }


                                $('#seomodal').modal('hide');
                                $('#seo_table').DataTable().ajax.reload();
                            },
                            error: function () {
                                Lobibox.notify("error", {
                                    pauseDelayOnHover: true,
                                    continueDelayOnInactiveTab: false,
                                    position: "top right",
                                    icon: "fa fa-times-circle",
                                    msg: "Something went wrong!Please try again",
                                });
                                console.log("error");
                            },
                        });
                    });
                });
            </script>
@endsection
