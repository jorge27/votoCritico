<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Candidato extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'candidato';

    protected $fillable = [
        'nombre', 'partido', 'tipo_candidatura', 'email', 'sitio', 'foto', 'telefono',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'id_estado', 'id_estado_municipio', 
    ];
}
