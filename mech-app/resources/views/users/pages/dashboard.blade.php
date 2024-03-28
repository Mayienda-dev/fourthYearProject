
@extends('users.layout.layout')

@section('content')

{{-- <x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
   
{{-- </x-app-layout> --}} 

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Garages&Consultants</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Garages & Consultants //</h6>
            <h1 class="mb-5">Our Experts Consultants/Quality Garages</h1>
        </div>

        {{-- @foreach($services as $service) --}}

        {{-- <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">{{ $service['garage_name'] }}</h5>
                        
                        <h5 class="fw-bold mb-0">{{ $service['garage_address'] }}</h5>
                        <h5 class="fw-bold mb-0">{{ $service['garage_county'] }}</h5>
                        <h5 class="fw-bold mb-0">{{ $service['garage_mobile'] }}</h5>
                        <h5 class="fw-bold mb-0">{{ $service['garage_email'] }}</h5>
                        
                    </div>
                </div>
            </div>
            
        @endforeach --}}

        {{-- @foreach($services as $service)
  <div class="col-lg-4 col-md-6 mb-4"> <div class="team-item">
      <div class="position-relative overflow-hidden">
        <img class="img-fluid" src="img/team-1.jpg" alt="">
        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
          <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="bg-light text-center p-4">
        <h5 class="fw-bold mb-0">{{ $service['garage_name'] }}</h5>
        <h5 class="fw-bold mb-0">{{ $service['garage_address'] }}</h5>
        <h5 class="fw-bold mb-0">{{ $service['garage_county'] }}</h5>
        <h5 class="fw-bold mb-0">{{ $service['garage_mobile'] }}</h5>
        <h5 class="fw-bold mb-0">{{ $service['garage_email'] }}</h5>
      </div>
    </div>
  </div>
@endforeach
         --}}

         @foreach($services as $service)
  <div class="d-flex justify-content-center">
    <div class="col-md-6 mb-4">
      <div class="team-item">
        <div class="position-relative overflow-hidden">
          <img class="img-fluid" src="img/team-1.jpg" alt="">
          <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="bg-light text-center p-4">
          <h5 class="fw-bold mb-0">{{ $service->garage_name }}</h5>
          <h5 class="fw-bold mb-0">{{ $service->garage_address }}</h5>
          <h5 class="fw-bold mb-0">{{ $service->garage_county }}</h5>
          <h5 class="fw-bold mb-0">{{ $service->garage_mobile }}</h5>
          <h5 class="fw-bold mb-0">{{ $service->garage_email}}</h5>
          {{-- <button class="btn btn-primary" style="background-color: #D81324;" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
            <a href="{{ url('/service/id') }}">View Garage/Consultancy</a>
          </button> --}}
          <a href="{{ url('/service/'.$service->id) }}">
            <button class="btn btn-primary" style="background-color: #D81324;" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                View Garage/Consultancy
          
            </button>
        
            </a>

        
        </div>
        {{-- {{-- <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
            
            <h4 class="m-0">View Garage/Consultancy</h4>
        </button> --}
    
    } --}}

   
      </div>
    </div>
  </div>
@endforeach

<div class="d-flex justify-content-center">
    {{ $services->links() }}
</div>
           
           
          
           
          
           
           
        </div>
    </div>
</div>
    
@endsection
