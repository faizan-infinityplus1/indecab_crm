<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'pincode',
        'state',
        'cust_groups_id',
        'phone_no',
        'email_id',
        'pan_no',
        'gst_no',
        'tds_perc',
        'inv_def',
        'def_disc',
        'base_city_fuel',
        'sales_comis_perc',
        'country',
        'def_tax_classif',
        'customer_id',
        'gst_name',
        'gst_addr',
        'gst_state',
        'is_gst_primary',
        'is_gst_tally',
        'altern_phone_no',
        'altern_email_id',
        'gst_type',
        'serv_tax_no',
        'revrse_chrg',
        'surcharg_perc',
        'def_car_chrg_disc',
        'force_fuel_type',
        'feedback_id',
        'company_id',
        'branch',
        'notes',
        'inv_term_cond',
        'cust_code',
        'inv_og_hide',
        'in_active',
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
     // Define the relationship
    public function customerGroups()
    {
        return $this->hasMany(MstCustomerGroup::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
    public function mstCustomerDutyType(){
        return $this->hasMany(MstCustomerDutyTypeType::class, 'customer_id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup

    }
}
