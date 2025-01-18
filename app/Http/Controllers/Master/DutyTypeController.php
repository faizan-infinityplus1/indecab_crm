<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DutyTypeController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.dutytypes.index');
    }
    public function show()
    {
        return view('backend.admin.masters.dutytypes.show');
    }
 
}
