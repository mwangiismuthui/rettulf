<?php
// if(!isset($seo)){
// 	$seo = (object) array('seo_title' => $seo->seo_title,'seo_description' => $seo->seo_description,'seo_keywords' => $seo->seo_keywords,'seo_other' => '');
// }
?>

<!DOCTYPE html>

<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <title>{{ $seo->seo_title }}</title>
    <meta name="Description" content="{{ $seo->meta_description }}">
    <meta name="Keywords" content="{{ $seo->meta_keyword }}">
    <meta name="_token" content="{{ csrf_token() }}" />
    {!! $seo->seo_other !!}
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta name="author" content="Mwangi Muthui(0721257308)|Eric Njeru(0792946114)" />
    <meta name="MobileOptimized" content="320" />
    <!--favicon-->
    <link rel="shortcut icon" type="/frontend/image/png" href="/frontend/images/favicon.png" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/dark_theme.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css" />

    <link rel="stylesheet" type="text/css" href="/frontend/plugin/select2/select2.min.css" />
    <!-- notifications css -->
    <link rel="stylesheet" href="/backend/assets/plugins/notifications/css/lobibox.min.css" />
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
            <img src="/frontend/images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="cursor"></div>
    <!-- top navi wrapper Start -->
    <div class="m24_main_wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <!-- top navi wrapper end -->
        @yield('content')

        @include('layouts.footer')
        <!-- playllist wrapper start -->
        <div class="adonis-player-wrap">
            <div id="adonis_jp_container" class="master-container-holder" role="application" aria-label="media player">
                <div id="adonis_jplayer_main" class="jp-jplayer"></div>
                <div class="adonis-player-horizontal">
                    <div class="master-container-fluid">
                        <div class="row adonis-player">
                            <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                                <div class="media current-item">
                                    <div class="song-poster">
                                    </div>
                                    <div class="des">
                                        <div class="jp-title" aria-label="title">&nbsp;</div>
                                        <div class="artist-name"><a href="#" class="artist-names"></a></div>
                                    </div>
                                </div>
                                <div class="jp-details">
                                    <div class="jp-title" aria-label="title">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-6 col-4 resp">
                                <div class="player-controls">
                                    <div class="control-primary">
                                        <a class="jp-play" role="button" tabindex="0">
                                            <span class="adonis-icon icon-play icon-3x"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                    <path
                                                        d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                                    </path>
                                                </svg></span>
                                            <span class="adonis-icon icon-pause icon-3x"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                    <path
                                                        d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                    </path>
                                                    <path
                                                        d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                    </path>
                                                </svg></span></a>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                                <div class="jp_controls_wrapper">
                                    <div class="jp-volume-controls">
                                        <a class="adonis-mute-control" role="button" tabindex="0">
                                            <span class="adonis-icon icon-volume icon-3x"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 32">
                                                    <path
                                                        d="M31.76 9.056l-1.36 2.592c1.265 1.020 2.071 2.567 2.080 4.302v0.002c0 1.896-0.456 3.616-1.952 4.648l1.28 2.184c1.962-1.642 3.202-4.092 3.202-6.831 0-2.776-1.272-5.254-3.266-6.884l-0.016-0.013zM36.664 4.424l-1.664 2.288c2.479 2.331 4.027 5.627 4.040 9.286v0.002c-0.027 3.717-1.634 7.053-4.182 9.375l-0.010 0.009 1.728 2.2c3.058-2.92 4.96-7.028 4.96-11.581 0-0.001 0-0.002 0-0.003v0c-0.017-4.532-1.877-8.626-4.87-11.574l-0.002-0.002zM41.6 0l-1.848 2.168c3.497 3.563 5.665 8.442 5.696 13.826l0 0.006c-0.043 5.368-2.202 10.223-5.683 13.779l0.003-0.003 1.832 2.168c3.946-4.151 6.373-9.778 6.373-15.972s-2.427-11.821-6.383-15.982l0.009 0.010zM0 10.888v10.4c0 1.328 1.2 3.016 2.688 3.016h8.080v-16.616h-8.080c-1.488 0-2.688 1.912-2.688 3.2zM23.272 0.136l-11.272 7.4v16.984l11.272 7.48c1.48 0 3.608-1.072 3.608-2.4v-27.072c0-1.32-2.128-2.392-3.608-2.392z">
                                                    </path>
                                                </svg></span>
                                            <span class="adonis-icon icon-mute icon-3x"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 11.95">
                                                    <g data-name="Layer 2">
                                                        <g id="Group_4" data-name="Group 4">
                                                            <path
                                                                d="M18.75,8.12V9.61H17.26L15.38,7.73,13.49,9.61H12V8.12l1.88-1.89L12,4.35V2.86h1.49l1.89,1.88,1.88-1.88h1.49V4.35L16.87,6.23Z" />
                                                            <g id="audio_2" data-name="audio 2">
                                                                <path class="cls-1"
                                                                    d="M0,4V7.92A1.16,1.16,0,0,0,1,9.05H4V2.83H1C.45,2.83,0,3.54,0,4ZM8.73,0,4.51,2.78V9.14L8.73,12c.55,0,1.35-.4,1.35-.9V.9C10.08.4,9.28,0,8.73,0Z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                        </a>
                                        <div class="jp-volume-bar d-flex align-items-center">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </div>
                                    <div class="jp_adoins_wrapper"><a class="toggle-off-canvas"
                                            data-target="#adonis-playlist" role="button" tabindex="0"><span
                                                class="adonis-icon icon-4x"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 32">
                                                    <path
                                                        d="M16 4.571h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0zM2.286 0c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 13.714h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 13.714c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 27.429h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 27.429c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0z">
                                                    </path>
                                                </svg></span></a></div>

                                    <div class="jp_current_time_wrapepr d-none d-lg-block">
                                        <div class="jp-current-time" role="timer" aria-label="time"></div>
                                        <div class="jp-duration" role="timer" aria-label="duration"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--./ container-fluid-->
                    <div class="jp-progress d-flex align-items-center jp-progress-pos-top">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                </div>

                <div id="adonis-playlist" class="adonis-playlist off-canvas off-canvas-right">
                    <div class="adonis-playlist-player adonis-player player-bg-yellow">
                        <a class="close-offcanvas" data-target="#adonis-playlist" href="#"><span
                                class="adonis-icon icon-3x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.4 12l5.3-5.3c0.4-0.4 0.4-1 0-1.4s-1-0.4-1.4 0l-5.3 5.3-5.3-5.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4l5.3 5.3-5.3 5.3c-0.4 0.4-0.4 1 0 1.4 0.2 0.2 0.4 0.3 0.7 0.3s0.5-0.1 0.7-0.3l5.3-5.3 5.3 5.3c0.2 0.2 0.5 0.3 0.7 0.3s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4l-5.3-5.3z">
                                    </path>
                                </svg></span>
                        </a>
                        <div class="blurred-bg-wrap">
                            <div class="blurred-bg"></div>
                        </div>
                        <div class="media current-item">
                            <div class="song-poster">
                                <img class="box-rounded-sm" src="" alt="">
                            </div>
                            <div class="player-details col-8">
                                <h3 class="jp-title"></h3>
                                <p class="artist-name"></p>
                                
                            </div>
                        </div>
                        <div class="media controls jp_media_playlist">
                            <div class="playlist-player-control align-items-center col-4">
                                <a class="jp-play fs-4" role="button" tabindex="0">
                                    <span class="adonis-icon icon-play icon-2x"><svg version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                            <path
                                                d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                            </path>
                                        </svg></span>
                                    <span class="adonis-icon icon-pause icon-2x"><svg version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                            <path
                                                d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                            </path>
                                            <path
                                                d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                            </path>
                                        </svg></span>
                                </a>
                                
                            </div>
                            <div class="col-8">
                                <div class="jp-current-time jp-time" role="timer" aria-label="time"></div>
                                <div class="jp-progress jp_progress2">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                                <div class="jp-duration" role="timer" aria-label="duration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="jp-playlist scroll-y">
                        <ul>
                            <li>&nbsp;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- playlist wrapper end -->
        <!--custom js files-->


        <script src="/frontend/js/modernizr.js"></script>
        <script src="/frontend/js/plugin.js"></script>
        <script src="/frontend/js/jquery.nice-select.min.js"></script>
        <script src="/frontend/js/jquery.inview.min.js"></script>
        <script src="/frontend/js/jquery.magnific-popup.js"></script>
        <script src="/frontend/js/swiper.min.js"></script>
        <script src="/frontend/js/comboTreePlugin.js"></script>
        {{-- <script src="/frontend/js/mp3/jquery.jplayer.min.js"></script> --}}
        {{-- <script src="/frontend/js/mp3/jplayer.playlist.js"></script> --}}
        <script src="/frontend/js/owl.carousel.js"></script>
        {{-- <script src="/frontend/js/mp3/player.js"></script> --}}
        <script src="/frontend/js/custom.js"></script>
        <!-- custom js-->

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

        <script>
            $(document).ready(function(){
    $(".alert").delay(5000).slideUp(300);
});
     

            var currentAudio = null;
            var previousAudio = null;
            var music_type ;
            var new_beat_time ;
            var audio ;
            $(document).keydown(function(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode;
   
      // right arrow
    if (unicode == 39) {
      audio.currentTime += 5;
      // back arrow
    } else if (unicode == 37) {
      audio.currentTime -= 5;
      // spacebar
    } else if (unicode == 32) {
      if (audio.paused) {
        audio.play();
      } 
      else {
        audio.pause()
      }
    }
  });

