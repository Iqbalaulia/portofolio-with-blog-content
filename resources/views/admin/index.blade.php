<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard Owner
  </title>
  <link rel="apple-touch-icon" href="{{ asset('/admin/app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/admin/app-assets/images/ico/favicon.ico') }}">

  @stack('prepend-style')
 
  @include('.admin/dashboard/include/css')

  @stack('addon-style')

  
</head>
<body >
  <!-- fixed-top-->
 {{-- @include('.admin/dashboard/component/navbar') --}}
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  {{-- @include('.admin/dashboard/component/side-navbar')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        @yield('content-admin')
      </div>
    </div>
  </div>
   --}}

   <div id="app">
    <div class="main-wrapper">   
      
      @include('.admin/dashboard/component/navbar')
      
      @include('.admin/dashboard/component/side-navbar')
      <!-- Main Content -->
      @yield('content-admin')
      
      @include('.admin/dashboard/component/footer')
    </div>
  </div>
  
  @stack('prepend-script')

  @include('.admin/dashboard/include/js')

  @stack('addon-script')
</body>

</html>