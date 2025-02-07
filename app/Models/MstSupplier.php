<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstSupplier extends Model
{
    protected $fillable = [
        'admin_id',
        'supli_groups_id',
        'name',
        'address',
        'state',
        'type',
        'phone_no',
        'email_id',
        'pan_no',
        'gst_no',
        'revrse_chrg',
        'revenue_share_per',
        'pincode',
        'tds_perc',
        'head_office_city',
        'def_tax_classif',
        'cities',
        'tds_ledger_type',
        'limit_allot_booking',
        'limit_duty_type',
        'vehi_group_limit',
        'branch',
        'cities_cost',
        'cities_ext_hig_cost',
        'supplier_code',
        'gst_name',
        'gst_addr',
        'gst_state',
        'altern_phone_no',
        'altern_email_id',
        'serv_tax_no',
        'gst_type',
        'start',
        'end',
        'is_app_logout',
        'is_gst_tally',
        'is_active',
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

    public function supplierGroups()
    {
        return $this->hasMany(MstSupplierGroup::class, 'id');
    }

    public function mstSupplierDriverCumOwner()
    {
        return $this->hasOne(MstSupplierDriverCumOwner::class, 'supplier_id', 'id');
    }

    public function mstSupplierCompanyDetail()
    {
        return $this->hasOne(MstSupplierCompanyDetail::class, 'supplier_id', 'id');    }
}
