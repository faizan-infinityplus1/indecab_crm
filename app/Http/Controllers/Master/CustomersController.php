<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MapCustomerApplicableTaxes;
use App\Models\MapCustomerInterstateTaxes;
use App\Models\MstCustomer;
use App\Models\MstCustomerGroup;
use App\Models\MstFeedbackForm;
use App\Models\MstMyCompany;
use App\Models\MstTax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.customers.index');
    }
    public function create()
    {
        $mstCustomer = MstCustomer::active()->get();
        $customerGroup = MstCustomerGroup::active()->get();
        $feedbackForm = MstFeedbackForm::active()->get();
        $myCompany = MstMyCompany::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.customers.create', compact('mstCustomer', 'customerGroup', 'myCompany', 'feedbackForm', 'applicableTaxes'));
    }
    public function store(Request $request)
    {
        // Process Applicable Taxes
        $applicableTaxesData = [];
        for ($i = 1; $request->has("appli_tax$i"); $i++) {
            $taxId = $request->input("appli_tax{$i}");
            $isNotCharged = $request->has("appli_tax_n_ch{$i}") ? 1 : 0;
            // Add to applicable taxes data array
            $applicableTaxesData[] = [
                'admin_id' => Auth::user()->id,
                'tax_id' => $taxId,
                'not_charged' => $isNotCharged,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            // print_r($applicableTaxesData);
        }


        MapCustomerApplicableTaxes::insert($applicableTaxesData);


        // Process Interstate Taxes
        $interstateTaxesData = [];
        for ($i = 1; $request->has("inter_appli_tax$i"); $i++) {
            $taxId = $request->input("inter_appli_tax$i");
            $isNotCharged = $request->has("inter_appli_tax_n_ch{$i}") ? 1 : 0;
            // Add to interstate taxes data array
            $interstateTaxesData[] = [
                'admin_id' => Auth::user()->id,
                'tax_id' => $taxId,
                'not_charged' => $isNotCharged,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        MapCustomerInterstateTaxes::insert($interstateTaxesData);
        dd('i m here');
    }
    public function update(Request $request)
    {
        dd($request);
    }
    public function showCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups');
    }
    public function createCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups-create');
    }
}
