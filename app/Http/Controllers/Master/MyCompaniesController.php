<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MstMyCompany;
use App\Models\MstMyCompanyProfile;
use App\Models\MstSupplier;

class MyCompaniesController extends Controller
{
    public function index()
    {
        $mstMyCompany = MstMyCompany::all();
        return view('backend.admin.masters.companies.index', compact('mstMyCompany'));
    }
    public function manage($id = null)
    {
        $mstMyCompany = $id ? MstMyCompany::active()->find($id) : null;
        $mstSupplier = MstSupplier::active()->where('is_active', true)->get();
        $mstCompanyProfile = MstMyCompanyProfile::active()->get();
        return view('backend.admin.masters.companies.manage', compact('mstMyCompany', 'mstSupplier', 'mstCompanyProfile'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'code' => 'required|string',
                    'supplier_id' => 'nullable|numeric',
                    'company_profile_id' => 'nullable|numeric',
                    'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'digital_sign' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'business_type' => 'nullable|string',
                    'phone_no' => 'nullable|numeric',
                    'address' => 'nullable|string',
                    'alternate_phone_no' => 'nullable|numeric',
                    'email' => 'nullable|string',
                    'city' => 'nullable|string',
                    'state' => 'nullable|string',
                    'vat' => 'nullable|string',
                    'pincode' => 'nullable|numeric',
                    'service_tax_no' => 'nullable|string',
                    'cst_tin_no' => 'nullable|string',
                    'cin_no' => 'nullable|string',
                    'pan_no' => 'nullable|string',
                    'sac_hsn_code' => 'nullable|string',
                    'gst_no' => 'nullable|string',
                    'default_profile' => 'nullable|string',
                    'term_condition' => 'nullable|string',

                ],
                [
                    'selectType.required' => 'Please Select Select Type',
                    'name.required' => 'Please Filled Duty Type Name ',
                ]
            );
            if ($validator->fails()) {
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('companies.index'));
            }
            $logoFilePath = null;
            $digitalFilePath = null;
            if ($request->hasFile("logo")) {
                $file = $request->file("logo");
                $logoFilePath = $file->store('my-companies/logo', 'public');
            }
            if ($request->hasFile("digital_sign")) {
                $file = $request->file("digital_sign");
                $digitalFilePath = $file->store('my-companies/digital-signature', 'public');
            }
            $dutyType = MstMyCompany::create([
                'name' => $request->name,
                'code' => $request->code,
                'supplier_id' => $request->supplier_id,
                'company_profile_id' => $request->company_profile_id,
                'logo' => $logoFilePath,
                'digital_sign' => $digitalFilePath,
                'business_type' => $request->business_type,
                'phone_no' => $request->phone_no,
                'address' => $request->address,
                'alternate_phone_no' => $request->alternate_phone_no,
                'email' => $request->email,
                'city' => $request->city,
                'state' => $request->state,
                'vat' => $request->vat,
                'pincode' => $request->pincode,
                'service_tax_no' => $request->service_tax_no,
                'cst_tin_no' => $request->cst_tin_no,
                'cin_no' => $request->cin_no,
                'pan_no' => $request->pan_no,
                'sac_hsn_code' => $request->sac_hsn_code,
                'gst_no' => $request->gst_no,
                'term_condition' => $request->term_condition,
                'is_active' => $request->is_active ?? false,
                'is_inv_company' => $request->is_inv_company ?? false,
            ]);
            if ($dutyType) {

                notify()->success('Data Added Successfully', 'Success');
                return redirect(route('companies.index'));

            }
        } catch (Exception $e) {
            dd($e);
            notify()->error('Whoops!! Something Went Wrong', 'Error');
            return redirect(route('companies.index'));
        }
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
}
