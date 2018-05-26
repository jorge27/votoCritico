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

$router->post('/candidato', ['uses' => 'WebServiceCandidatoController@store']);
$router->get('/candidato/{candidato}',['uses' => 'WebServiceCandidatoController@show']);
$router->put('/candidato/{candidato}',['uses' => 'WebServiceCandidatoController@update']);
$router->delete('/candidato/{candidato}',['uses'=>'WebServiceCandidatoController@destroy']);

$router->post('/propuestas',['uses' => 'WebServicePropuestasController@store']);
$router->get('/propuestas/{candidato}',['uses' => 'WebServicePropuestasController@show']);
$router->put('/propuestas/{candidato}',['uses' => 'WebServicePropuestasController@update']);
$router->delete('/propuestas/{candidato}',['uses' => 'WebServicePropuestasController@destroy']);

$router->post('/usuarios/create',['uses' => 'WebServiceUsuariosController@store']);