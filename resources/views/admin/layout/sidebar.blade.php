<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{route('dashboard')}}">
            <img src="{{url('/Logos').'/'.$logopath}}" alt="logo" style="width: 30px;height:30px; border-radius:20px;">
            <h5 class="logo-text">{{ $seo->seo_title }}</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        @can('view-dashboard')
            <li class="{{ Route::currentRouteNamed('dashboard') ? 'active ' : '' }}">
                <a href="{{route('dashboard')}}" class="waves-effect ">
                    <i class="ti-home "></i> <span>Dashboard</span>
                </a>

            </li>
        @endcan
        @can('manage-category')

            <li class="{{ Route::currentRouteNamed('category.index') ? 'active ' : '' }}">
                <a href="{{route('category.index')}}" class="waves-effect">
                    <i class="ti-package"></i>
                    <span>Category Management</span>
                </a>

            </li>
        @endcan
        @can('manage-category')

            <li class="{{ Route::currentRouteNamed('location.index') ? 'active ' : '' }}">
                <a href="{{route('location.index')}}" class="waves-effect">
                    <i class="fa fa-map-marker"></i>
                    <span>Location Management</span>
                </a>

            </li>
        @endcan
        @can('manage-genre')

            <li class="{{ Route::currentRouteNamed('genre.index') ? 'active ' : '' }}">
                <a href="{{route('genre.index')}}" class="waves-effect">
                    <i class="ti-layout-media-right"></i>
                    <span>Genre Management</span>
                </a>

            </li>
        @endcan
        @can('manage-keys')

            <li class="{{ Route::currentRouteNamed('key.index') ? 'active ' : '' }}">
                <a href="{{route('key.index')}}" class="waves-effect">
                    <i class="ti-music"></i>
                    <span>Key Management</span>
                </a>

            </li>
        @endcan
        @can('manage-music')

            <li class="{{ Route::currentRouteNamed('adminMusic.index') ? 'active ' : '' }}">
                <a href="{{route('adminMusic.index')}}" class="waves-effect">
                    <i class="ti-music-alt"></i>
                    <span>Music Management</span>
                </a>

            </li>
        @endcan

        @can('activate-artist')

            <li class="{{ Route::currentRouteNamed('activation') ? 'active ' : '' }}">
                <a href="{{route('activation')}}" class="waves-effect">
                    <i class="ti-light-bulb"></i>
                    <span>Activation Management</span>
                </a>

            </li>
        @endcan
        @can('manage-slider')

            <li class="{{ Route::currentRouteNamed('slider.index') ? 'active ' : '' }}">
                <a href="{{route('slider.index')}}" class="waves-effect">
                    <i class="ti-layout-slider"></i>
                    <span>Slider Management</span>
                </a>

            </li>
        @endcan
        @can('manage-emails')

            <li class="{{ Route::currentRouteNamed('bulkEmails') ? 'active ' : '' }}">
                <a href="{{route('bulkEmails')}}" class="waves-effect">
                    <i class="ti-email"></i>
                    <span>Bulk Emails</span>
                </a>

            </li>
        @endcan
        @can('manage-seo')

            <li class="{{ Route::currentRouteNamed('siteSettingsIndex') ? 'active ' : '' }}">
                <a href="{{route('siteSettingsIndex')}}" class="waves-effect">
                    <i class="ti-settings"></i>
                    <span>Site Management</span>
                </a>

            </li>
            <li class="{{ Route::currentRouteNamed('footerSettingsIndex') ? 'active ' : '' }}">
                <a href="{{route('footerSettingsIndex')}}" class="waves-effect">
                    <i class="ti-settings"></i>
                    <span>Footer  settings</span>
                </a>

            </li>
            <li class="{{ Route::currentRouteNamed('users.index') ? 'active ' : '' }}">
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-user"></i>
                    <span>API Keys Config</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                        <li class="{{ Route::currentRouteNamed('mailChipConfigIndex') ? 'active ' : '' }}"><a
                                href="{{route('mailChipConfigIndex')}}"><i class="fa fa-circle-o"></i>MailChip APIs</a></li>

                    <li class="{{ Route::currentRouteNamed('flutterWaveConfigIndex') ? 'active ' : '' }}"><a
                            href="{{route('flutterWaveConfigIndex')}}"><i class="fa fa-circle-o"></i>FlutterWave APIs</a></li>
                    <li class="{{ Route::currentRouteNamed('payStackConfigIndex') ? 'active ' : '' }}"><a
                            href="{{route('payStackConfigIndex')}}"><i class="fa fa-circle-o"></i>PayStack APIs</a></li>
                </ul>
            </li>
        @endcan
        @can('manage-seo')

            <li class="{{ Route::currentRouteNamed('seo.index') ? 'active ' : '' }}">
                <a href="{{route('seo.index')}}" class="waves-effect">
                    <i class="ti-search"></i>
                    <span>SEO Management</span>
                </a>

            </li>
        @endcan


        <li class="{{ Route::currentRouteNamed('uploadFee.index') ? 'active ' : '' }}">
            <a href="javaScript:void();" class="waves-effect">
                <i class="ti-money"></i>
                <span>Money Management</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">

                @can('manage-upload-fee')
                    <li class="{{ Route::currentRouteNamed('uploadFee.index') ? 'active ' : '' }}"><a
                            href="{{route('uploadFee.index')}}"><i class="fa fa-circle-o"></i>Upload Fee Management</a>
                    </li>
                @endcan

                @can('manage-payments')
                    <li class="{{ Route::currentRouteNamed('allWithdrawalRequests') ? 'active' : '' }}"><a
                            href="{{route('allWithdrawalRequests')}}"><i class="fa fa-circle-o"></i>Payment
                            Management</a></li>
                @endcan

            </ul>
        </li>

        <li class="{{ Route::currentRouteNamed('users.index') ? 'active ' : '' }}">
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-user"></i>
                <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                @can('manage-users')

                    <li class="{{ Route::currentRouteNamed('users.index') ? 'active ' : '' }}"><a
                            href="{{route('users.index')}}"><i class="fa fa-circle-o"></i>User Management</a></li>
                @endcan

                {{-- @can('manage-roles') --}}

                <li class="{{ Route::currentRouteNamed('roles.index') ? 'active ' : '' }}"><a
                        href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i>Role Management</a></li>
                {{-- @endcan --}}

            </ul>
        </li>


    </ul>

</div>
