<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerDutyTypeType extends Model
{

    protected $fillable = [
        'admin_id',
        'customer_id',
        'duty_type',
        'start_time',
        'end_time'
    ];
    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }

    public function mstCustomer(){
        return $this->belongsTo(MstCustomer::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup

    }
    
}
