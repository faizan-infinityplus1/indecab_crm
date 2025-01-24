<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstTax extends Model
{
    protected $fillable = [
        'name',  //required
        'percentage',
        'in_active'

    ];
}
