<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use App\Models\MstCatVehGroup;
use App\Models\MstCustomer;
use App\Models\MstDutyType;
use App\Models\MstLabel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function create()
    {
        $customers = MstCustomer::where('is_active', true)->with('people')->get();
        $vehicleGroup = MstCatVehGroup::get();
        $dutyTypes = MstDutyType::get();
        $labels = MstLabel::get();
        return view("backend.admin.duties.booking.manage", compact('customers', 'vehicleGroup', 'dutyTypes', 'labels'));
    }
}
