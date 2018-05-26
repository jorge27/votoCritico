<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Estado;
use App\Candidato;


class EstadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index(){

    }

    public function show($id){



        $estados = Estado::where('short_name','=',$id)->get(); 

        if (!isset($estados[0]->nombre_estado)) {
            return abort(403,'No existe el sitio buscado');
        }

        $gobernadores = Candidato::where('id_estado', '=', $estados[0]->id)->where('tipo_candidatura','=',2)->get();   
        $diputados_camaraBaja =  Candidato::where('id_estado', '=', $estados[0]->id)->where('tipo_candidatura','=',3)->get();
        $diputados_locales = Candidato::where('id_estado', '=', $estados[0]->id)->where('tipo_candidatura','=',4)->get();
        $municipios = DB::table('estado_municipio')->join('municipio', 'estado_municipio.municipio', '=', 'municipio.id')->select('municipio.*','estado_municipio.estado')->where('estado_municipio.estado','=',$estados[0]->id)->get();

        return view('viewEstado1')->with('gobernadores',$gobernadores)->with('estado', $estados[0]->nombre_estado)->with('diputados_camaraBaja',$diputados_camaraBaja)->with('diputados_locales',$diputados_locales)->with('municipios',$municipios);
    }

    public function store(Request $request)
    {
        dd( $request);
    }

    //
}
