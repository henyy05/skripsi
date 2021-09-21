<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;
use Illuminate\Support\Facades\DB;

class Intersection extends Model
{
    use HasFactory;
    use PostgisTrait;

    protected $connection = 'pgsql';
    protected $table = 'intersection';

    protected $postgisFields = [
        'geom'
    ];

    protected $postgisTypes = [
        'geom' => [
            'geomtype' => 'geometry',
            'srid' => 4326
        ]
    ];
}
