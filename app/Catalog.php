<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Catalog extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table = 'catalogs';

    protected $fillable = [
        'pais', 'ubicacion','origen','imagen','tipo',
    ];


    public function catalogimage()
    {
        return $this->hasMany('App\CatalogImage');
    }

    public function users()
    {
       return $this->belongsTo('App\User');
    }
}
