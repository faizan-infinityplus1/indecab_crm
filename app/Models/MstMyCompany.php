<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstMyCompany extends Model
{
    protected $fillable = [
        'admin_id',
        'name',
        'supplier_id',
        'company_profile_id',
        'logo',
        'digital_sign',
        'code',
        'business_type',
        'phone_no',
        'address',
        'alternate_phone_no',
        'email',
        'city',
        'state',
        'vat',
        'pincode',
        'service_tax_no',
        'cst_tin_no',
        'cin_no',
        'pan_no',
        'sac_hsn_code',
        'gst_no',
        'term_condition',
        'is_active',
        'is_inv_company',
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
