<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return view("homeMapa");
});

$router->get('/map', function() use ($router){
	return view('mexicoMap');
});

$router->get('/estado/{estado}', ['uses' => 'EstadoController@show']);

$router->get('municipio/{municipio}',['uses'=>'AlcaldiaController@show']);