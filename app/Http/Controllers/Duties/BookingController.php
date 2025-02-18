<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function create(){
        return view("backend.admin.duties.booking.manage");
    }
}
