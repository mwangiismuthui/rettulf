<div class="top_songs_list m24_cover">
    <div class="top_songs_list_left">
        <div class="treanding_slider_main_box top_lis_left_content">
            <div class="top_songs_list0img">
                <img src="{{url('/uploadedCoverArts').'/'.$music->cover_art }}"
                     alt="{{$music->title}}" style="height: 60px;width:60px;">
                <div class="m24_treanding_box_overlay">
                    <div class="m24_tranding_box_overlay"></div>

                    <div class="tranding_play_icon">
                        <a id="{{$music->id}}">
                            <i class="flaticon-play-button init-play" id="{{$music->id}}"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="release_content_artist top_list_content_artist">
                <p><a href="{{route('buymusic',$music->id)}}">{{\Illuminate\Support\Str::limit($music->title,23, $end='...')}}</a></p>
                <p class="various_artist_text"><a
                        href="{{route('singleArtist',$music->user->id)}}">{{$music->user->name}}</a>
                </p>
            </div>

        </div>
        @if ($music->price<= 0)
            <div class="top_list_tract_time">

                <p style="color:#FD7444;">Free</p>
            </div>
        @else
            <div class="top_list_tract_time">
                <p style="color:#FD7444;">${{$music->price}}</p>
            </div>
        @endif
        <div class="top_list_tract_time">
            <p>{{$music->duration}}</p>
        </div>
    </div>
    <div class="top_songs_list_right">
        <div class="top_list_tract_view">
            <p>{{$music->views}} {{$music->views == 1 ? 'Play': 'Plays'}}</p>
        </div>
        <div class="top_song_list_picks">
            <div class="m24_tranding_more_icon">
                <i class="flaticon-menu"></i>
            </div>
            <ul class="tranding_more_option">
                <li><a
                        href="whatsapp://send/?text=Check out this music by {{$music->user->name}} on Music%20{{{route('buymusic',$music->id)}}}"><span
                            class="opt_icon"><i class="flaticon-share"></i></span>Whatsapp</a>
                </li>
                <li><a href="http://www.facebook.com/sharer.php?u={{route('buymusic',$music->id)}}"
                       target="_blank"><span class="opt_icon"><i
                                class="flaticon-share"></i></span>FaceBook</a>
                </li>
                <li><a href="http://twitter.com/share?url={{route('buymusic',$music->id)}}&text=Check out this music by {{$music->user->name}} on Music  &hashtags=music"
                       target="_blank"><span class="opt_icon"><i
                                class="flaticon-share"></i></span>Twitter</a>
                </li>
                <li><a href="{{route('buymusic',$music->id)}}"><span class="opt_icon"><i
                                class="flaticon-download"></i></span>download</a></li>
            </ul>
        </div>
    </div>
</div><?php
