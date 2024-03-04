@extends('admin.layout.layout')

@section('content')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">CMS Pages</h4>
        @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success:</strong> {{  Session::get('success_message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
        
        <a style = "max-width:150px; float:right; display: inline-block"href="{{ url('admin/add-edit-cms-page') }}" class="btn btn-block btn-primary">Add CMS page</a>
          
       
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>URL</th>
                <th>Created on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cmsPages as $page)  
              <tr>
                <td>{{ $page['id'] }}</td>
                <td>{{ $page['title'] }}</td>
                <td>{{ $page['url'] }}</td>
                <td>{{ date("F j, Y, g:i a", strtotime($page['created_at'])); }}</td>
                <td>
                

                  @if($page['status']==1)
                    <a class="updateCmsPageStatus" id="page-{{ $page['id'] }}" page_id= "{{ $page['id'] }}" href="javascript:void(0)"><i class="fa fa-toggle-on" status = "Active" style="font-size:26px"> </i></a>
                  @else
                  <a class="updateCmsPageStatus" id="page-{{ $page['id'] }}" page_id= "{{ $page['id'] }}" href="javascript:void(0)"><i class="fa fa-toggle-off" status = "Inactive" style="font-size:26px; color:grey"> </i></a>
                  @endif
                  &nbsp;&nbsp;
                  <a href="{{ url('admin/add-edit-cms-page/'.$page['id']) }}"><i class="fa fa-edit" style="font-size:26px"></i></a>
                  &nbsp;&nbsp;
                  <a  class= "confirmDelete" name= "Delete CMS Page" title="Delete CMS Page" href="javascript:void(0)" record = "cms-page" recordid="{{ $page['id'] }}"   <?php /*href="{{ url('admin/delete-cms-page/'.$page['id']) }}" */ ?>><i class="fa fa-trash" style="font-size:26px"></i></a>
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