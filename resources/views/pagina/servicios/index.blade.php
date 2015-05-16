<!DOCTYPE html>
<html lang="es" ng-app="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Websis - Inicio</title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/servicios.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script>

</head>

<body id="page-top" ng-init = "view = 0">
    

    @include('pagina.servicios.menu')

    @include('pagina.servicios.banner')
	
	<div class="container">
		
    	@include('pagina.servicios.features')

        {{-- Desarrollo --}}
        <section id="sistemas" ng-show=" view == 1 ">
            @include('pagina.servicios.desarrollo.sistemas')
        </section>

        <section id="paginas" ng-show=" view == 2 ">
            @include('pagina.servicios.desarrollo.paginas')
        </section>
        
        <section id="apps" ng-show=" view == 3 ">
            @include('pagina.servicios.desarrollo.apps')
        </section>

        {{-- Multimedia --}}
        <section id="imagen" ng-show=" view == 4 ">
            @include('pagina.servicios.multimedia.imagen')
        </section>

        <section id="audio" ng-show=" view == 5 ">
            @include('pagina.servicios.multimedia.audio')
        </section>

        <section id="video" ng-show=" view == 6 ">
            @include('pagina.servicios.multimedia.video')
        </section>

        {{-- Soporte --}}
        <section id="social" ng-show=" view == 7 ">
            @include('pagina.servicios.soporte.social')
        </section>

        <section id="asesorias" ng-show=" view == 8 ">
            @include('pagina.servicios.soporte.asesorias')
        </section>

        <section id="mantenimiento" ng-show=" view == 9 ">
            @include('pagina.servicios.soporte.mantenimiento')
        </section>

	</div>

    <hr class="featurette-divider">
    
    @include('pagina.footer')


    <!-- JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/agency.js') }}"></script>
    {{-- // <script src="{{ asset('js/servicios.js') }}"></script> --}}

</body>

</html>