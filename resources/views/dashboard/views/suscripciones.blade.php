@extends('dashboard.base')

@section('titulo')
	Suscripciones
@endsection

@section('bread')

    <section class="content-header">
    <h1>
      Suscripciones
      <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Suscripciones</li>
    </ol>
    </section>

@endsection

@section('contenido')

<section class="content">
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Suscripciones</h3>
              <div class="box-tools">
                <div class="input-group">
                  <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar"/>
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Correo</th>
                  <th>Fecha</th>
                </tr>

				@foreach($suscripciones as $suscripcion)
				<tr>
                    <td>{{$suscripcion->correo}}</td>
					<td>{{$suscripcion->created_at}}</td>
				</tr>
				@endforeach

              </table>
            </div>
          </div>
        </div>
	</div>
</section>

@endsection