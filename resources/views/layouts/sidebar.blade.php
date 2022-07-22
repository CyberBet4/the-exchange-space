 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href={{ route("dashboard")}}>
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="menu-title">Start Swap</span>
            <i class="mdi mdi-swap-horizontal menu-icon"></i>
          </a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Swap Room</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-wechat menu-icon"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href={{ route('swap-room') }}>View Room</a></li>
              <li class="nav-item"> <a class="nav-link" href={{route('join-room')}}>Join Room</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('transactions')}}>
            <span class="menu-title">Swap Transactions</span>
            <i class="mdi mdi-history menu-icon"></i>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <span class="menu-title">KYC Verification</span>
            <i class="mdi mdi-account-check menu-icon"></i>
          </a>
        </li> --}}

        {{-- {{dd(auth()->user()->is_admin);}} --}}
        @if(auth()->user()->is_admin)
        <li class="nav-item">
          <a class="nav-link" href={{route("user-list")}}>
            <span class="menu-title">User List</span>
            <i class="mdi mdi-account-check menu-icon"></i>
          </a>
        </li>
        @endif
        
        <li class="nav-item sidebar-actions">
          <span class="nav-link">
            <div class="border-bottom">
              <h6 class="font-weight-normal mb-3">Wallet</h6>
            </div>
            <button type="button" data-toggle="modal" data-target="#fundmodal" class="btn btn-block btn-lg btn-gradient-primary mt-4" style="width: 100%;">+ Fund Swap</button>
            
            <div class="mt-2">
              <div class="border-bottom">
                <button type="button" data-toggle="modal"  data-target="#withdrawmodal" class="btn btn-block btn-lg btn-gradient-secondary" style="width: 100%;">- Withdraw   </button>
              </div>
            </div>
          </span>
        </li>
      </ul>
    </nav>