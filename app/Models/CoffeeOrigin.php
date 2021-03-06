<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CoffeeOrigin
 * @package App\Models
 * @version January 4, 2017, 4:14 am UTC
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
        'country',
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
        'country' => 'string',
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
    public function farms()
    {
        return $this->hasMany(\App\Models\Farm::class);
    }
}
