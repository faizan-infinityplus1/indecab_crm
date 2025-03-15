<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function allBookings()
    {
        return view("backend.admin.Operations.bookings.all.index");
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
