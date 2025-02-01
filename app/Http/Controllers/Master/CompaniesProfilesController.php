<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesProfilesController extends Controller
{
    
    public function index()
    {
        return view('backend.admin.masters.companiesprofiles.index');
    }
    public function manage($id = null)
    {
        return view('backend.admin.masters.companiesprofiles.manage');
    }
}
