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
                  
                  <form name="cmsForm" id="cmsForm" class="forms-sample" @if(empty($cmspage['id'])) action="{{ url('admin/add-edit-cms-page') }}" @else action="{{ url('admin/add-edit-cms-page/'.$cmspage['id']) }}" @endif method="post">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title*</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" @if(!empty($cmspage['title'])) value="{{ $cmspage['title'] }}" @endif>
                    </div>
                    <div class="form-group">
                      <label for="url">URL*</label>
                      <input type="text" class="form-control" name="url" id="url" placeholder="Enter page url" @if(!empty($cmspage['url'])) value="{{ $cmspage['url'] }} @endif">
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description" @if(!empty($cmspage['description'])) {{ $cmspage['description'] }} @endif></textarea>
                      </div>
                      <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter meta title" @if(!empty($cmspage['meta_title'])) value="{{ $cmspage['meta_title'] }}" @endif>
                      </div>
                      <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Enter meta description" @if(!empty($cmspage['meta_description'])) value="{{ $cmspage['meta_description'] }}"  @endif>
                      </div>
                      <div class="form-group">
                        <label for="meta_keywords">Meta keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter meta keywords" @if(!empty($cmspage['meta_keywords'])) value="{{ $cmspage['meta_keywords'] }}" @endif>
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