<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.customers.index');
    }
    public function create()
    {
        return view('backend.admin.masters.customers.create');
    }
    public function store(Request $request) {
        dd($request);

    }
    public function update(Request $request)
    {
        dd($request);
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
