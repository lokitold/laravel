<?php

namespace App\Repositories;

use App\Models\Album3;
use InfyOm\Generator\Common\BaseRepository;

class Album3Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'route',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Album3::class;
    }
}
