<aside class="tecnologias" ng-controller="TecnologiasCtrl">
    <div class="container">
        <div class="row">

            <div class="col-xs-2 col-sm-1" ng-repeat="logo in logos">
                <a ng-href="@{{ logo.url }}" target="_blank">
                    <img ng-src="@{{ 'img/logos/' + logo.img + '.png' }}" class="img-responsive img-centered" alt="">
                </a>
            </div>
            
        </div>
    </div>
</aside>