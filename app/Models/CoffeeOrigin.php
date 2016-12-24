<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeeOrigin
 * @package App\Models
 * @version December 24, 2016, 7:16 pm UTC
 */
class CoffeeOrigin extends Model
{
    use SoftDeletes;

    public $table = 'coffee_origins';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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

    
}
