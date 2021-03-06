<?php

namespace App\Repositories;

use App\Models\CoffeeOrigin;
use InfyOm\Generator\Common\BaseRepository;

class CoffeeOriginRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'country'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CoffeeOrigin::class;
    }
}
