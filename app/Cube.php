<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cube extends Model
{
protected $table = "cubes";
protected $fillable = [
        'cube_name', 'Length','Width','Depth','volume','surface_area'
    ];
}