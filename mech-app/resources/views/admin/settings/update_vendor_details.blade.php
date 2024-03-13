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
                {{-- <input type="text" class="form-control" name="vendor_county" id="vendor_county" value=" {{ $vendorDetails['county'] }} " placeholder="Enter county"> --}}
                <select name="vendor_county" id="vendor_county" class="form-control" style="color: #495057">
                  <option value="">Select county</option>
                    @foreach($counties as $county)
                    <option value="{{ $county['name'] }}" @if($county['name']==$vendorDetails['county']) selected @endif>{{ $county['name'] }}</option>

                    @endforeach

              
                </select>
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
              <h4 class="card-title">Vendor update business details</h4>
              <p class="card-description">
                <strong>Update Vendor Mechanic/Garage Details</strong>
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
  
              <form class="forms-sample" method="post" action="{{ url('admin/update-vendor-details/business')  }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="admin_email">Email address</label>
                  <input  class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" style="background-color: whitesmoke">
                </div>
                <div class="form-group">
                  <label for="service">Services</label>
                  <select class="form-control" name="service" id="service" style="color: #495057">
                    
                    <option value="garage"  @if($vendorDetails['service']=="garage") selected  @endif>Garage</option>
                    <option value="towing"  @if($vendorDetails['service']=="towing") selected  @endif>Towing and flatbed services</option>
                    <option value="consultant"  @if($vendorDetails['service']=="consultant") selected  @endif>Consultant Mechanic</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="garage_name">Garage/Mech Name</label>
                  <input type="text" class="form-control" name="garage_name" id="garage_name" value="{{ $vendorDetails['garage_name'] }}" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="garage_address">Garage Physical Address</label>
                  <input type="text" class="form-control" name="garage_address" id="garage_address" value="{{ $vendorDetails['garage_address'] }}" placeholder="Garage Address">
                </div>
               
                <div class="form-group">
                  
                  <select name="garage_county" id="garage_county" class="form-control" style="color: #495057">
                    <option value="">Select county</option>
                      @foreach($counties as $county)
                      <option value="{{ $county['name'] }}" @if($county['name']==$vendorDetails['garage_county']) selected @endif>{{ $county['name'] }}</option>
  
                      @endforeach
  
                
                  </select>
                </div>
                <div class="form-group">
                  <label for="garage_mobile">Mobile</label>
                  <input type="text" class="form-control" name="garage_mobile" id="garage_mobile" value="{{ $vendorDetails['garage_mobile']}}" placeholder="Enter Garage/Mech Mobile">
                </div>
                <div class="form-group">
                  <label for="garage_email">Garage/Mech Email</label>
                  <input type="email" class="form-control" name="garage_email" id="garage_email" value="{{ $vendorDetails['garage_email'] }}" placeholder="Enter Garage/Mech email">
                </div>
                <div class="form-group">
                  <label for="address_proof">Adress Proof</label>
                  <select class="form-control" name="address_proof" id="address_proof" style="color: #495057">
                    
                    <option value="ID Image" @if($vendorDetails['address_proof']=="ID Image") selected  @endif>ID Image</option>
                    <option value="Business Registration Image"  @if($vendorDetails['address_proof']=="Business Registration Image") selected  @endif>Business Registration Image</option>
                    
                    
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="address_proof_image">Address Proof Image</label>
                  <input type="file" class="form-control" name="address_proof_image" id="address_proof_image">
                  @if(!empty($vendorDetails['address_proof_image']))
                    <a target="_blank" href="{{ url('admin/images/proofs/'.$vendorDetails['address_proof_image']) }}">View Photo</a>
                    <input type="hidden" name="current_address_image" value="{{ $vendorDetails['address_proof_image']}}">
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

    @elseif($slug=="payment")
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Vendor Payment Details</h4>
              <p class="card-description">
                <strong>Update Payment Details</strong>
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
  
              <form class="forms-sample" method="post" action="{{ url('admin/update-vendor-details/payment')  }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="form-group">
                    <label for="admin_email">Email address</label>
                    <input  class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" style="background-color: whitesmoke">
                  </div>
                  <label for="mpesaname">Mpesa  Full Name</label>
                  <input type="text" class="form-control" name="mpesaname" id="mpesaname" value="{{ $vendorDetails['mpesaname'] }}" placeholder="Enter your mpesa name">
                </div>
               
               
                <div class="form-group">
                  <label for="mpesamobile">Mpesa Mobile Number</label>
                  <input type="text" class="form-control" name="mpesamobile" id="mpesamobile" value="{{ $vendorDetails['mpesamobile'] }}" placeholder="Enter Mpesa mobile number">
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