<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $seo->seo_title, 'seo_description' => $seo->seo_description, 'seo_keywords' => $seo->seo_keywords, 'seo_other' => '');
}
?>

    <!DOCTYPE html>

<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>
    <meta charset="utf-8"/>
    <title>{{ $seo->seo_title }}</title>
    <meta name="Description" content="{{ $seo->meta_description }}">
    <meta name="Keywords" content="{{ $seo->meta_keyword }}">
    <meta name="_token" content="{{ csrf_token() }}"/>
    {!! $seo->seo_other !!}
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <meta name="author" content="Mwangi Muthui(0721257308)|Eric Njeru(0792946114)"/>
    <meta name="MobileOptimized" content="320"/>
    <!--favicon-->
    <link rel="shortcut icon" href="{{url('/Favicon').'/'.$favicon}}" type="image/x-icon">
    {{-- slider maneno --}}

    <link rel="stylesheet" type="text/css" href="/frontend/engine1/style.css"/>
    <script type="text/javascript" src="/frontend/engine1/jquery.js"></script>
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/nice-select.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/swiper.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/dark_theme.css"/>
    <link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css"/>

    <link rel="stylesheet" type="text/css" href="/frontend/plugin/select2/select2.min.css"/>
    <!-- notifications css -->
    <link rel="stylesheet" href="/backend/assets/plugins/notifications/css/lobibox.min.css"/>
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/ajax.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/plugin/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="/frontend/plugin/select2/select2.min.js"></script>

</head>

<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status">
        <img src="{{url('/Loading_Icons').'/'.$loading_icon}}" id="preloader_image" alt="loader">
    </div>
</div>
<!-- top navi wrapper Start -->
<div class="m24_main_wrapper">
@include('layouts.header')
@include('layouts.sidebar')
<!-- top navi wrapper end -->
    @yield('content')

    @include('layouts.footer')

    @include('layouts.adonisplayer')
</div>
<script type="text/javascript" src="/frontend/engine1/wowslider.js"></script>
<script type="text/javascript" src="/frontend/engine1/script.js"></script>
<!-- playlist wrapper end -->
<!--custom js files-->


<script src="/frontend/js/modernizr.js"></script>
<script src="/frontend/js/plugin.js"></script>
<script src="/frontend/js/jquery.nice-select.min.js"></script>
<script src="/frontend/js/jquery.inview.min.js"></script>
<script src="/frontend/js/jquery.magnific-popup.js"></script>
<script src="/frontend/js/swiper.min.js"></script>
<script src="/frontend/js/comboTreePlugin.js"></script>
<script src="/frontend/js/mp3/jquery.jplayer.min.js"></script>
<script src="/frontend/js/mp3/jplayer.playlist.js"></script>
<script src="/frontend/js/owl.carousel.js"></script>
<script src="/frontend/js/mp3/player.js"></script>
<script src="/frontend/js/custom.js"></script>


