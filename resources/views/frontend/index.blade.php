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
                    <h1>treanding songs</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms1.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms2.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms3.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms4.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms5.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/ms6.jpg" alt="img">
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
                                    <div class="tranding_play_icon">
                                        <a href="#">
                                            <i class="flaticon-play-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- treanding song wrapper end -->
<!-- release album wrapper start -->
<div class="treanding_songs_wrapper release_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>New Releases Albums
                    </h1>
                </div>
                <div class="relaese_viewall_wrapper">
                    <a href="#"> view all <i class="flaticon-right-arrow"></i></a>
                </div>
                <div class="release_tabs_wrapper">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"> hindi</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1">english</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2"> telugu</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu3"> punjabi</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu4"> marathi </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu5"> bhojpuri</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="tab-content">
                    <div id="home" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel3.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Sadda Move song</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel2.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Ik Vaari Aa jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel1.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Dilla Ther Jaa</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel5.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">wafa ne bewafai</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel4.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">me hoon don</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel6.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">tera chehra</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                <div class="treanding_slider_main_box release_box_main_content m24_cover">
                                    <img src="/frontend/images/rel.png" alt="img">
                                    <div class="release_content_artist">
                                        <p><a href="#">Jabariya Jodi</a></p>
                                        <p class="various_artist_text"><a href="#">Various Artists</a></p>
                                    </div>
                                    <div class="m24_treanding_box_overlay release_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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
                        <a href="#"> view all <i class="flaticon-right-arrow"></i></a>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp1.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">Let me Love You</a></p>
                                    <p class="various_artist_text"><a href="#">Auguste Rodin</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp2.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">
                                            Until I Met You</a></p>
                                    <p class="various_artist_text"><a href="#">Henry Moore</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp3.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">Let me Love You</a></p>
                                    <p class="various_artist_text"><a href="#">Marc Chagall</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp4.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">Dark Alley Acotic</a></p>
                                    <p class="various_artist_text"><a href="#">brian hills</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp5.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">Walking Promises</a></p>
                                    <p class="various_artist_text"><a href="#">Ava Cornish</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_songs_list m24_cover">
                        <div class="top_songs_list_left">
                            <div class="treanding_slider_main_box top_lis_left_content">
                                <div class="top_songs_list0img">
                                    <img src="/frontend/images/tp6.png" alt="img">
                                    <div class="m24_treanding_box_overlay">
                                        <div class="m24_tranding_box_overlay"></div>

                                        <div class="tranding_play_icon">
                                            <a href="#">
                                                <i class="flaticon-play-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="release_content_artist top_list_content_artist">
                                    <p><a href="#">Gimme Sourage</a></p>
                                    <p class="various_artist_text"><a href="#">Chrissy Costanza</a></p>
                                </div>

                            </div>
                            <div class="top_list_tract_time">
                                <p>4:22</p>
                            </div>
                        </div>
                        <div class="top_songs_list_right">
                            <div class="top_list_tract_view">
                                <p>8M+ View</p>
                            </div>
                            <div class="top_song_list_picks">
                                <div class="m24_tranding_more_icon">
                                    <i class="flaticon-menu"></i>
                                </div>
                                <ul class="tranding_more_option">
                                    <li><a href="#"><span class="opt_icon"><i class="flaticon-playlist"></i></span>Add
                                            To playlist</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-star"></i></span>favourite</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-share"></i></span>share</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-files-and-folders"></i></span>view lyrics</a></li>
                                    <li><a href="#"><span class="opt_icon"><i
                                                    class="flaticon-trash"></i></span>delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">

                <div class="m24_heading_wrapper">
                    <h1>Featured Artists</h1>
                </div>

                <div class="featured_song_slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa1.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Rihanna Fenty </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa2.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Beyonce Giselle</a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa3.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">taylor swift </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa1.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Rihanna Fenty </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa2.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Beyonce Giselle</a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa3.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">taylor swift </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa1.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Rihanna Fenty </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa2.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Beyonce Giselle</a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa3.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">taylor swift </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa1.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Rihanna Fenty </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa2.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">Beyonce Giselle</a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="featured_artist_list m24_cover">
                                <img src="/frontend/images/fa3.png" class="img-responsive" alt="img">
                                <div class="featured_artist_detail">
                                    <p><a href="#">taylor swift </a></p>
                                    <p class="various_artist_text"><a href="#">51 tracks</a> 8M+ View</p>
                                    <div class="lang_apply_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="flaticon-play-button"></i>play now</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="top_song_list_picks featured_list_dropdown">
                                        <div class="m24_tranding_more_icon">
                                            <i class="flaticon-menu"></i>
                                        </div>
                                        <ul class="tranding_more_option">
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-playlist"></i></span>Add To playlist</a>
                                            </li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-star"></i></span>favourite</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-share"></i></span>share</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-files-and-folders"></i></span>view
                                                    lyrics</a></li>
                                            <li><a href="#"><span class="opt_icon"><i
                                                            class="flaticon-trash"></i></span>delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top songs wrapper end -->
