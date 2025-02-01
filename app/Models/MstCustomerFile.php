<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstCustomerFile extends Model
{
    protected $fillable = [
        'admin_id',
        'customer_id',
        'name',
        'image'
    ];
    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }
    public function mstCustomer()
    {
        return $this->belongsTo(MstCustomer::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
