<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function allotted(){
        return view("backend.admin.duties.incoming.incoming");
    }
    public function Attention(){
        return view("backend.admin.duties.attention.needAttention");
    }
    public function Upcoming(){
        return view("backend.admin.duties.upcoming.upcoming");
    }
    public function Booked(){
        return view("backend.admin.duties.booked.booked");
    }
    public function DutyAlloted(){
        return view("backend.admin.duties.alloted.alloted");
    }
    public function Dispatched(){
        return view("backend.admin.duties.dispatched.dispatched");
    }
    public function Completed(){
        return view("backend.admin.duties.completed.completed");
    }
    public function Billed(){
        return view("backend.admin.duties.billed.billed");
    }
    public function Cancelled(){
        return view("backend.admin.duties.cancelled.cancelled");
    }
    public function All(){
        return view("backend.admin.duties.all.all");
    }
}
