@extends('admin.layout.layout')

@section('content')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sub admins</h4>
        @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success:</strong> {{  Session::get('success_message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
        
        <a style = "max-width:150px; float:right; display: inline-block"href="{{ url('admin/add-edit-subadmin') }}" class="btn btn-block btn-primary">Add Sub Admin</a>
          
       
        <div class="table-responsive">
          <table class="table" id="subadmins">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Type</th>
                <th>Created on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subadmins as $subadmin)  
              <tr>
                <td>{{ $subadmin->id }}</td>
                <td>{{ $subadmin->name }}</td>
                <td>{{ $subadmin->mobile }}</td>
                <td>{{ $subadmin->email }}</td>
                <td>{{ $subadmin->type }}</td>
                <td>{{ date("F j, Y, g:i a", strtotime($subadmin->created_at)); }}</td>
                
                
                <td>
                
                  @if($subadmin->status==1)
                  <a class="updateSubadminStatus" id="subadmin-{{ $subadmin->id }}" subadmin_id= "{{ $subadmin->id}}" href="javascript:void(0)"><i class="fa fa-toggle-on" status = "Active" style="font-size:26px"> </i></a>
                @else
                <a class="updateSubadminStatus" id="subadmin-{{ $subadmin->id }}" subadmin_id= "{{ $subadmin->id }}" href="javascript:void(0)"><i class="fa fa-toggle-off" status = "Inactive" style="font-size:26px; color:grey"> </i></a>
                @endif
                &nbsp;&nbsp;
                <a href="{{ url('admin/add-edit-subadmin/'.$subadmin->id) }}"><i class="fa fa-edit" style="font-size:26px"></i></a>
                &nbsp;&nbsp;
                <a  class= "confirmDelete" name= "Delete Subadmin Page" title="Delete Subadmin Page" href="javascript:void(0)" record = "subadmin" recordid="{{ $subadmin->id}}"   <?php /*href="{{ url('admin/delete-cms-page/'.$page['id']) }}" */ ?>><i class="fa fa-trash" style="font-size:26px"></i></a>
                &nbsp; &nbsp;
                <a href="{{ url('admin/update-role/'.$subadmin->id) }}"><i class="fa fa-lock" style="font-size:26px"></i></a>
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