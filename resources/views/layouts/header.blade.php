<div class="m24_navi_main_wrapper m24_cover">
    <div class="container-fluid">
        <div class="m24_logo_wrapper">
            <div class="m24_logo_div">
                <a href="{{route('home')}}">
                    <img src="/frontend/images/logo.png" alt="logo">
                </a>
            </div>
            <div id="toggle">
                <a href="#"><i class="flaticon-menu-1"></i></a>
            </div>
        </div>

        <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
            <div class="m24_signin_wrapper">


                @if (Auth::check())
                <a href="{{route('login')}}">

                    <p>{{Auth::user()->name}}</p>

                </a>
                @else
                <a href="{{route('login')}}">
                    <p>login/register</p>

                </a>
                @endif

            </div>

        </div>

        <div class="m24_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">

                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">browse <i
                                class="flaticon-down-arrow"></i></a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="add_playlist.html"><i class="fas fa-caret-right"></i>New Music</a>
                            </li>
                            <li class="parent">
                                <a href="{{route('trending')}}"><i class="fas fa-caret-right"></i>Trending Music</a>
                            </li>
                            <li class="parent">
                                <a href="genres.html"><i class="fas fa-caret-right"></i>Top Artist</a>
                            </li>
                            <li class="parent">
                                <a href="album.html"><i class="fas fa-caret-right"></i>Top Producers</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">more <i
                                class="flaticon-down-arrow"></i></a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="{{route('contact')}}"><i class="fas fa-caret-right"></i>contact</a>
                            </li>
                            <li class="parent">
                                <a href="{{route('pricing')}}"><i class="fas fa-caret-right"></i> pricing plan </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- mainmenu end -->
            <div class="navi_searchbar_wrapper">
                <i class="flaticon-magnifying-glass"></i>

                <input type="text" id="justAnotherInputBox"
                    placeholder="Search for Songs, Artists, Playlists and More.." />
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
                <div class="search_bar">
                    <div class="res_search_bar" id="search_button"> <i class="fa fa-ellipsis-v"></i>
                    </div>
                    <div id="search_open" class="res_search_box">

                        <div class="m24_signin_wrapper responsive_search_toggle">
                            @if (Auth::check())
                            <a href="{{route('login')}}">
                                <div class="login_top_wrapper">
                                    <p>{{Auth::user()->name}}</p>

                                </div>
                            </a>
                            @else
                            <a href="{{route('login')}}">
                                <div class="login_top_wrapper">
                                    <p>login/register</p>

                                </div>
                            </a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="m24_navi_langauage_box">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>