<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstDutyType extends Model
{
    protected $fillable = [
        'type',
        'type_name',
        'max_hours',
        'maxkm',
        'maxkmper_day',
        'outside_allowan',
        'maxhoursper_day',
        'totkm',
        'max_days',
        'sub_type',
        'tot_hours',
        'city_limit',
        'p2p',
        'g2g',
        'g_strkmtim',
        'g_endkmtim',
        'disdutroute',
    ];
}
