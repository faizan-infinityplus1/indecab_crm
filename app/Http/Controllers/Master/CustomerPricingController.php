<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDutyType;
use Illuminate\Http\Request;

class CustomerPricingController extends Controller
{
    public function index()
    {
        $mstDutyType = MstDutyType::active()->get();
        return view('backend.admin.masters.pricing.customerpricing.index', compact('mstDutyType'));
    }
}
