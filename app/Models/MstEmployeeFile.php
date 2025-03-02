<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstEmployeeFile extends Model
{
    protected $fillable = [
        'admin_id',
        'employee_id',
        'name',
        'image'
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
    public function mstEmployee()
    {
        return $this->belongsTo(MstEmployee::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
