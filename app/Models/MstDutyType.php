<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstDutyType extends Model
{
    protected $fillable = [
        'duty_type',
        'duty_name',
        'max_hours',
        'max_km',
        'max_kmper_day',
        'apply_outside_allowance',
        'max_hours_per_day',
        'total_km',
        'max_days',
        'sub_type',
        'total_hours',
        'city_limit',
        'p2p',
        'g2g',
        'g_strkmtim',
        'g_endkmtim',
        'disdutroute',
    ];
}
