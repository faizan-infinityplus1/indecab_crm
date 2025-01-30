<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerDriverAllownanceSetting extends Model
{
    protected $table = 'mst_customer_driver_allowance_settings';

    protected $fillable = [
        'admin_id',
        'customer_id',
        'city_name',
        'early_time',
        'late_time',
        'outsta_overnig_time'
    ];
    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }
}
