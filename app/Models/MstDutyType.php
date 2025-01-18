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
        'app_out',
        'maxhoursper_day',
        'totkm',
        'max_days',
        'sub_type',
        'tot_hours',
        'city_limit',
        'isp2p',
        'isg2g',
        'isg_strkmtim',
        'isg_endkmtim',
        'isdisdutroute',
    ];
}
