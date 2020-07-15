<div id="sidebar" class="bounce-to-right">
    <div id="toggle_close">×</div>
    <div id='cssmenu'>
        <a href="{{route('index')}}"><img  src="{{url('/Logos').'/'.$logopath}}" alt="logo"></a>
        <ul class="sidebb">
        <li><a href='{{route('index')}}'><i class="flaticon-home"></i>Home</a>
              
            </li>
                  
            <li class='has-sub'><a href='#'><i class="flaticon-playlist-3"></i>browse</a>
                <ul>
                    <li><a href="{{route('newSongs')}}"><i class="flaticon-music-1"></i>New  Songs</a></li>
                    <li><a href="{{route('mostDownloadedSongs')}}"><i class="flaticon-music-1"></i>Most Downloaded  Songs</a></li>
                    <li><a href="{{route('mostListenedSongs')}}"><i class="flaticon-music-1"></i>Most Played  Songs</a></li>
                    <li><a href="{{route('topArtists')}}"><i class="flaticon-music-1"></i>Top Artist</a></li>
                    <li><a href="{{route('newBeats')}}"><i class="flaticon-music-1"></i>New  Beats</a></li>
                    <li><a href="{{route('mostDownloadedBeats')}}"><i class="flaticon-music-1"></i>Most Downloaded  Beats</a></li>
                    <li><a href="{{route('mostListenedBeats')}}"><i class="flaticon-music-1"></i>Most Played  Beats</a></li>
                    <li><a href="{{route('topProducers')}}"><i class="flaticon-music-1"></i>Top Producers</a></li>
                   
                </ul>
            </li>
        
             <li class='has-sub'><a href='#'><i class="flaticon-playlist-1"></i>My Dashboard</a>
                <ul>
                    @hasanyrole('Producer|Artist')

                    <li><a href="{{route('myMusic')}}"><i class="flaticon-playlist-1"></i>Uploaded music</a></li>
                    @else
                    @endhasanyrole
                   
                    <li><a href="{{route('downloadedMusic')}}"><i class="flaticon-download"></i>downloaded music</a></li>
                    {{-- <li><a href="favourite.html"><i class="flaticon-heart"></i>favourite</a></li> --}}
                    {{-- <li><a href="history.html"><i class="flaticon-clock"></i>history</a></li> 						
                    <li><a href="free_music.html"><i class="flaticon-music-1"></i>free_music</a></li> 						 --}}
                </ul>
            </li>
           
         
            <li><a href='{{route('contact')}}'><i class="flaticon-internet"></i>contact us</a></li>
            {{-- <li><a href='{{route('pricing')}}'><i class="flaticon-bell"></i>pricing plan</a></li> --}}
        </ul>
            <div class="lang_apply_btn">
            <ul>
                @hasanyrole('Producer|Artist')

                <li>
                    <a href="{{route('file.upload')}}"> <i class="flaticon-play-button"></i>Upload</a>
                  </li>             
                     @else
                @endhasanyrole
               
                     
           </ul>
      </div>
            <div class="lang_apply_btn">
            <ul>
           
                @if (Auth::check())
                <li>
                    <a href="{{route('logout')}}"> <i class="flaticon-login-button"></i>Logout</a>
                  </li>   
                @else
                <li>
                    <a href="{{route('login')}}"> <i class="flaticon-login-button"></i>Register/Login</a>
                  </li>   
                @endif
                     
           </ul>
      </div>
    </div>
</div>