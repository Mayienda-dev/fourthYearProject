<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    @if(Session::get('page')=="dashboard")
        @php $active ="active" @endphp
    @else
      @php $active = "" @endphp
    @endif
    <li class="nav-item">
      <a class="nav-link {{ $active }} " href="{{ url('admin/dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    @if(Session::get('page')=="update-details"|| Session::get('page')=="update-password")
      @php $active ="active" @endphp
    @else
        @php $active = "" @endphp
    @endif
    <li class="nav-item">
      <a class="nav-link {{ $active }}" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          
        @if(Session::get('page')=="update-password")
          @php $active ="active" @endphp
        @else
          @php $active = "" @endphp
        @endif
          <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-password') }}">Update Admin Password</a></li>
          @if(Session::get('page')=="update-details")
            @php $active ="active" @endphp
          @else
            @php $active = "" @endphp
          @endif
          <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-details') }}">Update Admin Details</a></li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item">
      @if(Auth::guard('admin')->user()->type=="admin")
      <a class="nav-link" href="{{ url('admin/subadmins') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
        &nbsp;&nbsp;

        @if(Session::get('page')=="subadmins")
            @php $active ="active" @endphp
          @else
            @php $active = "" @endphp
          @endif
        <i class="bi bi-person"></i>
        <span class="menu-title">Sub Admins</span>
      </a>
      @endif
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/cms-pages') }}">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">CMS Pages</span>
      </a>
    </li>
    
    
   
   
  </ul>
</nav>