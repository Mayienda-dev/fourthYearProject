@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    
    
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> Service Profile Set up</h4>
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

        
            <form class="form-control" id="categories_form">
                <div class="form-group">
                    
                  
                    <label for="categories">Select Categories of Services:</label>
                    
                    
                    <select name="title[]" id="categories" class="form-control" multiple>
                       
                        <option value="mechanical">Mechanical Services</option>
                        <option value="towing_flatbed">Towing and Flatbed Services</option>
                        <option value="consultancy">Consultancy Services</option>
                        <option value="electronic_diagnostics">Electronic Diagnostics</option>
                        <option value="restoration">Vintage & Car restoration</option>
                        <option value="moding_tuning">Modding and Tuning</option>
                        <option value="maintance">Maintance Services</option>
                    </select>
                  </div>
            </form>

       
              
              
              


              <div class="form-group">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    </div>
      
     
    
     
     
    
     
   
    
    
  </div>
    
@endsection