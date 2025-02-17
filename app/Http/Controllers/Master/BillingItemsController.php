<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstBillingItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BillingItemsController extends Controller
{
    public function index()
    {
        $data = MstBillingItem::all();
        return view('backend.admin.masters.billingitems.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ? MstBillingItem::active()->find($id) : null; // Find the record or default to null
        return view('backend.admin.masters.billingitems.manage', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'short_name' => 'nullable|string',
            ],
            [
                'name.required' => 'Please Fill Name',
            ]
        );
        if ($validator->fails()) {
            dd($validator->errors()->first());
            return redirect(route('billingitems.manage'))->withInput();
        }
        
        $billingItems = MstBillingItem::create([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'taxable' => $request->taxable ?? false,
            'allow_driver_to_add' => $request->allow_driver_to_add ?? false,
            'req_bef_strt_duty' => $request->req_bef_strt_duty ?? false,
            'n_charged_on_customer_invoice' => $request->n_charged_on_customer_invoice ?? false,
            'active' => $request->active ?? false,
        ]);
        // dd($request->all());
        if ($billingItems) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('billingitems.index'));
        }
    }

    public function edit(Request $request)
    {
        $data = MstBillingItem::findOrFail($request->id);
        
        return view('backend.admin.masters.billingitems.manage', compact('data'));
    }
    public function update(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'short_name' => 'nullable|string',
            ],
            [
                'name.required' => 'Please Fill Name',
            ]
        );
        if ($validator->fails()) {
            dd($validator->errors()->first());
            return redirect(route('billingitems.manage', $request->id))->withInput();
        }
        $data = MstBillingItem::where('id', $request->id)->firstOrFail();

        $data->update([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'taxable' => $request->taxable ?? false,
            'allow_driver_to_add' => $request->allow_driver_to_add ?? false,
            'req_bef_strt_duty' => $request->req_bef_strt_duty ?? false,
            'n_charged_on_customer_invoice' => $request->n_charged_on_customer_invoice ?? false,
            'active' => $request->active ?? false,
        ]);
        if ($data) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            // return redirect(route('dutytype.manage', $request->id));
            $data = MstBillingItem::all();
            return view('backend.admin.masters.billingitems.index', compact('data'));
        }
    }
}
