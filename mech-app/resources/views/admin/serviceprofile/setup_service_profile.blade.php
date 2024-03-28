@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    
    
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ $title }}</h4>
            <p class="card-description">
              <strong>Set up Profile Details</strong>
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

        
            <form class="forms-sample" id="categories-form" action="{{ url('admin/set-up-service-profile') }}" method="post">
              @csrf
                <div class="form-group">
                    
                  
                    <label for="categories">Select Categories of Services:</label>
                    
                  
                      <select name="services[]" id="categories" class="form-control" multiple>
                        
                          @foreach($categories as $category)
                          <option value="{{ $category->category }}">{{ $category->category}}</option> 
                          @endforeach
                       

                       
                         
                          
                         
                      </select>

                      
                    
                   
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                  </div>
                  
                  
                    
                  
                 
      
               
            </form>

       
              
              
              


            
        </div>
      </div>
    </div>
    </div>
      
     
    
     
     
    
     
   
    
    
  </div>
    
@endsection