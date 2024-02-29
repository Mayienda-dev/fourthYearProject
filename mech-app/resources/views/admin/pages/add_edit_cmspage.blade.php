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
                  
                  <form name="cmsForm" id="cmsForm" class="forms-sample" action="{{ url('admin/add-edit-cms-page') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title*</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="url">URL*</label>
                      <input type="text" class="form-control" name="url" id="url" placeholder="Enter page url">
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea class="form-control" id="description" name = "description" rows="4" placeholder="Enter Description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Enter meta title">
                      </div>
                      <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Enter meta description">
                      </div>
                      <div class="form-group">
                        <label for="meta_keywords">Meta keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter meta keywords">
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