<!-- concert wrapper start -->
<div class="concert_wrapper m24_cover">
    <div class="concert_overlay"></div>
    <div class="concert_wrapper_slider">
        <div class="concert_shape_img">
            <img src="/frontend/images/shape.png" alt="img">
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="content">
                                    <div class="slider_ball_img">
                                        <img src="/frontend/images/headphone.png" alt="img">
                                    </div>
                                    <div class="os_frame_tt_toggle_first">

                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>headphone Technology</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_second">
                                        <img src="/frontend/images/line.png" alt="img">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>noice concellation</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_third">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper os_frame_tooltip_wrapper_third">
                                            <h3>Diasil Cylinder</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="content">
                                    <div class="slider_ball_img">
                                        <img src="/frontend/images/headphone.png" alt="img">
                                    </div>
                                    <div class="os_frame_tt_toggle_first">

                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>headphone Technology</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_second">
                                        <img src="/frontend/images/line.png" alt="img">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>noice concellation</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_third">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper os_frame_tooltip_wrapper_third">
                                            <h3>Diasil Cylinder</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="content">
                                    <div class="slider_ball_img">
                                        <img src="/frontend/images/headphone.png" alt="img">
                                    </div>
                                    <div class="os_frame_tt_toggle_first">

                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>headphone Technology</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_second">
                                        <img src="/frontend/images/line.png" alt="img">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper">
                                            <h3>noice concellation</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="os_frame_tt_toggle_first os_frame_tt_toggle_third">
                                        <a href="#!"><i class="fa fa-plus"></i></a>
                                        <div class="os_frame_tooltip_wrapper os_frame_tooltip_wrapper_third">
                                            <h3>Diasil Cylinder</h3>
                                            <p>Amazon’s cloud based voice service, play game and more.</p>
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <div class="concert_video_wrapper">
        <a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0'
            title='title'><i class="fa fa-play"></i></a>
        <div class="concert_content_wrap">
            <h1>Live Concert in </h1>
            <p>Avril Lavigne at California, 6:22pm</p>

        </div>

    </div>
</div>
<!-- concert wrapper end -->
<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper punjabi_sogns m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>Punjabiyan Da Swag</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider playlist_songs_list">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/td7.png" alt="img">

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
                                    <p><a href="#">Mind Broken</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- treanding song wrapper end -->

<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper punjabi_sogns m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>Retro Playlists</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider playlist_songs_list">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/rt1.png" alt="img">

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
                                    <p><a href="#"> Hotshot Space</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/rt2.png" alt="img">

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
                                    <p><a href="#"> Friendly Patience</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz3.png" alt="img">

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
                                    <p><a href="#">Faking Freedom</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/rt4.png" alt="img">

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
                                    <p><a href="#"> Rock Will Find </a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz1.png" alt="img">

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
                                    <p><a href="#"> Just Another Lightning</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/rt6.png" alt="img">

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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- treanding song wrapper end -->
<!-- treanding song wrapper start -->
<div class="treanding_songs_wrapper m24_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="m24_heading_wrapper">
                    <h1>jazz Playlists</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="treanding_song_slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz1.png" alt="img">

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
                                    <p><a href="#"> Supernatural Feast</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz2.png" alt="img">

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
                                    <p><a href="#">Antique Sun</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz3.png" alt="img">

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
                                    <p><a href="#">Rocking Star</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz4.png" alt="img">

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
                                <img src="/frontend/images/jz5.png" alt="img">

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
                                    <p><a href="#"> Sense Unleashed</a></p>

                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="treanding_slider_main_box m24_cover">
                                <img src="/frontend/images/jz6.png" alt="img">

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
                                    <p><a href="#"> Reckless Ruin</a></p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection