@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
   
    
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Personal Information</h4>
           


            
              <div class="form-group">
                <label for="vendor_name">Username</label>
                <input type="text" class="form-control" name="vendor_name" id="vendor_name" value="{{ $vendorDetails['vendor_personal']['email'] }}" placeholder="Username" readonly="">
              </div>
            
              <div class="form-group">
                <label for="admin_email">Email address</label>
                <input  class="form-control" id="admin_email" value="{{ $vendorDetails['vendor_personal']['email']  }}" readonly="" style="background-color: whitesmoke">
              </div>
              <div class="form-group">
                <label for="vendor_mobile">Mobile</label>
                <input type="text" class="form-control" name="vendor_mobile" id="vendor_mobile" value="{{ $vendorDetails['vendor_personal']['email'] }}" placeholder="Mobile" readonly="">
              </div> 
              <div class="form-group">
                <label for="vendor_county">County</label>
                <input type="text" class="form-control" name="vendor_county" id="vendor_county" value=" {{ $vendorDetails['vendor_personal']['email'] }} " placeholder="Enter county" readonly="">
              </div>
              <div class="form-group">
                <label for="physical_address">Physical Address</label>
                <input type="text" class="form-control" name="physical_address" id="physical_address" value="{{ $vendorDetails['vendor_personal']['email']  }}" placeholder="Enter Physical address" readonly="">
              </div>
              <div class="form-group">
                <label for="vendor_niche">Niche</label>
                <input type="text" class="form-control" name="vendor_niche" id="vendor_niche" value= "{{ $vendorDetails['vendor_personal']['email'] }}" placeholder="Enter Niche" readonly="">
              </div>
              @if(!empty($vendorDetails['image']))
              <div class="form-group">
               <br>
               
                  <img style = "width:200px" src="{{ url('admin/images/photos/'.$vendorDetails['image']) }}">View Photo
                  
                
              </div>
              @endif
              </div>
              </div>


             
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Business Information</h4>
           
    
    
            
              <div class="form-group">
                <label for="service">Service</label>
                <input type="text" class="form-control" name="service" id="service" value="{{ $vendorDetails['vendor_business']['service'] }}" placeholder="Username" readonly="">
              </div>
            
              <div class="form-group">
                <label for="garage_name">Garage/Consultant name</label>
                <input  class="form-control" name="garage_name" id="garage_name" value="{{ $vendorDetails['vendor_business']['garage_name']  }}" readonly="" style="background-color: whitesmoke">
              </div>
              <div class="form-group">
                <label for="garage_address">Garage Physical address</label>
                <input type="text" class="form-control" name="garage_address" id="garage_address" value="{{ $vendorDetails['vendor_business']['garage_address'] }}" placeholder="Mobile" readonly="">
              </div> 
              <div class="form-group">
                <label for="vendor_county">Garage's County</label>
                <input type="text" class="form-control" name="garage_county" id="garage_county" value=" {{ $vendorDetails['vendor_business']['garage_county'] }} "  readonly="">
              </div>
              <div class="form-group">
                <label for="garage_mobile">Garage contact</label>
                <input type="text" class="form-control" name="garage_mobile" id="garage_mobile" value="{{ $vendorDetails['vendor_business']['garage_mobile']  }}" readonly="">
              </div>
              <div class="form-group">
                <label for="garage_email">Garage Email</label>
                <input type="text" class="form-control" name="garage_email" id="garage_email" value= "{{ $vendorDetails['vendor_business']['garage_email'] }}"  readonly="">
              </div>
              <div class="form-group">
                <label for="address_proof">Address Proof</label>
                <input type="text" class="form-control" name="address_proof" id="address_proof" value= "{{ $vendorDetails['vendor_business']['address_proof'] }}" placeholder="Address proof" readonly="">
              </div>
              @if(!empty($vendorDetails['vendor_business']['address_proof_image']))
              <div class="form-group">
               <br>
               
                  <img style = "width:200px" src="{{ url('admin/images/proofs/'.$vendorDetails['vendor_business']['address_proof_image']) }}">
                  
                
              </div>
              @endif
              </div>
              </div>
    
    
             
        </div>
       
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Payment Information</h4>
               
        
        
                
                  <div class="form-group">
                    <label for="mpesaname">Mpesa Name</label>
                    <input type="text" class="form-control" name="mpesaname" id="mpesaname" value="{{ $vendorDetails['vendor_payment']['mpesaname'] }}" placeholder="Username" readonly="">
                  </div>
                
                  <div class="form-group">
                    <label for="mpesamobile">Mpesa Mobile Number</label>
                    <input  class="form-control" id="mpesamobile" value="{{ $vendorDetails['vendor_payment']['mpesamobile']  }}" readonly="" style="background-color: whitesmoke">
                  </div>
                  
                  </div>
                  </div>
        
        
                 
            </div>
          </div>
      </div>
     
  </div>
      </div>
    </div> 
   
 
   
      
     
    
     
     
    
     
   
    
</div>
    
@endsection