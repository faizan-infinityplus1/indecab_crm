<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
