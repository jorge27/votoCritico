<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'estado';

    protected $fillable = [
        'nombre', 'short_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
}
