<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Mech App</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('admin/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <!-- End plugin css for this page -->
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout.header')
    <!-- partial -->
    
          <!-- chat tab ends -->
       
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layout.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('admin.layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ url('admin/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ url('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ url('admin/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('admin/js/off-canvas.js') }}"></script>
  <script src="{{ url('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('admin/js/template.js') }}"></script>
  <script src="{{ url('admin/js/settings.js') }}"></script>
  <script src="{{ url('admin/js/todolist.js') }}"></script>
 
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('admin/js/dashboard.js') }}"></script>
  <script src="{{ url('admin/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ url('admin/js/custom.js') }}"></script>
  
  <!-- End custom js for this page-->
  {{-- Custom js --}}
  {{-- J query --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 
  
  {{-- Sweet alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  {{-- Select 2 --}}
 
 
</body>

</html>

