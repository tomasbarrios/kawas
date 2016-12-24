<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Categorias extends Model
{
    use softDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $dates = ['deleted_at'];

    protected $table = 'categorias';
    protected $fillable = [
        'categoria',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}

