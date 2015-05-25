<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Websis | @yield('titulo')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/css/skins/skin-blue.min.css') }}" rel="stylesheet">
   
  </head>
  <body class="skin-blue">

    <div class="wrapper">
      
      @include('dashboard.header')
      @include('dashboard.aside')
      
      <div class="content-wrapper">

          @yield('bread')

          @yield('contenido')

      </div>
      
      @include('dashboard.footer')
     
    </div>

    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dash/plugins/slimScroll/jquery.slimScroll.min.js') }}"></script>
    {{-- // <script src="{{ asset('dash/js/pages/dashboard.js') }}"></script> --}}
    <script src="{{ asset('dash/js/app.min.js') }}"></script>

  </body>
</html>