//..................................
        $(document).ready(function(){

            var full_music_path;
            var sb = {
                song: null,
                init: function () {
                if (music_type=='music') {                   
                    if (audio!=null) {                                            
                    audio.pause();
                    sb.song = new Audio(full_music_path);
                    audio = sb.song;
                    sb.play();
                
                    } else {
                    sb.song = new Audio(full_music_path);
                    audio = sb.song;
                    sb.play();
                    }
                }else if (music_type == 'beats') {
                    
                    if (audio!=null) {   
                    audio.pause();
                    sb.song = new Audio(full_music_path);
                    audio = sb.song;
                    sb.play();
                    setTimeout(function(){
                         audio.pause(); 
                         }, new_beat_time);
                    } else {
                    sb.song = new Audio(full_music_path);
                    audio = sb.song;
                    sb.play();
                    setTimeout(function(){
                         audio.pause(); 
                         }, new_beat_time);
                    }
                }
                   
                },
                 play: function (e) {
                    sb.song.play();
                }
                };
            $('.jp-play').on('click',function () {
                if (music_type=='music') {                   

                if (!audio.paused) {
                    audio.pause();
                }else if (audio.paused) {
                    audio.play();

                }
            }else if (music_type == 'beats') {

                if (!audio.paused) {
                    audio.pause();
                }else if (audio.paused) {
                    audio.pause();
                }
            }
            });
       
            $('.flaticon-play-button').on('click',function () {
                previousAudio =currentAudio;
             
               var id = $(this).attr('id');
            
               $.ajax({
                method:"POST",   
                url:'/musicpath',
                data:{
                    id:id,
                    _token:'{{ csrf_token() }}'

                },
                success:function(data){
                var cover_art_path = '/uploadedCoverArts/';
                var cover_art = data.coverart;
                 var music = data.music_path;
                //  console.log(data.music_type);
                 music_type = data.music_type;
                 var beat_time = data.beat_time;
                 new_beat_time = beat_time*1000;
                var path = '/uploadedFiles/';
                full_music_path = path+''+music;
                var full_covertart_path = cover_art_path+''+cover_art;
                var img;             
                img = jQuery('<img class="box-rounded-sm"  alt=""> ');
                img.attr('src', full_covertart_path);
                $('.song-poster').empty();
                $('.song-poster').append(img);
                $('.artist-names').empty();
                $('.artist-names').append(data.artist);
           sb.init();

                

                    // audio= new Audio(full_music_path);
                    // if (!audio.paused) {
                    //      audio.pause();
                    // }else if (audio.paused) {
                    //      audio.play();
                    // }
                   
                       
                                                   
                },
                error:function(data){

                }

               });
            });
            
        });
        
        </script>
</body>

</html>