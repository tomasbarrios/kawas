<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Farms
 * @package App\Models
 * @version January 4, 2017, 4:11 am UTC
 */
class Farms extends Model
{
    use SoftDeletes;

    public $table = 'farms';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'origin_id',
        'title',
        'post_date',
        'body',
        'post_type',
        'post_visits'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'origin_id' => 'integer',
        'title' => 'string',
        'post_date' => 'datetime',
        'body' => 'string',
        'post_type' => 'string',
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
        return $this->belongsTo(\App\Models\Farm::class, 'origin_id');
    }
}
