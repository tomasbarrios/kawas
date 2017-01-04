<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Farm
 * @package App\Models
 * @version January 4, 2017, 4:20 am UTC
 */
class Farm extends Model
{
    use SoftDeletes;

    public $table = 'farms';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'coffee_origin_id',
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
        'coffee_origin_id' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lots()
    {
        return $this->hasMany(\App\Models\Lot::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function farm()
    {
        return $this->belongsTo(\App\Models\Farm::class, 'coffee_origin_id');
    }
}
