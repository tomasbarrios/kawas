<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'SiteController@index');
Route::get('/nosotros','SiteController@nosotros');
Route::get('/servicios','SiteController@servicios');
Route::get('/academia','SiteController@academia');
Route::get('/contacto','SiteController@contacto');
Route::post('/contacto', 'SiteController@send');
Route::group(['prefix' => 'admin'], function () {
	Route::auth();
	Route::get('/', 'HomeController@index');
	Route::group(["middleware" => "auth"], function(){
		Route::resource('catalog','catalogController');
		Route::resource('usuarios','UserController');
		Route::resource('categories','CategoriasController');

	});

});











/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::resource('coffeeOrigins', 'CoffeeOriginController');