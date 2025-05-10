<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    //

    public function billing()
    {
        return view("backend.admin.operations.billing.index");
    }
    public function invoice()
    {
        return view("backend.admin.operations.billing.invoice");
    }
}
