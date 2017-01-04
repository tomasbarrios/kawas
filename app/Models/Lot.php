<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lot
 * @package App\Models
 * @version January 4, 2017, 4:18 am UTC
 */
class Lot extends Model
{
    use SoftDeletes;

    public $table = 'lots';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'farm_id',
        'title',
        'post_date',
        'body',
        'lot_type',
        'post_visits'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'farm_id' => 'integer',
        'title' => 'string',
        'post_date' => 'datetime',
        'body' => 'string',
        'lot_type' => 'string',
        'post_visits' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function farm()
    {
        return $this->belongsTo(\App\Models\Farm::class, 'farm_id', 'id');
    }
}
