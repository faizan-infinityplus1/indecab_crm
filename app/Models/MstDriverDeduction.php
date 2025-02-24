<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstDriverDeduction extends Model
{
    protected $fillable = [
        'deduction_name',
        'deduction_amount'
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
    public function mstDriver()
    {
        return $this->belongsTo(MstMyDriver::class, 'id');
    }
}
