<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio as Municipios;
use App\Candidato as Candidatos;

class AlcaldiaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    function index(){

    }

    function create(Request $request){

    }

    function store(Request $request){

    }

    function show($id){
    	$municipio = Municipios::where('short_name','=', $id)->leftJoin('estado_municipio', 'estado_municipio.municipio' ,'=', 'municipio.id')->get();

    	if (!isset($municipio[0]->nombre_municipio)) {
    		return abort(404);
    	}

    	$candidatos = Candidatos::where('id_estado_municipio','=', $municipio[0]->municipio)->where('tipo_candidatura','=',5)->leftJoin('propuestas','propuestas.id_candidato','=','candidato.id')->get();

    	return view('viewAlcaldia')->with('candidatos', $candidatos);
    }

    function edit(Request $request, $id){

    }

    function update(Request $request, $id){

    }

    function destroy($id){

    }
}
