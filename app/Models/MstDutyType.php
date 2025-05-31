<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (Auth::check()) {
                $model->admin_id = Auth::user()->id; // Set admin_id to the logged-in user's ID
            }
        });
    }

    public function mstCustomer()
    {
        return $this->hasMany(MstCustomer::class, 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'duty_type', 'id');
    }
}
