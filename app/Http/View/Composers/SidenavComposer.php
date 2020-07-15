<?php

namespace App\Http\View\Composers;

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
        $footer_text = SiteSetting::pluck('footer_text')->first();
        $favicon = SiteSetting::pluck('favicon')->first();
        $seo = Seo::where('seos.page_title', 'like', 'Homepage')->first();

     
       
      $data = [
        'logopath' => $logopath,
        'footer_text' => $footer_text,
        'loading_icon' => $loading_icon,
        'favicon' => $favicon,
        'seo' => $seo,
       
      ];
        $view->with($data);
    }
}
