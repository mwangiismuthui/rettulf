<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="{{route('dashboard')}}">
      <img src="/backend/assets/image/logo.jpg" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Music</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    @can('view-dashboard')
    <li>
      <a href="{{route('dashboard')}}" class="waves-effect">
        <i class="ti-home"></i> <span>Dashboard</span>
      </a>

    </li>
    @endcan
    @can('manage-category')

    <li>
    <a href="{{route('category.index')}}" class="waves-effect">
        <i class="ti-package"></i>
        <span>Category Management</span>
      </a>

    </li>
    @endcan
    @can('manage-genre')

    <li>
    <a href="{{route('genre.index')}}" class="waves-effect">
        <i class="ti-layout-media-right"></i>
        <span>Genre Management</span>
      </a>

    </li>
    @endcan
    @can('manage-keys')

    <li>
    <a href="{{route('key.index')}}" class="waves-effect">
        <i class="ti-music"></i>
        <span>Key Management</span>
      </a>

    </li>
    @endcan
    @can('manage-music')

    <li>
      <a href="{{route('adminMusic.index')}}" class="waves-effect">
          <i class="ti-music-alt"></i>
          <span>Music Management</span>
        </a>
  
      </li>
      @endcan
      @can('manage-slider')

    <li>
      <a href="{{route('slider.index')}}" class="waves-effect">
          <i class="ti-layout-slider"></i>
          <span>Slider Management</span>
        </a>
  
      </li>
      @endcan
      @can('manage-emails')

      <li>
      <a href="{{route('bulkEmails')}}" class="waves-effect">
          <i class="ti-email"></i>
          <span>Bulk Emails</span>
        </a>
  
      </li>
      @endcan
      @can('manage-seo')

      <li>
      <a href="{{route('siteSettingsIndex')}}" class="waves-effect">
          <i class="ti-settings"></i>
          <span>Site Management</span>
        </a>
  
      </li>
      @endcan
      @can('manage-seo')

      <li>
      <a href="{{route('seo.index')}}" class="waves-effect">
          <i class="ti-search"></i>
          <span>SEO Management</span>
        </a>
  
      </li>
      @endcan


    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="ti-money"></i>
        <span>Money Management</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">

      @can('manage-upload-fee')
        <li><a href="{{route('uploadFee.index')}}"><i class="fa fa-circle-o"></i>Upload Fee Management</a></li>
        @endcan

      @can('manage-payments')
        <li><a href="{{route('allWithdrawalRequests')}}"><i class="fa fa-circle-o"></i>Payment Management</a></li>
        @endcan

      </ul>
    </li>

    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="icon-user"></i>
        <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        @can('manage-users')

        <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i>User Management</a></li>
        @endcan

        {{-- @can('manage-roles') --}}

        <li><a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i>Role Management</a></li>
        {{-- @endcan --}}

      </ul>
    </li>
    


  </ul>

</div>