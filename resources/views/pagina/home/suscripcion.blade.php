<section id="suscripcion" class="subscribe text-center" ng-controller="SuscripcionCtrl">
  <div class="container" ng-show="!suscrito">

  	<div class="row">
    	<div class="col-xs-12">
    		<h2><i class="fa fa-paper-plane"></i><span>Suscribete para recibir noticias</span></h2>
    	</div>
	</div>

    <div class="row">
    	<div class="col-xs-12">
		    <form name="forma" ng-submit="submit()" class="form-inline">

		    	<div class="input-group col-xs-7">
					<input class="form-control input-lg" type="email" ng-model="correo" required>
					<span class="input-group-btn">
					<button type="submit" class="btn btn-primary btn-lg" ng-disabled="forma.$invalid">Enviar</button>
					</span>
		    	</div>

		    </form>
    	</div>
		
  		<div class="col-xs-12">
            <ul class="errors">
              <li ng-repeat="error in errores">@{{error}}</li>
            </ul>
        </div>

        <div class="col-xs-12 email">
  			<a href="#email" data-toggle="modal">
                <i class="fa fa-envelope fa-3x"></i>
            </a>
  		</div>

    </div>	

  </div>

  <div class="container" ng-show="suscrito">

  	<div class="row">
    	<div class="col-xs-12">
    		<h2>
    			<i class="fa fa-star fa-3x"></i><br>
    			<span>Eres Genial!!!</span><br>
    			Ya formas parte de la familia <strong>Websis</strong><br>
    		</h2>
    	</div>
	</div>

  </div>
</section>



<div class="modal fade" id="email" ng-controller="EmailCtrl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Contacto</h4>
            </div>
            <div class="modal-body">
                <form name="form">
                    <div class="form-group" ng-show="errores">
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <ul class="errors">
                              <li ng-repeat="error in errores">@{{error}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" ng-model="correo.nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo: </label>
                        <input type="email" class="form-control" id="email" placeholder="ejemplo@ejemplo.com" ng-model="correo.correo">
                    </div>
                    <div class="form-group">
                        <label for="nota">Nota: </label>
                        <textarea class="form-control" rows="3" id="nota" placeholder="Cuentanos..." ng-model="correo.nota"></textarea>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" ng-disabled="form.$invalid" ng-click="submit(correo);">Enviar</button>

            </div>
        </div>
    </div>
</div>

