<?php

namespace App\Repositories;

use App\Models\Farm;
use InfyOm\Generator\Common\BaseRepository;

class FarmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'post_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Farm::class;
    }
}
