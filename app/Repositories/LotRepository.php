<?php

namespace App\Repositories;

use App\Models\Lot;
use InfyOm\Generator\Common\BaseRepository;

class LotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'lot_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lot::class;
    }
}
