<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WebServiceUsuariosController extends BaseController
{

	public function index(){

	}

	public function create(){

	}

	public function show($id){

	}

	public function store(Request $request){
		$dump = $request->all();

		if (!isset($dump['name'])) {
			return abort(403,'Nombre no definido');
		}

		if (!isset($dump['email'])) {
			return abort(403,'Email no definido');
		}

		if (!isset($dump['password'])) {
			return abort(403,'Contraseña no definido');
		}

		if(!($email = filter_var($dump['email'], FILTER_VALIDATE_EMAIL)){
			return abort(403,'Email inválido');
		}

		DB::table('users')->insert([
			'name' => $dump['name'],
			'email' => $email,
			'password' => password_hash($dump['email'], PASSWORD_BCRYPT),
			'user_permision' => 5,
		]);

		return 0;
	}
}