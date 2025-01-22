<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function showCustomers()
    {
        return view('backend.admin.masters.customers.index');
    }
    public function createCustomers()
    {
        return view('backend.admin.masters.customers.create');
    }
    public function showCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups');
    }
    public function createCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups-create');
    }

}
