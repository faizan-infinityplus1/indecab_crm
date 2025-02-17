<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function showVehicles()
    {
        return view('backend.admin.masters.vehicles.index');
    }
    public function createVehicles()
    {
        return view('backend.admin.masters.vehicles.create');
    }
}
