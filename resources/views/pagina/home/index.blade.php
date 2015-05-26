@extends('pagina.base')

@section('content')

    @include('pagina.menu')

    @include('pagina.home.banner')

    @include('pagina.home.intro')

    @include('pagina.home.servicios')

    @include('pagina.home.servicios.index')

    {{-- @include('pagina.home.proyectos') --}}

    @include('pagina.home.nosotros')

    @include('pagina.home.equipo')

    @include('pagina.home.tecnologias')

    @include('pagina.home.suscripcion')

    @include('pagina.home.contactos')

    @include('pagina.footer')


    @include('pagina.home.proyectos.eventos')
    @include('pagina.home.nosotros.timeline')
    @include('pagina.home.informacion.politicas')
    @include('pagina.home.informacion.terminos')

@endsection