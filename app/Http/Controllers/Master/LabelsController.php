<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MstLabel;
use Illuminate\Support\Facades\Validator;

class LabelsController extends Controller
{
    public function index()
    {
        $data = MstLabel::all();
        return view('backend.admin.masters.labels.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ? MstLabel::active()->find($id) : null; // Find the record or default to null
        return view('backend.admin.masters.labels.manage', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'label_name' => 'required|string',
                'label_color' => 'required|string',
            ],
            [
                'label_name.required' => 'Please Select Select Type',
                'label_color.required' => 'Please Select Select Type',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            return redirect(route('labels.manage'))->withInput();
        }
        $bankAccount = MstLabel::create([
            'label_name' => $request->label_name,
            'label_color' => $request->label_color,
            'not_display_in_duties' => $request->not_display_in_duties ?? false,
        ]);
        if ($bankAccount) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('labels.manage'));
        }
    }
    public function edit(Request $request)
    {
        $bankAccount = MstLabel::findOrFail($request->id);

        return view('backend.admin.masters.labels.manage', compact('data'));
    }

    public function update(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'label_name' => 'required|string',
                'label_color' => 'required|string',
            ],
            [
                'label_name.required' => 'Please Fill Label Name',
                'label_color.required' => 'Please Select Label Color',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('labels.manage', $request->id))->withInput();
        }
        $label = MstLabel::where('id', $request->id)->firstOrFail();

        $label->update([
            'label_name' => $request->label_name,
            'label_color' => $request->label_color,
            'not_display_in_duties' => $request->not_display_in_duties ?? false,

        ]);
        if ($label) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            // return redirect(route('bankAccount.manage', $request->id));
            $data = MstLabel::all();
            return view('backend.admin.masters.labels.index', compact('data'));
        }
    }
}
