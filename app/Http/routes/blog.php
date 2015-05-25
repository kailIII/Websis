<?php

Route::group(array('prefix' => 'blog'), function() {

	Route::get('/', ['as' => 'blog', 'uses' => 'BlogController@index']);

	Route::get('nosotros', ['as' => 'nosotros', 'uses' => 'BlogController@nosotros']);

	Route::get('post/{id}', ['as' => 'post', 'uses' => 'BlogController@post']);

	Route::get('contactos', ['as' => 'contactos', 'uses' => 'BlogController@contactos']);

});
	