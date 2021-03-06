
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href={{ route("dashboard")}}>
        <h3 class="logo me-auto me-lg-0" style="font-weight: bold; color: black;">
          Exchange<span class="text-warning" >space</span></h3></a>
      <a class="navbar-brand brand-logo-mini" href={{ route("dashboard")}}><img src={{ asset("/images/logo-mini.svg")}} alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src={{ asset("/images/faces/default-avatar-profile.jpeg")}} alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            @if(strpos($_SERVER['REQUEST_URI'],'profile') !== false)
            <a class="dropdown-item disabled" href={{ route("profile")}}>
              <i class="mdi mdi-settings me-2 text-success"></i> Account Settings </a>
              @else
              <a class="dropdown-item" href={{ route("profile")}}>
                <i class="mdi mdi-settings me-2 text-success"></i> Account Settings </a>
              @endif
            <div class="dropdown-divider"></div>
            <form action={{ route("logout")}} method="post">
              @csrf
              <button class="dropdown-item" type="submit" >
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </button>
            </form>
            
          </div>
        </li>
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  