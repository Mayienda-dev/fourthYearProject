@extends('admin.layout.layout')

@section('content')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success:</strong> {{  Session::get('success_message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
        
       
       
        <div class="table-responsive">
          <table class="table" id="subadmins">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Type</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
             @foreach($admins as $admin)
             <tr>
                <td>{{ $admin['id'] }}</td>
                <td>{{ $admin['name'] }}</td>
                <td>{{ $admin['mobile'] }}</td>
                <td>{{ $admin['email'] }}</td>
                <td>{{ $admin['type'] }}</td>
                <td><img src= "{{asset('admin/images/photos/'.$admin['image'])  }}"></td>
                <td>
                  @if($admin['type']=="vendor")
                      @if($admin['status'] == 1)
                        <a class ="updateVendorStatus" id ="admin-{{ $admin['id'] }}" admin_id= "{{ $admin['id'] }}" href="javascript:void(0)"><i style="font-size:25px" class="mdi mdi-bookmark-check"  status = "Active"></i>
                      @else
                          <a class = "updateVendorStatus" id = "admin- {{ $admin['id'] }}" admin_id = "{{ $admin['id'] }}" href="javascript:void(0)" ><i style = "font-size: 25px" status = "Inactive" class="mdi mdi-bookmark-outline"></i>  
                      @endif
                  @else
                      @if($admin['status'] == 1)
                        <i style="font-size:25px" class="mdi mdi-bookmark-check"></i>
                      @else
                        <i style = "font-size: 25px" status = "Inactive" class="mdi mdi-bookmark-outline"></i>  
                      @endif
                  @endif
                    
                 </td>
                <td>
                    @if($admin['type']=="vendor")
                        <a href="{{ url('admin/view-vendor-details/'.$admin['id']) }}"><i style="font-size:25px;" class="mdi mdi-file-document"></i></a>
                    @endif
                </td>
                
                
                
              </tr>
                
             @endforeach
              
             
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    
@endsection