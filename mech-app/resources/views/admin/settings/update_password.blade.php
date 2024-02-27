@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Settings</h4>
            <p class="card-description">
              Update Password
            </p>

            @if(Session::has('error_message'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> {{  Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              @endif
              @if(Session::has('success_message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{  Session::get('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </ul>
               
            </div>
        @endif

            <form class="forms-sample" method="post" action="{{ url('admin/update-password') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="admin_email">Email address</label>
                <input  class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" style="background-color: whitesmoke">
              </div>
              <div class="form-group">
                <label for="current_pwd">Current Password</label>
                <input type="password" class="form-control"  name="current_pwd" id="current_pwd" placeholder=" Current Password"><span id="verifyCurrentPwd"></span>
              </div>
              <div class="form-group">
                <label for="new_pwd">New Password</label>
                <input type="password" class="form-control"  name="new_pwd" id="new_pwd" placeholder="New Password">
              </div>
              <div class="form-group">
                <label for="confirm_pwd">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password">
              </div>
             
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      
     
    
     
     
    
     
    </div>
  </div>
    
@endsection