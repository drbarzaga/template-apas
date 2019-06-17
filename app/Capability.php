<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    protected $table = 'capabilities';

    protected $fillable = [
        'part_number', 'alternate_pn', 'boeing_spec', 'description', 'manufacturer', 'ata'
    ];

    public $timestamps = false;
}
