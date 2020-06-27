@extends('layouts.app')
@section('content')
<!--inner Title Start -->
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper m24_cover">
                    <h2>shop sidebar</h2>

                    <ul>
                        <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;/</li>
                        <li>shop sidebar</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- inner Title End -->
<!-- blog category wrapper start-->
<div class="blog_category_wrapper blog_single_wrapper m24_cover">

    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <div class="sidebar_widget">
                    <h4>search</h4>
                    <form class="search_form" role="search">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="search">
                            <i class="fa fa-search"></i>
                        </div>

                    </form>
                </div>
                <div class="sidebar_widget">
                    <h4>music categories</h4>

                    <div class="archives_wrapper">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> Artist & Band Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Best Sale Album
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Concert Ticket

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Musical Instrument
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Most View Videos
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="sidebar_widget">
                    <div class="wrapper_second_blog wrapper_second_blog_2">
                        <h4>music post</h4>
                        <div class="blog_wrapper1">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_1.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Dream to Moments</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_2.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Gimme Courage</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_3.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Until I Met You</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_4.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        I luv music</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>music tags</h4>

                    <div class="archives_wrapper">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> january-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>february-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>march-2019

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>april-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>may-2019
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>tag cloud</h4>

                    <div class="gc_blog_cloud_side_menu">

                        <ul>
                            <li><a href="#">musical</a>
                            </li>
                            <li><a href="#">event</a>
                            </li>
                            <li><a href="#">blue jazz</a>
                            </li>
                            <li><a href="#">concert</a>
                            </li>
                            <li><a href="#">road show</a>
                            </li>
                            <li><a href="#">dancing</a></li>

                        </ul>
                    </div>

                </div>
                <div class="m24_banner_img m24_cover">
                    <img src="/frontend/images/banner_article.jpg" alt="img">
                    <div class="app_btn banner_btn m24_cover">
                        <a href="#">buy now</a>

                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>share this post</h4>
                    <ul class="icon_list_news top_cover">
                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#" class="twit"> <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="#" class="linkd"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>

                    </ul>

                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 shop_sidebar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-area m24_cover">

                            <select>
                                <option>short by</option>
                                <option>most recent </option>
                                <option>most popular</option>
                                <option>top rated</option>
                            </select>

                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#grid"> <i
                                                class="fas fa-th-large"></i></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#list"><i
                                                class="fas fa-list-ul"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="showpro">
                                <p>You're Watching 01 to 20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp1.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp2.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Jeeley Yeh Lamhe </a></p>
                                                <p class="various_artist_text"><a href="#">Babuji Ek Bambai
                                                    </a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp3.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Padhoge Likhoge </a></p>
                                                <p class="various_artist_text"><a href="#">Mohenjo Daro
                                                    </a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp4.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Rajj Rajj Ke</a></p>
                                                <p class="various_artist_text"><a href="#">raj Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp5.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Jeeley Yeh Lamhe </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp1.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp2.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">mai hoon na </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="featured_artist_list shop_video_wrapper  m24_cover">
                                            <img src="/frontend/images/sp6.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp1.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp3.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Jeeley Yeh Lamhe </a></p>
                                                <p class="various_artist_text"><a href="#">Junooniyat
                                                        ya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp2.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Dard Ka Pata </a></p>
                                                <p class="various_artist_text"><a href="#">Pyaar Manga Hai
                                                    </a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp3.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Jeeley Yeh Lamhe </a></p>
                                                <p class="various_artist_text"><a href="#">Junooniyat
                                                        ya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp5.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp4.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Suku Suku </a></p>
                                                <p class="various_artist_text"><a href="#">Raaz Reboot
                                                    </a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp5.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">Kaabil Hoon </a></p>
                                                <p class="various_artist_text"><a href="#">Tutak Tutak Tutiya</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div
                                            class="featured_artist_list shop_video_wrapper shop_list_img_wrapper m24_cover">
                                            <img src="/frontend/images/sp6.jpg" class="img-responsive" alt="img">
                                            <div class="featured_artist_detail shop_featured_artist">
                                                <p><a href="#">mai hoon na </a></p>
                                                <p class="various_artist_text"><a href="#">the dream girl</a>
                                                </p>
                                                <h2> $ 10.00
                                                </h2>
                                                <div class="lang_apply_btn">
                                                    <ul>
                                                        <li>
                                                            <a href="#"> buy</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="shop_rating_section">
                                                <ul class="star_rating">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div
                                                    class="top_song_list_picks featured_list_dropdown shop_playlist_link">
                                                    <div class="m24_tranding_more_icon">
                                                        <i class="flaticon-menu"></i>
                                                    </div>
                                                    <ul class="tranding_more_option">
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-playlist"></i></span>Add To
                                                                playlist</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-star"></i></span>favourite</a>
                                                        </li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-share"></i></span>share</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-files-and-folders"></i></span>view
                                                                lyrics</a></li>
                                                        <li><a href="#"><span class="opt_icon"><i
                                                                        class="flaticon-trash"></i></span>delete</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_pagination_section m24_cover">
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
                    </div>

                </div>
            </div>
            <div
                class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none shop_responsive">
                <div class="sidebar_widget">
                    <h4>search</h4>
                    <form class="search_form" role="search">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="search">
                            <i class="fa fa-search"></i>
                        </div>

                    </form>
                </div>
                <div class="sidebar_widget">
                    <h4>music categories</h4>

                    <div class="archives_wrapper">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> Artist & Band Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Best Sale Album
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Concert Ticket

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Musical Instrument
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Most View Videos
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="sidebar_widget">
                    <div class="wrapper_second_blog wrapper_second_blog_2">
                        <h4>music post</h4>
                        <div class="blog_wrapper1">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_1.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Dream to Moments</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_2.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Gimme Courage</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_3.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        Until I Met You</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="blog_image">
                                <img src="/frontend/images/blog_4.png" class="img-responsive" alt="img" />
                            </div>
                            <div class="sv_blog_text">
                                <h5><a href="#">
                                        I luv music</a></h5>
                                <div class="blog_date blog_date_blog"><i class="fa fa-calendar-o"
                                        aria-hidden="true"></i>Aug 28, 2018-19</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>music tags</h4>

                    <div class="archives_wrapper">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> january-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>february-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>march-2019

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>april-2019
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>may-2019
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>tag cloud</h4>

                    <div class="gc_blog_cloud_side_menu">

                        <ul>
                            <li><a href="#">musical</a>
                            </li>
                            <li><a href="#">event</a>
                            </li>
                            <li><a href="#">blue jazz</a>
                            </li>
                            <li><a href="#">concert</a>
                            </li>
                            <li><a href="#">road show</a>
                            </li>
                            <li><a href="#">dancing</a></li>

                        </ul>
                    </div>

                </div>
                <div class="m24_banner_img m24_cover">
                    <img src="/frontend/images/banner_article.jpg" alt="img">
                    <div class="app_btn banner_btn m24_cover">
                        <a href="#">buy now</a>

                    </div>
                </div>
                <div class="sidebar_widget">
                    <h4>share this post</h4>
                    <ul class="icon_list_news top_cover">
                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#" class="twit"> <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="#" class="linkd"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog category wrapper end --
@endsection