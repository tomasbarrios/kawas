<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaCatalogo extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table = 'catalogs';

    protected $fillable = [
	        'catalog_id','categoria_id',
    ];
    public function catalogs()
    {
	    
    }
}