<!--Data Tables js-->
<script src="/frontend/plugin/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/jszip.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="/frontend/plugin/bootstrap-datatable/js/buttons.colVis.min.js"></script>
<!--notification js -->
<script src="/backend/assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="/backend/assets/plugins/notifications/js/notifications.min.js"></script>
<script src="/backend/assets/plugins/notifications/js/notification-custom-script.js"></script>
{{--{{dd($playlist)}}--}}
<script>
    var musicId;
    var music_type;
    var beat_time = {{$beat_time}};
    var OGbeat_time = {{$beat_time}};
    adonisAllPlaylists[0] = [];
    $(document).ready(function (a) {
        $(".alert").delay(5000).slideUp(300);
{{--        {{session()->forget('playlist')}}--}}
{{--            {{session()->flush()}}--}}
        @if($playlist !=null)
        var playlist = JSON.parse(atob('{{base64_encode(json_encode($playlist))}}'));
        @else
        var playlist = [];
        @endif


        a(window).imagesLoaded(function () {
            setTimeout(function () {
                adonisPlayer.init()
            }, 100), setTimeout(function () {
                if (playlist == null || playlist.length == 0) {
                    // alert('playlist is null');
                    adonisAllPlaylists[0] = [];
                } else {
                    (adonisAllPlaylists[0] = playlist);
                    var i;
                    for (i = 0; i < adonisAllPlaylists[0].length; ++i) {
                        adonisPlaylist.add(adonisAllPlaylists[0][i]);
                    }
                     musicId = adonisAllPlaylists[0][0]['id'];
                     music_type = adonisAllPlaylists[0][0]['music_type'];

                }
            }, 5e3)

        });

        var counter;
        function timer() {
            beat_time = beat_time - 1;
            if (beat_time <= 0) {
                clearInterval(counter);
                adonisPlaylist.stop();
                beat_time = OGbeat_time;
                return;
            }
        }
        $("#" + adonisPlayerID).bind(a.jPlayer.event.pause + ".jp-repeat", function (t) {
            clearInterval(counter);
            void 0 !== currentPlaylistId && a("[data-album-id='" + currentPlaylistId + "']").removeClass("jp-playing");
            // alert( musicId);
            $(".tranding_play_icon  #" + musicId + " i").removeClass('flaticon-pause playing-state').addClass('flaticon-play-button paused-state');
        });


        $("#" + adonisPlayerID).bind(a.jPlayer.event.play + ".jp-repeat", function (t) {
            if (music_type === 'beats') {
                counter = setInterval(timer, 1000);

            }
            $(".tranding_play_icon i").removeClass('flaticon-pause playing-state').addClass('flaticon-play-button init-play');
            $(".tranding_play_icon  #" + musicId + " i").removeClass('flaticon-play-button init-play').addClass('flaticon-pause playing-state');
            $(".tranding_play_icon  #" + musicId + " i").removeClass('flaticon-play-button paused-state').addClass('flaticon-pause playing-state');

        });


    });

    $(document).on('click', '.tranding_play_icon .init-play', function () {
        // alert($(this).attr('class'));
        var instance = $(this).attr('class');
        var id = $(this).attr('id');
        musicId = id;
        if (instance == 'flaticon-play-button init-play') {
            // alert(adonisAllPlaylists[0].length);
            beat_time  = OGbeat_time;
            var index = adonisAllPlaylists[0].findIndex(x => x.id === musicId);
            if (index == -1) {


                $.ajax({
                    method: "POST",
                    url: '/musicpath',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'

                    },
                    success: function (data) {
                        var cover_art_path = '/uploadedCoverArts/';
                        var cover_art = data.coverart;
                        var music = data.music_path;
                        music_type = data.music_type;
                        var path = '/uploadedFiles/';
                        full_music_path = path + '' + music;
                        var full_covertart_path = cover_art_path + '' + cover_art;
                        $('.artist-name').empty();
                        if (data.music_type == 'beats') {
                            var link = '/single/producer/' + data.artist_id + ''
                        } else {
                            var link = '/single/artist/' + data.artist_id + ''
                        }
                        var newitem = {
                            id: musicId,
                            music_type: music_type,
                            title: data.title,
                            artist: data.artist+'{'+link+'}',
                            mp3: full_music_path,
                            poster: full_covertart_path
                        };
                        adonisAllPlaylists[0].push(newitem);//determiner
                        adonisPlaylist.add(newitem);
                        adonisPlaylist.play(index);
                    },
                    error: function (data) {

                    }

                });
            } else {
                // alert(adonisAllPlaylists[0][index]['beat_time']);
                music_type = adonisAllPlaylists[0][index]['music_type'];
                adonisPlaylist.play(index);

            }
        } else {
            adonisPlaylist.pause();
        }


    });

    $(document).on('click', '.tranding_play_icon .paused-state', function () {
        adonisPlaylist.play();
    });

    $(document).on('click', '.tranding_play_icon .playing-state', function () {
        adonisPlaylist.pause();
    });

</script>
</body>

</html>
