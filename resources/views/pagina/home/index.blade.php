@extends('pagina.base')

@section('content')

    @include('pagina.menu')
    {{-- @include('pagina.menu-center') --}}

    @include('pagina.home.header')
    
    {{-- @include('pagina.home.banner') --}}

    @include('pagina.home.intro')

    @include('pagina.home.servicios')

    {{-- @include('pagina.home.proyectos') --}}

    @include('pagina.home.nosotros')

    @include('pagina.home.equipo')

    @include('pagina.home.tecnologias')

    @include('pagina.home.suscripcion')

    @include('pagina.home.contactos')

    @include('pagina.footer')


    @include('pagina.home.proyecto_item')
    @include('pagina.home.timeline')

@endsection