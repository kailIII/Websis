<section id="suscripcion" class="subscribe" ng-controller="SuscripcionCtrl">
  
    {{-- Suscribir --}}
    <div class="container  text-center" ng-show="!suscrito">

      	<div class="row">
        	<div class="col-xs-12">
        		<h2><i class="fa fa-paper-plane"></i><span>Suscribete para recibir noticias</span></h2>
        	</div>
    	</div>

        <div class="row">
        	<div class="col-xs-12">
    		    <form name="forma" ng-submit="submit()" class="form-inline">

    		    	<div class="input-group col-xs-6">
    					<input class="form-control input-lg" type="email" ng-model="suscripcion" placeholder="Ingresa tu correo electrónico..." required>
    					<span class="input-group-btn">
    					<button type="submit" class="btn btn-primary btn-lg" ng-disabled="forma.$invalid">Enviar</button>
    					</span>
    		    	</div>

                    <div class="form-group col-xs-6 col-xs-offset-3" ng-show="errores">
                        <br>
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <ul class="errors">
                              <li ng-repeat="error in errores">@{{error}}</li>
                            </ul>
                        </div>
                    </div>

    		    </form>
        	</div>
    		
            <div class="col-xs-12 email">
      			<a href="#email" data-toggle="modal">
                    <i class="fa fa-envelope fa-3x"></i>
                </a>
      		</div>

        </div>	

    </div>
    
    {{-- Suscrito --}}
    <div class="container  text-center" ng-show="suscrito">

    	<div class="row">
    	<div class="col-xs-12">
    		<h2>
    			<i class="fa fa-star fa-3x"></i><br>
    			<span>Eres Genial!!!</span><br>
    			@{{ msj }} <strong>Websis</strong><br>
    		</h2>
    	</div>
        </div>

    </div>

    {{-- Modal para email --}}
    <div class="modal fade" id="email">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Escribenos</h4>
                </div>
                <div class="modal-body">
                    <form name="form">
                        <div class="form-group" ng-show="emailErrores">
                            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <ul class="errors">
                                  <li ng-repeat="error in emailErrores">@{{error}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input type="text" class="form-control" id="nombre" placeholder="Para saber con quien nos comunicamos" ng-model="correo.nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo: </label>
                            <input type="email" class="form-control" id="email" placeholder="Para responder tu mensaje" ng-model="correo.correo">
                        </div>
                        <div class="form-group">
                            <label for="nota">Nota: </label>
                            <textarea class="form-control" rows="3" id="nota" placeholder="Cuentanos..." ng-model="correo.nota"></textarea>
                        </div>
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" ng-disabled="form.$invalid" ng-click="email(correo);">Enviar</button>

                </div>
            </div>
        </div>
    </div>

</section>



