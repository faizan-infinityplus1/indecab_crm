<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstVehicle extends Model
{
    protected $fillable = [
        'model_name',
        'vehicle_no',
        'image',
        'seat_capacity',
        'fuel_type',
        'vehicle_group_id',
        'color',
        'driver_id',
        'supplier_id',
        'vehicle_code',
        'branches',
        'loan_emi_amt',
        'loan_srt_date',
        'loan_end_date',
        'bank_name',
        'emi_day',
        'reg_owner_name',
        'reg_data',
        'parts_chasis_no',
        'parts_engine_no',
        'insaurance_company_name',
        'insaurance_policy_no',
        'insaurance_issue_date',
        'insaurance_due_date',
        'insaurance_prem_amt',
        'insaurance_cover_amt',
        'rto_address',
        'rto_tax_efficiency',
        'rto_exp_date',
        'fitness_no',
        'auth_expiry_date',
        'auth_no',
        'auth_expiry_date',
        'speed_details',
        'speed_expiry_date',
        'puc_no',
        'puc_expiry_date',
        'unavail_for_duty',
        'active',
    ];

    protected $guarded = ['created_at', 'updated_at', 'admin_id'];

    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }

    public function mstCatVehGroup()
    {
    
        return $this->belongsTo(MstCatVehGroup::class, 'vehicle_group_id', 'id');
    }

     public function mstDriver()
    {
    
        return $this->belongsTo(MstMyDriver::class, 'driver_id', 'id');
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
