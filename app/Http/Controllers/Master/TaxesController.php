<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function showTaxes()
    {
        return view('backend.admin.masters.taxes.index');
    }
    public function createTaxes()
    {
        return view('backend.admin.masters.taxes.create');
    }
}
