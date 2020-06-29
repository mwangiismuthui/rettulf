<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="{{route('dashboard')}}">
      <img src="/backend/assets/images/logo.jpg" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Musuc</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    {{-- @can('view-dashboard') --}}
    <li>
      <a href="{{route('dashboard')}}" class="waves-effect">
        <i class="ti-home"></i> <span>Dashboard</span>
      </a>

    </li>
    <li>
    <a href="{{route('category.index')}}" class="waves-effect">
        <i class="ti-shopping-cart"></i>
        <span>Category Management</span>
      </a>

    </li>
    <li>
    <a href="{{route('genre.index')}}" class="waves-effect">
        <i class="ti-shopping-cart"></i>
        <span>Genre Management</span>
      </a>

    </li>
    <li>
    <a href="{{route('key.index')}}" class="waves-effect">
        <i class="ti-shopping-cart"></i>
        <span>Key Management</span>
      </a>

    </li>
    <li>
      <a href="{{route('adminMusic.index')}}" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Music Management</span>
        </a>
  
      </li>
    {{-- <li>
      <a href="{{route('slider.index')}}" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Slider Management</span>
        </a>
  
      </li> --}}
      <li>
      <a href="{{route('bulkEmails')}}" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Bulk Emails</span>
        </a>
  
      </li>
      {{-- <li>
      <a href="{{route('seo.index')}}" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>SEO Management</span>
        </a>
  
      </li> --}}
       
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="icon-briefcase"></i>
        <span>Money Management</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('uploadFee.index')}}"><i class="fa fa-circle-o"></i>Upload Fee Management</a></li>
        <li><a href="{{route('allWithdrawalRequests')}}"><i class="fa fa-circle-o"></i>Payment Management</a></li>
      </ul>
    </li>
   
 
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="icon-briefcase"></i>
        <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i>User Management</a></li>
        <li><a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i>Role Management</a></li>
      </ul>
    </li>

  </ul>

</div>