<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Education Dashboard </title>
      <!-- Main CSS -->			
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/flag-icon/flag-icon.min.css') }}"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/simple-line-icons/css/simple-line-icons.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/ionicons/css/ionicons.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/jquery-ui.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/footable/footable.core.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/apex-chart/apexcharts.css') }}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}"/>
      <!-- Favicon -->	
      <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

            <!-- Footer Script -->
      <!--================================-->
      <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
      <script src="{{ asset('assets/plugins/popper/popper.js') }}"></script>
      <script src="{{ asset('assets/plugins/feather-icon/feather.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/footable/footable.all.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/countup/counterup.min.js') }}"></script>		
      <script src="{{ asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/apex-chart/apexcharts.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/apex-chart/irregular-data-series.js') }}"></script>
      <script src="{{ asset('assets/plugins/google-chart/google-chart.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js') }}"></script>
      <script src="{{ asset('assets/js/dashboard/education-dashboard-init.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
      <script src="{{ asset('assets/js/highlight.min.js') }}"></script>
      <script src="{{ asset('assets/js/app.js') }}"></script>
      <script src="{{ asset('assets/js/custom.js') }}"></script>
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         @include('layouts.partials.education_sidebar')
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            @include('layouts.partials.education_header')
            <!--/ Page Header End -->   
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            {{ $slot }}
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->	
            <!--================================-->
            @include('layouts.partials.education_footer')
            <!--/ Page Footer End -->		
         </div>
         <!--/ Page Content End -->
      </div>
      <!--/ Page Container End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End -->
      <!--================================-->
   </body>
</html>