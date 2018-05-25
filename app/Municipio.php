<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Municipio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'municipio';

    protected $fillable = [
        'nombre', 'short_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'id_imco',
    ];
}
