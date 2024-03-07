@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    @if($slug=="personal")
    
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Vendor Details</h4>
            <p class="card-description">
              <strong>Update Personal Details</strong>
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

            <form class="forms-sample" method="post" action="{{ url('admin/update-vendor-details/personal')  }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="vendor_name">Username</label>
                <input type="text" class="form-control" name="vendor_name" id="vendor_name" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Username">
              </div>
            
              <div class="form-group">
                <label for="admin_email">Email address</label>
                <input  class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" style="background-color: whitesmoke">
              </div>
              <div class="form-group">
                <label for="vendor_mobile">Mobile</label>
                <input type="text" class="form-control" name="vendor_mobile" id="vendor_mobile" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="Mobile">
              </div>
              <div class="form-group">
                <label for="vendor_county">County</label>
                <input type="text" class="form-control" name="vendor_county" id="vendor_county" value=" {{ $vendorDetails['county'] }} " placeholder="Enter county">
              </div>
              <div class="form-group">
                <label for="physical_address">Physical Address</label>
                <input type="text" class="form-control" name="physical_address" id="physical_address" value="{{ $vendorDetails['physical_address'] }}" placeholder="Enter Physical address">
              </div>
              <div class="form-group">
                <label for="vendor_niche">Niche</label>
                <input type="text" class="form-control" name="vendor_niche" id="vendor_niche" value= "{{ $vendorDetails['niche'] }}" placeholder="Enter Niche">
              </div>
              <div class="form-group">
                <label for="vendor_image">Photo</label>
                <input type="file" class="form-control" name="vendor_image" id="vendor_image">
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
      
     
    
     
     
    
     
   
    @elseif($slug=="business")
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Vendor update-details</h4>
              <p class="card-description">
                <strong>Update Vendor Details</strong>
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
                  <label for="admin_type">Admin Type</label>
                  <input type="text" class="form-control" name="admin_type" id="admin_type" value="{{ Auth::guard('admin')->user()->type }}" placeholder="Admin Type" readonly="" style="background-color: whitesmoke">
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

    @elseif($slug=="bank")
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Vendor update-details</h4>
              <p class="card-description">
                <strong>Update Vendor Details</strong>
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
                  <label for="admin_type">Admin Type</label>
                  <input type="text" class="form-control" name="admin_type" id="admin_type" value="{{ Auth::guard('admin')->user()->type }}" placeholder="Admin Type" readonly="" style="background-color: whitesmoke">
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


    @endif
  </div>
    
@endsection