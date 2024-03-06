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
                          <strong>Success:</strong> {{  Session::get('success_message') }}
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
                  
                  <form name="subadminForm" id="subadminForm" class="forms-sample"  action="{{ url('admin/update-role/'.$id) }}" method="post">
                    @csrf
                    <input type="hidden" name="admin_id" value="{{ $id }}">

                   
                      @if(!empty($subadminRoles))

                      @foreach($subadminRoles as $role)
                      {{-- @php echo $role['module']; die; @endphp --}}
                        
                        @if($role['module']=="cms_pages")
                          @if($role['view_access']==1)
                            @php $viewCMSPages = "checked" @endphp
                          @else
                            @php $viewCMSPages = "" @endphp
                          @endif

                          @if($role['edit_access']==1)
                            @php $editCMSPages = "checked" @endphp
                          @else
                            @php $editCMSpages = "" @endphp

                          @endif

                          @if($role['full_access']==1)
                            @php $fullCMSPages = "checked" @endphp
                          @else
                            @php $fullCMSPages = "" @endphp
                          @endif
                        @endif
                      @endforeach
                      @endif
                      <div class="form-group">
                        <label for="cms_pages">CMS Pages:</label>&nbsp;&nbsp;
                        <input type="checkbox"  name="cms_pages[view]" value="1" @if(isset($viewCMSPages)) {{ $viewCMSPages }} @endif>View Access &nbsp; &nbsp;
                        <input type="checkbox"name="cms_pages[edit]" value="1" @if(isset($editCMSPages)) {{ $editCMSPages }} @endif>View/Edit Access &nbsp; &nbsp;
                        <input type="checkbox" name="cms_pages[full]" value="1" @if(isset($fullCMSPages)) {{ $fullCMSPages }} @endif>Full Acess &nbsp; &nbsp;
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