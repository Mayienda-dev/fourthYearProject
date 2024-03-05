@extends('admin.layout.layout')

@section('content')

    
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $title }}</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Error:</strong> {{  Session::get('success_message') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                  
                        @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error:</strong> {{  Session::get('error_message') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                  
                  <form name="subadminForm" id="subadminForm" class="forms-sample" @if(empty($subadmindata['id'])) action="{{ url('admin/add-edit-subadmin') }}" @else action="{{ url('admin/add-edit-subadmin/'.$subadmindata['id']) }}" @endif method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" @if(!empty($subadmindata['name'])) value="{{ $subadmindata['name'] }}" @else value="{{ old('name') }}"  @endif>
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile number" @if(!empty($subadmindata['mobile'])) value="{{ $subadmindata['mobile'] }} @endif">
                    </div>
                   
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input @if($subadmindata['id']!="") disabled="" @else required=" " @endif  type="email" class="form-control" name="email" id="email" placeholder="Enter email" @if(!empty($subadmindata['email'])) value="{{ $subadmindata['email'] }}" @endif>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" @if(!empty($subadmindata['password'])) value="{{ $subadmindata['password'] }}"  @endif>
                      </div>
                      <div class="form-group">
                        <label for="image">Photo</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @if(!empty($subadmindata['image']))
                          <a target="_blank" href="{{ url('admin/images/photos/'.$subadmindata['image']) }}">View Photo</a>
                          <input type="hidden" name="current_image" value="{{ $subadmindata['image'] }}">
                        @endif
                      </div>
                    
                    
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
            
           
            
            
            
           
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
   
@endsection