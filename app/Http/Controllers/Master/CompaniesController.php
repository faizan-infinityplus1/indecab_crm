<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function index()
    {
        return view('backend.admin.masters.companies.index');
    }
    public function manage($id = null)
    {
        return view('backend.admin.masters.companies.manage');
    }

    public function showSuppliers()
    {
        return view('backend.admin.masters.suppliers.index');
    }
    public function createSuppliers()
    {
        return view('backend.admin.masters.suppliers.create');
    }
    public function showSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups');
    }
    public function createSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups-create');
    }
}
