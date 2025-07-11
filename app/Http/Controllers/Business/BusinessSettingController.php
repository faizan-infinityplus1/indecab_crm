<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\MstCustomer;
use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    //
    public function index()
    {
        $customers = MstCustomer::where('is_active', true)->with('people')->get();
        return view('backend.businessSetting.index', compact('customers'));
    }
}
