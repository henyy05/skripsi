<?php

namespace App\Repositories;

use App\Models\DataShp;
use App\Repositories\BaseRepository;

/**
 * Class DataShpRepository
 * @package App\Repositories
 * @version July 4, 2021, 1:01 am UTC
*/

class DataShpRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'file'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataShp::class;
    }
}
