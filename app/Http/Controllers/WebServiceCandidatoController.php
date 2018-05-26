<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WebServiceCandidatoController extends BaseController
{


/*	public function index(){
		return "mocos";
	}

	public function create(){

	}
*/
	public function  show($id){
		$dummy = $dump = preg_replace('/[^0-9]/', '', $id);

		if($dummy == NULL){
			return abort(403,'Email invalido');
		}

		$candidato = DB::table('candidato')->where('id', '=', $dummy)->get();

		return $candidato;

	}

	public function store(Request $request){

		$dummy = $request->all();

		if (!isset($dummy["nombre"])) {
			return abort(403,'No existe nombre');
		}
		if (!isset($dummy["partido"])) {
			return abort(403,'No existe partido');
		}
		if (!isset($dummy["tipo_candidatura"])) {
			return abort(403,'No existe candidatura');
		}
		if (!isset($dummy["email"])) {
			return abort(403,'No existe email');
		}
		if (!isset($dummy["sitio"])) {
			return abort(403,'No existe sitio');
		}
		if (!isset($dummy["id_estado_municipio"])) {
			return abort(403,'No existe municipio');
		}
		
		if (!isset($dummy["telefono"])) {
			return abort(403,'No existe telefono');
		}


		DB::table('candidato')->insert([
			'nombre_candidato' => $dummy["nombre"],
			'partido' => json_encode($dummy["partido"]),
			'tipo_candidatura' => $dummy["tipo_candidatura"],
			'email' => $dummy["email"],
			'sitio' => json_encode($dummy["sitio"]),
			'id_estado_municipio' => $dummy["id_estado_municipio"],
			'telefono' => json_encode($dummy["telefono"]),
		]);

		return 0;

	}

/*	public function edit($id){

	}
*/

	public function update(Request $request, $id){
		$dump_req = $request->all();
		$dummy = preg_replace('/[^0-9]/', '', $id);

		if($dummy == NULL){
			return abort(403,'identificador invalido');
		}

		if (!isset($dump_req["nombre"])) {
			return abort(403,'No existe nombre');
		}
		if (!isset($dump_req["partido"])) {
			return abort(403,'No existe partido');
		}
		if (!isset($dump_req["tipo_candidatura"])) {
			return abort(403,'No existe candidatura');
		}
		
		if (!isset($dump_req["sitio"])) {
			return abort(403,'No existe sitio');
		}
		if (!isset($dump_req["id_estado_municipio"])) {
			return abort(403,'No existe municipio');
		}
		
		if (!isset($dump_req["telefono"])) {
			return abort(403,'No existe telefono');
		}

		$candidato = DB::table('candidato')->where('id', '=', $dummy);

		$candidato->update([
			'nombre_candidato' => $dump_req["nombre"],
			'partido' => json_encode($dump_req["partido"]),
			'tipo_candidatura' => $dump_req["tipo_candidatura"],
			/*'email' => $dump_req["email"],*/
			'sitio' => json_encode($dump_req["sitio"]),
			'id_estado_municipio' => $dump_req["id_estado_municipio"],
			'telefono' => json_encode($dump_req["telefono"]),
		]);

		return 0;
	}

	public function destroy($id){
		$dummy = preg_replace('/[^0-9]/', '', $id);

		if($dummy == NULL){
			return abort(403,'identificador invalido');
		}

		$candidato = DB::table('candidato')->where('id', '=', $dummy);

		$candidato->update([
			'active' => 0,
		]);

		return 0;
	}
}
