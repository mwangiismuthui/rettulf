<?php

namespace App\Http\View\Composers;

use App\FooterSetting;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use App\SiteSetting;
use App\Seo;

use Illuminate\Support\Facades\Auth;

class SidenavComposer
{

    /**
     * Create a CountingComposer .
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $logopath = SiteSetting::pluck('logo')->first();
        $loading_icon = SiteSetting::pluck('loading_icon')->first();
        $favicon = SiteSetting::pluck('favicon')->first();
        $seo = Seo::where('seos.page_title', 'like', 'Homepage')->first();
        $footersettings = FooterSetting::first();
        $playlist = Session::get('playlist');
        $beat_time = SiteSetting::pluck('beat_time')->first();
        if ($beat_time <= 0){
            $beat_time = 5;
        }



      $data = [
        'logopath' => $logopath,
        'loading_icon' => $loading_icon,
        'favicon' => $favicon,
        'seo' => $seo,
        'footersettings' => $footersettings,
        'playlist' => $playlist,
        'beat_time' => $beat_time,

      ];
        $view->with($data);
    }
}
