<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstBillingItem extends Model
{
     protected $fillable = [
        'name',
        'short_name',
        'taxable',
        'allow_driver_to_add',
        'req_bef_strt_duty',
        'n_charged_on_customer_invoice',
        'active',
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
