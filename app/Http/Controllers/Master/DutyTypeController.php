<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDutyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DutyTypeController extends Controller
{
    public function index()
    {
        $data = MstDutyType::all();
        return view('backend.admin.masters.dutytypes.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ?MstDutyType::active()->find($id) : null; // Find the record or default to null
        return view('backend.admin.masters.dutytypes.manage', compact('data'));
    }
    public function store(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'duty_type' => 'required|string',
                'duty_name' => 'required|string',
                'max_hours' => 'nullable|numeric',
                'max_km' => 'nullable|numeric',
                'max_kmper_day' => 'nullable|numeric',
                'max_days' => 'nullable|numeric',
                'max_hours_per_day' => 'nullable|numeric',
                'total_km' => 'nullable|numeric',
                'total_hours' => 'nullable|numeric',
                'city_limit' => 'nullable|array',
                'sub_type' => 'string',
            ],
            [
                'selectType.required' => 'Please Select Select Type',
                'name.required' => 'Please Filled Duty Type Name ',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('dutytype.manage'))->withInput();
        }
        $dutyType = MstDutyType::create([
            'duty_type' => $request->duty_type,
            'duty_name' => $request->duty_name,
            'max_hours' => $request->max_hours,
            'max_km' => $request->max_km,
            'max_kmper_day' => $request->max_kmper_day,
            'max_days' => $request->max_days,
            'max_hours_per_day' => $request->max_hours_per_day,
            'total_km' => $request->total_km,
            'total_hours' => $request->total_hours,
            'city_limit' => $request->city_limit,
            'sub_type' => $request->sub_type,
            'apply_outside_allowance' => $request->apply_outside_allowance ?? false,
            'city_limit' => is_array($request->city_limit) ? implode(',', $request->city_limit) : $request->city_limit,
            'p2p' => $request->p2p ?? false,
            'g2g' => $request->g2g ?? false,
            'g_strkmtim' => $request->g_strkmtim ?? false,
            'g_endkmtim' => $request->g_endkmtim ?? false,
            'disdutroute' => $request->disdutroute ?? false,
        ]);
        if ($dutyType) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('dutytype.manage'));
        }
    }
    public function edit(Request $request)
    {
        $dutyType = MstDutyType::findOrFail($request->id);
        
        return view('backend.admin.masters.dutytypes.manage', compact('data'));
    }

    public function update(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'duty_type' => 'required|string',
                'duty_name' => 'required|string',
                'max_hours' => 'nullable|numeric',
                'max_km' => 'nullable|numeric',
                'max_kmper_day' => 'nullable|numeric',
                'max_days' => 'nullable|numeric',
                'max_hours_per_day' => 'nullable|numeric',
                'total_km' => 'nullable|numeric',
                'total_hours' => 'nullable|numeric',
                'city_limit' => 'nullable|array',
                'sub_type' => 'string',
            ],
            [
                'selectType.required' => 'Please Select Select Type',
                'name.required' => 'Please Filled Duty Type Name ',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('dutytype.manage', $request->id))->withInput();
        }
        $dutyType = MstDutyType::where('id', $request->id)->firstOrFail();

        $dutyType->update([
            'duty_type' => $request->duty_type,
            'duty_name' => $request->duty_name,
            'max_hours' => $request->max_hours,
            'max_km' => $request->max_km,
            'max_kmper_day' => $request->max_kmper_day,
            'max_days' => $request->max_days,
            'max_hours_per_day' => $request->max_hours_per_day,
            'total_km' => $request->total_km,
            'total_hours' => $request->total_hours,
            'city_limit' => is_array($request->city_limit) ? implode(',', $request->city_limit) : $request->city_limit,
            'sub_type' => $request->sub_type,
            'apply_outside_allowance' => $request->apply_outside_allowance ?? false,
            'p2p' => $request->p2p ?? false,
            'g2g' => $request->g2g ?? false,
            'g_strkmtim' => $request->g_strkmtim ?? false,
            'g_endkmtim' => $request->g_endkmtim ?? false,
            'disdutroute' => $request->disdutroute ?? false,
        ]);
        if ($dutyType) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            // return redirect(route('dutytype.manage', $request->id));
            $data = MstDutyType::all();
            return view('backend.admin.masters.dutytypes.index', compact('data'));
        }
    }

    public function delete(Request $request){
        try {
            $dutyType = MstDutyType::findOrFail($request->id);
            $dutyType->delete();

            // return response()->json(['success' => 'Duty Type deleted successfully.']);
            return redirect()->back()->with('success', 'Duty Type deleted successfully.');
            // return redirect()->route('duty-types.index')->with('success', 'Duty type deleted successfully.');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'],  $e);
        }
    }
}
