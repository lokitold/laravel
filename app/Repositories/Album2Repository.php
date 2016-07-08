<?php

namespace App\Repositories;

use App\Models\Album2;
use InfyOm\Generator\Common\BaseRepository;

class Album2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Album2::class;
    }
}
