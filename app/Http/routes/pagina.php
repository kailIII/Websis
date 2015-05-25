<?php

	Route::get('/', ['as' => 'home', 'uses' => 'PaginaController@index']);
	Route::post('/suscripcion', ['as' => 'home', 'uses' => 'PaginaController@suscripcion']);
	Route::post('/email', ['as' => 'home', 'uses' => 'PaginaController@email']);