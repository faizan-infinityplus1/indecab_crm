<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstDutySupporterAddress extends Model
{
    protected $fillable = [
        'admin_id',
        'duty_supporter_id',
        'duty_supporter_address_type',
        'duty_supporter_address'
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

    public function mstdutysupporter()
    {
        return $this->belongsTo(MstDutySupporter::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
