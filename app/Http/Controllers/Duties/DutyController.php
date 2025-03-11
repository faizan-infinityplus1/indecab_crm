<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function allotted()
    {
        return view("backend.admin.duties.incoming.incoming");
    }
    public function Attention()
    {
        return view("backend.admin.duties.attention.needAttention");
    }
    public function Upcoming()
    {
        return view("backend.admin.duties.upcoming.upcoming");
    }
    public function Booked()
    {
        return view("backend.admin.duties.booked.booked");
    }
    public function DutyAlloted()
    {
        return view("backend.admin.duties.alloted.alloted");
    }
    public function Dispatched()
    {
        return view("backend.admin.duties.dispatched.dispatched");
    }
    public function Completed()
    {
        return view("backend.admin.duties.completed.completed");
    }
    public function Billed()
    {
        return view("backend.admin.duties.billed.billed");
    }
    public function Cancelled()
    {
        return view("backend.admin.duties.cancelled.cancelled");
    }
    public function All()
    {
        return view("backend.admin.duties.all.all");
    }

    // ================
    // upcomingDuties
    public function upcomingDuties()
    {
        return view("backend.admin.duties.upcoming.index");
    }
    // bookedDuties
    public function bookedDuties()
    {
        return view("backend.admin.duties.booked.index");
    }
    // allottedDuties
    public function allottedDuties()
    {
        return view("backend.admin.duties.alloted.index");
    }
    // dispatchedDuties
    public function dispatchedDuties()
    {
        return view("backend.admin.duties.dispatched.index");
    }
    // completedDuties
    public function completedDuties()
    {
        return view("backend.admin.duties.completed.index");
    }
    // billedDuties
    public function billedDuties()
    {
        return view("backend.admin.duties.billed.index");
    }
    // cancelledDuties
    public function cancelledDuties()
    {
        return view("backend.admin.duties.cancelled.index");
    }
    // allDuties
    public function allDuties()
    {
        return view("backend.admin.duties.all.index");
    }
    // incomingDuties
    public function incomingDuties()
    {
        return view("backend.admin.duties.incoming.index");
    }
    // needsattentionDuties
    public function needsattentionDuties()
    {
        return view("backend.admin.duties.attention.index");
    }
}
