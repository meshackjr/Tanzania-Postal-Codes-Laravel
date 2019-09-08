<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    // table name for the model
    protected $table = 'regions';

    // fields accepted in mass assignment
    protected $fillable = [
        'name',
        'postcode'
    ];

}
