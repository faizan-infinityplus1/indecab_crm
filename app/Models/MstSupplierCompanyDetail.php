<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstSupplierCompanyDetail extends Model
{
    protected $fillable = [
        'admin_id',
        'supplier_id',
        'owner_name',
        'vehicle_count',
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
