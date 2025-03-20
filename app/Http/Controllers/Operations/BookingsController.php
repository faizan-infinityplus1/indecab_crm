<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\MstCustomer;
use App\Models\MstCatVehGroup;
use App\Models\MstDutyType;
use App\Models\MstLabel;
use App\Models\MstMyCompany;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function bookings()
    {
        return view("backend.admin.duties.booking.manage");
    }
    public function allBookings()
    {
        $data = Booking::all();
        // $customers = MstCustomer::all();
        // $customers = MstCustomer::with('booking')->get();
        $bookings = Booking::with("customers")->get();
        // dd($bookings);
        // dd($data);
        $vehicleGroup = MstCatVehGroup::get();
        $dutyTypes = MstDutyType::get();
        $labels = MstLabel::get();
        $mstMyCompany = MstMyCompany::where('is_active', true)->get();
        // return view("backend.admin.duties.booking.manage", compact('booking', 'customers', 'vehicleGroup', 'dutyTypes', 'labels', 'mstMyCompany', 'bookingId', 'defaultCompanyId'));
        return view("backend.admin.Operations.bookings.all.index", compact("data", 'bookings', 'vehicleGroup', 'dutyTypes', 'labels'));
    }
    public function bookedBookings()
    {
        return view("backend.admin.Operations.bookings.booked.index");
    }
    public function onGoingBookings()
    {
        return view("backend.admin.Operations.bookings.onGoing.index");
    }
    public function completedBookings()
    {
        return view("backend.admin.Operations.bookings.completed.index");
    }
    public function billedBookings()
    {
        return view("backend.admin.Operations.bookings.billed.index");
    }
    public function cancelledBookings()
    {
        return view("backend.admin.Operations.bookings.cancelled.index");
    }
}
