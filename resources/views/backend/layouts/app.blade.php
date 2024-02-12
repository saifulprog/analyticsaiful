<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mohammad Saiful Islam">
    <link rel="icon" href="{{ asset('media/default/logo/favicon_io/favicon-32x32.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('media/default/logo/favicon_io/favicon-32x32.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('media/default/logo/favicon_io/favicon-32x32.png') }}" rel="icon" title="">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    
    <!-- Font Awesome-->
    @includeIf('backend.layouts.partials.css')
  </head>
  <body>
    <!-- Loader starts-->
    <div  class="pageLoader" id="pageLoader"></div>
    <!-- Loader ends-->
    
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      @includeIf('backend.layouts.partials.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @includeIf('backend.layouts.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          @includeIf('backend.layouts.partials.breadcrumb')  
          @includeIf('backend.layouts.partials.alert-message')  
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @includeIf('backend.layouts.partials.footer')
      </div>
    </div>
    <!-- latest jquery-->
    @includeIf('backend.layouts.partials.js')
  </body>
</html>