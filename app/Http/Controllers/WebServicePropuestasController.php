<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WebServicePropuestasController extends Controller
{

	public function index(){

	}

	public function create(){
		
	}

	public function show($id){
		$dump = preg_replace('/[^0-9]/', '', $id);

		if($dump == NULL){
			return abort(403,'identificador invalido');
		}
		
		$propuestas = DB::table('propuestas')->where('id_candidato','=', $dump)->get();

		if (!isset($propuestas[0]->propuestas)) {
			return abort(403,'no existen propuestas');
		}

		return $propuestas;
	}

	public function store(Request $request){
		$dump = $request->all();

		if (isset($dump['id_candidato'])) {
			return abort(403,'Candidato no definido');
		}
		if (isset($dump['propuesta'])) {
			return abort(403,'Propuesta no definida');
		}
		if (isset($dump['tipo_propuesta'])) {
			return abort(403,'define el tipo de propuesta');
		}

		DB::table('propuestas')->insert([
			'id_candidato' => preg_replace('/[^0-9]/', '', $dump['id_candidato']),
			'tipo_candidatura' => preg_replace('/[^A-Za-z0-9_]/', '', $dump['tipo_candidatura']),
			'propuesta'=> $dump['propuesta'];
		]);

		return 0;
	}

	public function update(Request $request, $id){
		$dump = preg_replace('/[^0-9]/', '', $id);
		$dump_request = $request->all();

		if($dump == null){
			return abort(403,'El id_candidato no es comprensible');
		}

		if (isset($dump['propuesta'])) {
			return abort(403,'Propuesta no definida');
		}
		if (isset($dump['tipo_propuesta'])) {
			return abort(403,'define el tipo de propuesta');
		}

		$propuestas = DB::table('propuestas')->where('id_candidato','=', $dump);

		DB::table('propuestas')->update([
			'tipo_candidatura' => preg_replace('/[^A-Za-z0-9_]/', '', $dump['tipo_candidatura']),
			'propuesta'=> $dump['propuesta'];
		]);

		return 0;
	}

	public function edit($id){
		
	}

	public function destroy($id){
		$dump = preg_replace('/[^0-9]/', '', $id);

		if($dump == null){
			return abort(403,'El id_candidato no es comprensible');
		}
		
		$propuestas = DB::table('propuestas')->where('id_candidato','=', $dump);

		$propuestas->update([
			'active' => 0
		]);

		return 0;
	}


}