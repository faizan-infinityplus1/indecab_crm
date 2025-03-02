<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.vehicles.index');
    }
    public function create()
    {
        return view('backend.admin.masters.vehicles.create');
    }
}
