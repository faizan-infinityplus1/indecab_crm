<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstBankAccount extends Model
{
    //
    protected $fillable = [
        'account_name',
        'account_number',
        'ifsc_code',
        'bank_name',
        'bank_branch',
        'cheques_in_name',
        'upi_address',
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
