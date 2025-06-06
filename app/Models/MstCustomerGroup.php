<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerGroup extends Model
{
    protected $fillable = [
        'admin_id',
        'name',
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
    // Define the relationship
    public function customer()
    {
        return $this->belongsTo(MstCustomer::class, 'cust_groups_id'); // 'customer_id' is the foreign key in this model
    }
}
