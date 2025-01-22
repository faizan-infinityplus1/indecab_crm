<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyDriversController extends Controller
{
    public function showDrivers()
    {
        return view('backend.admin.masters.drivers.index');
    }
    public function createDrivers()
    {
        return view('backend.admin.masters.drivers.create');
    }
}
