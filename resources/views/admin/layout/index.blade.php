<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{asset('admin')}}" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> @yield('title')</title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
   
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('admin/vendor/fonts/fontawesome.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendor/fonts/tabler-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/css/demo.css')}}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/typeahead-js/typeahead.css')}}" /> 
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('admin/vendor/libs/swiper/swiper.css')}}" />
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/cards-advance.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('admin/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="{{asset('admin/vendor/js/template-customizer.js')}}"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/js/config.js')}}"></script>
    
</head>

<body>
    
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

@include('admin.layout.sidebar')
@include('admin.layout.header')

<!-- <section id="container" class="">  -->
    @yield('content')
<!-- </section> -->

@include('admin.layout.footer')

        
          
<div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="{{asset('admin/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('admin/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('admin/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('admin/vendor/libs/node-waves/node-waves.js')}}"></script>
  <script src="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('admin/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{asset('admin/vendor/libs/i18n/i18n.js')}}"></script>
  <!-- <script src="{{asset('admin/vendor/libs/typeahead-js/typeahead.js')}}"></script> -->
   <script src="{{asset('admin/vendor/js/menu.js')}}"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <!-- <script src="{{asset('admin/vendor/libs/apex-charts/apexcharts.js')}}"></script> -->
<script src="{{asset('admin/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('admin/js/main.js')}}"></script>
  

  <!-- Page JS -->
  <script src="{{asset('admin/js/dashboards-analytics.js')}}"></script>
  @stack('script')
</body>

</html>



