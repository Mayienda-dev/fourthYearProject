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
   
         
        @if(Auth::guard('admin')->user()->type=="vendor")
          @if(Session::get('page')=="update-details"|| Session::get('page')=="update-password")
          @php $active ="active" @endphp
        @else
            @php $active = "" @endphp
        @endif
        <li class="nav-item">
          <a class="nav-link {{ $active }}" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Vendor Details</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              @if(Session::get('page')=="update-password")
              @php $active ="active" @endphp
            @else
              @php $active = "" @endphp
            @endif
              <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-vendor-details/personal') }}">Personal Details</a></li>
              @if(Session::get('page')=="update-details")
                @php $active ="active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-vendor-details/business') }}">Business Details</a></li>
              <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-vendor-details/payment') }}">Payment Details</a></li>
              
            </ul>
          </div>
        </li>

          @else
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
              <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-password') }}">Update Password</a></li>
              @if(Session::get('page')=="update-details")
                @php $active ="active" @endphp
              @else
                @php $active = "" @endphp
              @endif
              <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/update-details') }}">Update  Details</a></li>
              
            </ul>
          </div>
        </li>



          @endif
       
    

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/cms-pages') }}">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">CMS Pages</span>
      </a>
    </li>
    <li class="nav-item">
      @if(Auth::guard('admin')->user()->type=="admin")
      <a class="nav-link" href="{{ url('admin/subadmins') }}">
        <i class="bi bi-person"></i>
        &nbsp; &nbsp;
        <span class="menu-title">Sub admins</span>
      </a>
      @endif
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="bi bi-person"></i>
        &nbsp;&nbsp;
        <span class="menu-title">Admin Management</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
         
            @if(Auth::guard('admin')->user()->type=="admin")
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/admins/admin') }}">Admins</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/admins/subadmin') }}">Sub admins</a></li>
            <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/admins/vendor') }}">Vendors</a></li>
           
         
          

          @endif
          
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="bi bi-person"></i>
        &nbsp;&nbsp;
        <span class="menu-title">User Management</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            @if(Auth::guard('admin')->user()->type=="admin")
            <a class="nav-link" href="{{ url('admin/users') }}">Users</a></li>
         
          <li class="nav-item"> <a class="nav-link {{ $active }}" href="{{ url('admin/subscribers') }}">Subscribers</a></li>

          @endif
          
        </ul>
      </div>
    </li>
    
    
   
   
  </ul>
</nav>