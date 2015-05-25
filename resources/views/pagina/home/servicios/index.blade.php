{{-- <div class="container-fluid bg-light-gray"> --}}
<div class="container marketing" ng-show=" view > 0 ">

{{-- Desarrollo --}}
    <section id="sistemas" ng-show=" view == 1 ">
        @include('pagina.home.servicios.desarrollo.sistemas')
    </section>

    <section id="paginas" ng-show=" view == 2 ">
        @include('pagina.home.servicios.desarrollo.paginas')
    </section>
    
    <section id="apps" ng-show=" view == 3 ">
        @include('pagina.home.servicios.desarrollo.apps')
    </section>

{{-- Multimedia --}}
    <section id="imagen" ng-show=" view == 4 ">
        @include('pagina.home.servicios.multimedia.imagen')
    </section>

    <section id="audio" ng-show=" view == 5 ">
        @include('pagina.home.servicios.multimedia.audio')
    </section>

    <section id="video" ng-show=" view == 6 ">
        @include('pagina.home.servicios.multimedia.video')
    </section>

{{-- Soporte --}}
    <section id="social" ng-show=" view == 7 ">
        @include('pagina.home.servicios.soporte.social')
    </section>

    <section id="asesorias" ng-show=" view == 8 ">
        @include('pagina.home.servicios.soporte.asesorias')
    </section>

    <section id="mantenimiento" ng-show=" view == 9 ">
        @include('pagina.home.servicios.soporte.mantenimiento')
    </section>

</div>