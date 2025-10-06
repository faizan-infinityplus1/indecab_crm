<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstMyDriver extends Model
{
    protected $fillable = [
        'name',
        'image',
        'supplier_id',
        'mobile_no',
        'alternate_mobile_no',
        'pan_no',
        'aadhar_no',
        'birth_date',
        'joining_date',
        'salary_per_month',
        'daily_wages',
        'branches',
        'daily_working_hours',
        'working_hours_start',
        'working_hours_end',
        'daily_allowance',
        'allowance_over_time',
        'allowance_outstation_per_day',
        'allowance_outstation_overnight',
        'gst_addr',
        'sunday_allowance',
        'early_start_allowance',
        'night_allowance',
        'extra_duty_second',
        'extra_duty_third',
        'extra_duty_fourth',
        'extra_duty_fifth',
        'license_no',
        'license_valid_upto',
        'police_card_number',
        'police_card_expiry_date',
        'police_veri_no',
        'police_veri_expiry_date',
        'badge_number',
        'badge_expiry_date',
        'additional_info',
        'driver_code',
        'is_contract',
        'is_covid_vacinated',
        'is_active'
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
}
