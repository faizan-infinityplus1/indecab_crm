<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstSupplierDriverCumOwner extends Model
{
    protected $fillable = [
        'admin_id',
        'supplier_id',
        'driver_image',
        'vehicle_model',
        'vehicle_no',
        'vehicle_fuel_type',
        'vehicle_image',
        'owner_name',
        'owner_phone_no',
        'regis_owner_name',
        'regis_date',
        'parts_chasis_no',
        'parts_engine_no',
        'insaurance_company_name',
        'insurance_policy_no',
        'insurance_issue_date',
        'insurance_due_date',
        'insurance_premium_account',
        'insurance_cover_account',
        'rto_address',
        'rto_tax_efficiency',
        'rto_expiry_date',
        'fitness_no',
        'fitness_expiry_date',
        'auth_number',
        'auth_expiry_date',
        'speed_details',
        'speed_expiry_date',
        'puc_number',
        'puc_expiry_date',
        'license_no',
        'license_expiry_date',
        'police_card_no',
        'police_expiry_date',
        'police_veri_number',
        'police_veri_expiry_date',
        'is_covid_vaccinated',
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
    public function mstSupplier()
    {
        return $this->belongsTo(MstSupplier::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
