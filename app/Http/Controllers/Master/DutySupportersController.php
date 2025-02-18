<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDutySupporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DutySupportersController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.dutysupporters.index');
    }
    public function manage($id = null)
    {
        return view('backend.admin.masters.dutysupporters.manage');
    }

    public function store(Request $request)
    {
        // dd('i m here',$request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'type' => 'required|string',
                'phone_no' => 'nullable|string',
                'alt_phone_no' => 'nullable|string',
                'pan_no' => 'nullable|string',
                'aadhar_card' => 'nullable|string',
                'birth_date' => 'nullable|date',
                'joining_date' => 'nullable|date',
                'branches' => 'nullable|string',
                'ref_details' => 'nullable|string',
            ],
            [
                'name.required' => 'Please Fill Duty Supporter Name ',
                'type.required' => 'Please Select Duty Supporter Type',
            ]
        );
        if ($validator->fails()) {
            dd($validator->errors()->first());
            return redirect(route('dutysupporters.manage'))->withInput();
        }
        $dutySupporter = MstDutySupporter::create([
            'name' => $request->name,
            'type' => $request->type,
            'phone_no' => $request->phone_no,
            'alt_phone_no' => $request->alt_phone_no,
            'pan_no' => $request->pan_no,
            'aadhar_card' => $request->aadhar_card,
            'birth_date' => $request->birth_date,
            'joining_date' => $request->joining_date,
            'branches' => $request->branches,
            'ref_details' => $request->ref_details,
            'active' => $request->active ?? false,
        ]);
        if ($dutySupporter) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('dutysupporters.index'));
        }
    }
}
