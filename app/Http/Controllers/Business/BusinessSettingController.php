<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    //
    public function index()
    {
        return view('backend.businessSetting.index');
    }
}
