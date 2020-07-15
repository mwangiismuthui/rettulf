<div class="m24_navi_main_wrapper m24_cover">
    <div class="container-fluid">
        <div class="m24_logo_wrapper">
            <div class="m24_logo_div">
                <a href="{{route('index')}}">
                    <img src="{{url('/Logos').'/'.$logopath}}" alt="logo">
                </a>
            </div>
            <div id="toggle">
                <a href="#"><i class="flaticon-menu-1"></i></a>
            </div>
        </div>

        <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
            <div class="m24_signin_wrapper">
                @if (Auth::check())
                <a href="{{route('login')}}"><img
                        src="{{ Auth::user()->profile_photo == "" ? '/frontend/images/pf.png': url('/ProfilePics').'/'.Auth::user()->profile_photo}}"
                        alt="img">
                    <div class="login_top_wrapper">
                        <ul class="main_nav_ul">
                            <li><a>{{Auth::user()->name}}, <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a></a></li>
                            <li><a class="tex-info" href="{{route('editProfile')}}">My Profile</a></li>
                        </ul>
                        {{-- <p>{{Auth::user()->name}},</p> --}}
                        {{-- <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                </a> --}}
            </div>

            </a>
            @else
            <a href="{{route('login')}}"><img src="/frontend/images/pf.png" alt="img">
                <div class="login_top_wrapper">
                    <p>login/register</p>
                </div>
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
                        {{-- @hasrole('Producer')                             --}}
                        <li class="parent">
                            <a href="{{route('newSongs')}}"><i class="fas fa-caret-right"></i>New Songs</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('mostDownloadedSongs')}}"><i class="fas fa-caret-right"></i>Most
                                Downloaded Songs</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('mostListenedSongs')}}"><i class="fas fa-caret-right"></i>Most Played
                                Songs</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('topArtists')}}"><i class="fas fa-caret-right"></i>Top Artist</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('newBeats')}}"><i class="fas fa-caret-right"></i>New Beats</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('mostDownloadedBeats')}}"><i class="fas fa-caret-right"></i>Most
                                Downloaded Beats</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('mostListenedBeats')}}"><i class="fas fa-caret-right"></i>Most Played
                                Beats</a>
                        </li>
                        <li class="parent">
                            <a href="{{route('topProducers')}}"><i class="fas fa-caret-right"></i>Top Producers</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- mainmenu end -->
        <div class="navi_searchbar_wrapper">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu navi_2_dropdown" role="menu">
                        <li class="parent"><a href="#beats_music_search"><i class="fas fa-caret-right"></i>Beats &
                                Songs</a></li>
                        <li class="parent"><a href="#artists_search"><i class="fas fa-caret-right"></i>Artists &
                                Producers</a></li>
                        <li class="divider"></li>
                        <li class="parent"><a href="#all"><i class="fas fa-caret-right"></i>Anything</a></li>
                    </ul>
                </div><br>
                <input type="hidden" name="search_category" value="all" id="search_param">
                <div id="toremove">
                <select class="music_search" name="music" onchange="gotoMusic(this)">
                    <option value="" disabled selected>Search Music and Beats
                    </option>
                </select>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
            <div class="search_bar">
                <div class="res_search_bar" id="search_button"> <i class="fa fa-ellipsis-v"></i>
                </div>
                <div id="search_open" class="res_search_box">

                    <div class="m24_signin_wrapper responsive_search_toggle">
                        @if (Auth::check())
                        <a href="{{route('login')}}"><img
                                src="{{ Auth::user()->profile_photo == "" ? '/frontend/images/pf.png': url('/ProfilePics').'/'.Auth::user()->profile_photo}}"
                                alt="img">
                            <div class="login_top_wrapper">
                                <p>{{Auth::user()->name}},</p>
                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @else
                        <a href="{{route('login')}}"><img src="/frontend/images/pf.png" alt="img">
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
<script>
    function gotoMusic(selectObject){
    var music_id = selectObject.value;
    window.location.href = "/search-results/"+music_id;

    }
    var search_category = $('.input-group #search_param').val();
    $(document).ready(function(e){
        initSearch();
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
            // $('#slide').attr("placeholder", "One");
            search_category = param;
            // alert(search_category);
            var mySecondDiv = $('<div id="toremove"><select class="music_search" name="music" onchange="gotoMusic(this)"><option value="" disabled selected>Search '+concept+' </option></select></div>');
            $('#toremove').remove();
            $('.input-group').append(mySecondDiv);
            initSearch();
        });                 

       
    });


    function initSearch(){
        // $('.music_search').empty();
            $('.music_search').select2({
                    // placeholder: 'Search Music and Beats',
                    minimumInputLength: 2,
                    ajax: {
                      url: '/search/music/'+search_category,
                      dataType: 'json',
                      delay: 250,
                      data: function (params) {
                        return {
                          search: params.term 
                        };
                      },
                      processResults: function (response) {
                        // initSearch();
                        return {
                          results: response
                        };
                      },
                      cache: true
                    }
                  });
        }
</script>