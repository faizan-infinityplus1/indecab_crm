<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstCatVehGroup extends Model
{
    protected $fillable = [
        'name',  //required
        'description',
        'image',
        'seat_capacity',
        'lug_count',

    ];
}
