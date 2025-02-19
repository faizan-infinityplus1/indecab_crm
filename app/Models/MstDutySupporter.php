<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class MstDutySupporter extends Model
{
    protected $fillable = [
        'name',
        'type',
        'phone_no',
        'alt_phone_no',
        'pan_no',
        'aadhar_card',
        'birth_date',
        'joining_date',
        'branches',
        'ref_details',
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
