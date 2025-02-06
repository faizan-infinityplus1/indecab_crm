<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MstSupplierFile extends Model
{
    protected $fillable = [
        'admin_id',
        'supplier_id',
        'name',
        'image'
    ];
    public function scopeActive($query)
    {
        return $query->where('admin_id', Auth::user()->id);
    }
    public function mstSupplier()
    {
        return $this->belongsTo(MstSupplier::class, 'id'); // assuming 'customer_id' is the foreign key in MstCustomerGroup
    }
}
