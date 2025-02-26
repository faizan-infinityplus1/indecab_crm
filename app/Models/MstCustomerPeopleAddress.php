<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerPeopleAddress extends Model
{
    /** @use HasFactory<\Database\Factories\MstCustomerPeopleAddressFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'full_address',
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

    public function customer()
    {
        return $this->belongsTo(MstCustomerPeople::class, 'customer_people_id');
    }
}
