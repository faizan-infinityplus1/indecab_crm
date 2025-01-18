<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesVehicleGroupsController extends Controller
{
    public function showVehicleGroups()
    {
        return view('backend.admin.masters.vehiclegroups.index');
    }
    public function createVehicleGroups()
    {
        return view('backend.admin.masters.vehiclegroups.create');
    }
}
