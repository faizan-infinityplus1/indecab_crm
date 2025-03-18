<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'company_id',
        'from_service',
        'to_service',
        'vehicle_group',
        'duty_type',
        'start_date',
        'end_date',
        'reporting_time',
        'drop_time',
        'garage_time',
        'reporting_address',
        'drop_address',
        'short_reporting_address',
        'ticket_number',
        'bill_to',
        'price',
        'per_extra_km_rate',
        'per_extra_hr_rate',
        'remarks',
        'driver_remark',
        'operator_notes',
        'labels',
        'isConfirmedBooking',
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

    public function bookedBy()
    {
        return $this->hasMany(BookingBookedBy::class, 'booking_id');
    }

    public function customers()
    {
        return $this->hasMany(MstCustomer::class, 'id');
    }
}
