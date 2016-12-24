<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CatalogImage extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table = 'catalogs';

    protected $fillable = [
        'catalog_id','image',
    ];
    public function catalogs()
    {
        return $this->belongsTo('App\Catalog');
    }
}
