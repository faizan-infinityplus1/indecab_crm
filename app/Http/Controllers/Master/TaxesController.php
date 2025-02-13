<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstTax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaxesController extends Controller
{
    public function index()
    {
        $data = MstTax::all();
        return view('backend.admin.masters.taxes.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ? MstTax::active()->find($id) : null; // Find the record or default to null
        return view('backend.admin.masters.taxes.manage', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'percentage' => 'required|numeric', 
            ],
            [
                'name.required' => 'Please Filled Vehicles Groups Name ',
                'percentage.required' => 'Please Filled Percentage'
            ]
        );
        if ($validator->fails()) {
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('taxes.manage'))->withInput();
        }

        $tax = MstTax::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
            'active' => $request->active ?? false,

        ]);
        if ($tax) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('taxes.manage'));
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'percentage' => 'required|numeric', 
            ],
            [
                'name.required' => 'Please Filled Vehicles Groups Name ',
                'percentage.required' => 'Please Filled Percentage'
            ]
        );
        if ($validator->fails()) {
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('taxes.manage', $request->id))->withInput();
        }

        $tax = MstTax::where('id', $request->id)->firstOrFail();

        $tax->update([
            'name' => $request->name,
            'percentage' => $request->percentage,
            'active' => $request->active ?? false,
        ]);
        if ($tax) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('taxes.manage', $request->id));
        }
    }
}
