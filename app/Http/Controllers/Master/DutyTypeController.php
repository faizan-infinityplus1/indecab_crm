<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DutyTypeController extends Controller
{
    public function showDutyTypes()
    {
        return view('backend.admin.masters.dutytypes.index');
    }
    public function createDutyTypes()
    {
        return view('backend.admin.masters.dutytypes.create');
    }
}
