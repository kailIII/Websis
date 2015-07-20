<!DOCTYPE html>
<html lang="en" ng-app="Websis">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Websis - Inicio</title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/pagina.css" rel="stylesheet">


</head>

<body id="page-top" class="index" ng-controller="MainCtrl">
    
    <div id="page-loader">
        <div class="page-loader-inner">
            <div class="loader-logo">
                <img src="/img/logotipo.svg" alt="Logo" width="150">
            </div>
            <br>
            <i class="fa fa-spinner fa-pulse fa-2x"></i>
        </div>
    </div>

    @yield('content')


    <!-- JS -->
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/controller.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/pagina.js') }}"></script>

</body>

</html>

