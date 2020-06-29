<div id="sidebar" class="bounce-to-right">
    <div id="toggle_close">×</div>
    <div id='cssmenu'>
        <a href="index.html"><img src="/frontend/images/logo.png" alt="logo"></a>
        <ul class="sidebb">
        <li><a href='{{route('index')}}'><i class="flaticon-home"></i>Home</a>
              
            </li>
                  
            <li class='has-sub'><a href='#'><i class="flaticon-playlist-3"></i>browse music</a>
                <ul>
                    <li><a href="{{route('newSongs')}}"><i class="flaticon-music-1"></i>New  music</a></li>
                    <li><a href="{{route('newBeats')}}"><i class="flaticon-music-1"></i>New  Beats</a></li>
                    <li><a href="{{route('mostDownloadedBeats')}}"><i class="flaticon-music-1"></i>Most Downloaded  Beats</a></li>
                    <li><a href="{{route('mostDownloadedSongs')}}"><i class="flaticon-music-1"></i>Most Downloaded  Music</a></li>
                   
                </ul>
            </li>
        
             <li class='has-sub'><a href='#'><i class="flaticon-playlist-1"></i>your music</a>
                <ul>
                    <li><a href="{{route('myMusic')}}"><i class="flaticon-upload"></i>Uploaded</a></li>
                    <li><a href="{{route('downloadedMusic')}}"><i class="flaticon-download"></i>downloaded</a></li>
                    {{-- <li><a href="favourite.html"><i class="flaticon-heart"></i>favourite</a></li> --}}
                    {{-- <li><a href="history.html"><i class="flaticon-clock"></i>history</a></li> 						
                    <li><a href="free_music.html"><i class="flaticon-music-1"></i>free_music</a></li> 						 --}}
                </ul>
            </li>
           
         
            <li><a href='{{route('contact')}}'><i class="flaticon-internet"></i>contact us</a></li>
            <li><a href='{{route('pricing')}}'><i class="flaticon-bell"></i>pricing plan</a></li>
        </ul>
            <div class="lang_apply_btn">
            <ul>
                <li>
                  <a href="{{route('file.upload')}}"> <i class="flaticon-play-button"></i>Upload</a>
                </li>
           </ul>
      </div>
    </div>
</div>