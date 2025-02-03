<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierPricingController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.pricing.supplierpricing.index');
    }
}
