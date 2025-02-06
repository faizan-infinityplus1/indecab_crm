<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersPeopleController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.customers.people.index');
    }
    public function manage()
    {
        return view('backend.admin.masters.customers.people.manage');
    }
}
