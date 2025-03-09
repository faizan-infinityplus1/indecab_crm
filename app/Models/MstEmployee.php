<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstEmployee extends Model
{
    protected $fillable = [
        'name',
        'company_id',
        'customers_id',
        'phone_no',
        'alt_phone_no',
        'email',
        'created_employee_id',
        'date_of_joining',
        'employee_photo',
        'designation',
        'gender',
        'dob',
        'blood_group',
        'aadhar_no',
        'pan_no',
        'pf_no',
        'uan_no',
        'dl_no',
        'dl_exp_date',
        'badge_no',
        'badge_exp_date',
        'address',
        'permanent_address',
        'father_name',
        'fathers_dob',
        'mother_name',
        'mothers_dob',
        'marriage_date',
        'license_issued_by',
        'license_city',
        'license_state',
        'license_exp_date',
        'police_dis_card_no',
        'police_dis_card_exp_date',
        'police_verifi_no',
        'police_verifi_exp_date',
        'bank_name',
        'bank_account_number',
        'bank_ifsc_code',
        'branches',
        'associate_to_sister_company',
        'visible_customers',
        'is_api_user',

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
