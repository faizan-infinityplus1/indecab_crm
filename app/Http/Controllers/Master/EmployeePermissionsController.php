<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeePermissionsController extends Controller
{
    //
    public function index()
    {
        return view('backend.admin.masters.employees.permissions.index');
    }

    public function create($id = null)
    {
        return view('backend.admin.masters.employees.permissions.create');
    }
}
