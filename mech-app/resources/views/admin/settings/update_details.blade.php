@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Settings</h4>
            <p class="card-description">
              Update Admin Details
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

            <form class="forms-sample" method="post" action="{{ url('admin/update-details')  }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="admin_name">Username</label>
                <input type="text" class="form-control" name="admin_name" id="admin_name" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="admin_email">Email address</label>
                <input  class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" style="background-color: whitesmoke">
              </div>
              <div class="form-group">
                <label for="admin_mobile">Mobile</label>
                <input type="text" class="form-control" name="admin_mobile" id="admin_mobile" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="Mobile">
              </div>
              <div class="form-group">
                <label for="admin_image">Photo</label>
                <input type="file" class="form-control" name="admin_image" id="admin_image">
                @if(!empty(Auth::guard('admin')->user()->image))
                  <a target="_blank" href="{{ url('admin/images/photos/'.Auth::guard('admin')->user()->image) }}">View Photo</a>
                  <input type="hidden" name="current_image" value="{{ Auth::guard('admin')->user()->image }}">
                @endif
              </div>



              <div class="form-group">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      
     
    
     
     
    
     
    </div>
  </div>
    
@endsection