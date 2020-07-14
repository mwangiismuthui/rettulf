<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\SiteSetting;

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
     
       
      $data = [
        'logopath' => $logopath,
       
      ];
        $view->with($data);
    }
}
