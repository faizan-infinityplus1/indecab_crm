<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerPeople extends Model
{
    /** @use HasFactory<\Database\Factories\MstCustomerPeopleFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'phone_no',
        'email',
        'alternate_phone_no',
        'alternate_email',
        'notes',
        'labels',
        'isPassenger',
        'isBookedBy',
        'isAdditionalContact',
        'isEmergencyContact',
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
