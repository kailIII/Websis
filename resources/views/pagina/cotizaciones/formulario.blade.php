<form id="myform" name="form" class="fs-form fs-form-full" autocomplete="off">
	<ol class="fs-fields">
		
		<li data-input-trigger>
			<label class="fs-field-label fs-anim-upper" for="q3" data-info="Nos servira para conocer tu necesidad">Necesito un/a: </label>
			<div class="row fs-radio-group fs-radio-custom clearfix fs-anim-lower">
				<span class="col-xs-3">
					<input id="q3b" name="q3" type="radio" ng-click="cotizacion.servicio = 'Sistema Web'"/>
					<label for="q3b" class="radio-desktop">Sistema Web</label>
				</span>
				<span class="col-xs-3">
					<input id="q3c" name="q3" type="radio" ng-click="cotizacion.servicio = 'Aplicación Móvil'"/>
					<label for="q3c" class="radio-page">Página Web</label>
				</span>
				<span class="col-xs-3">
					<input id="q3a" name="q3" type="radio" ng-click="cotizacion.servicio = 'Página Web'"/>
					<label for="q3a" class="radio-mobile">Aplicación Móvil</label>
				</span>
				<span class="col-xs-3">
					<input id="q3d" name="q3" type="radio" ng-click="cotizacion.servicio = 'Red Social'"/>
					<label for="q3d" class="radio-social">Red Social</label>
				</span>
			</div>
		</li>

		<li>
			<label class="fs-field-label fs-anim-upper" for="q1">Mi nombre es: </label>
			<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Nombre completo" ng-model="cotizacion.nombre" required autofocus/>
		</li>

		<li>
			<label class="fs-field-label fs-anim-upper" for="q2" data-info="Nos servira para comunicarnos con tigo">Mi correo es: </label>
			<input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="ejemplo@ejemplo.com" ng-model="cotizacion.correo" required/>
		</li>

		<li>
			<label class="fs-field-label fs-anim-upper" for="q4">Mi @{{ cotizacion.servicio }} me gustaria que fuera: </label>
			<textarea class="fs-anim-lower" id="q4" name="q4" rows="3" placeholder="Describe con detalle"  ng-model="cotizacion.descripcion"></textarea>
		</li>

		{{-- <li>
			<label class="fs-field-label fs-anim-upper" for="q5">Me gustaria pagarlo por</label>
			<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="0" ng-model="cotizacion.presupuesto"/>
		</li> --}}
		
	</ol>
	<div class="col-xs-12">
		<button class="fs-submit" type="submit" ng-disabled="form.$invalid" ng-click="Ok(cotizacion);"> Finalizar <i class="fa fa-angle-right"></i>
		</button>
	</div>
</form> 