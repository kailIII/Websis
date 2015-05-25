<?php

Route::group(array('prefix' => 'dashboard'), function() {

	Route::get('/', ['as' => 'dashboard', 'uses' => 'Dash\DashboardController@index']);

	Route::get('/suscripciones', ['as' => 'suscripciones', 'uses' => 'Dash\DashboardController@suscripciones']);

});