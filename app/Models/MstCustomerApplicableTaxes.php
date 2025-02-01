<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerApplicableTaxes extends Model
{
    protected $fillable = [
        'admin_id',
        'customer_id',
        'tax_id',
        'not_charged'
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
        return $this->belongsTo(MstCustomer::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
