<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstMyDriverAddress extends Model
{
    protected $fillable = [
        'file_name',
        'type',
        'address',
    ];
}
