<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use App\Models\MstCustomer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function create()
    {
        $customers = MstCustomer::where('is_active', true)->with('people')->get();
        // dd($customers);
        return view("backend.admin.duties.booking.manage", compact('customers'));
    }
}
