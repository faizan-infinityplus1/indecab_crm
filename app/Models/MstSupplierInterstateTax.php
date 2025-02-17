<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstSupplierInterstateTax extends Model
{
    protected $fillable = [
        'admin_id',
        'customer_id',
        'city_name',
        'early_time',
        'late_time',
        'outsta_overnig_time',
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
