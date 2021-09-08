<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;
use Illuminate\Support\Facades\DB;

class PadiLadang extends Model
{
    use HasFactory;
    use PostgisTrait;

    protected $connection = 'pgsql';
    protected $table = 'padi_ladang';

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
