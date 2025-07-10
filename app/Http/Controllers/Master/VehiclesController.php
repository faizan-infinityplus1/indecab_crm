<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstMyDriver;
use App\Models\MstVehicle;
use Illuminate\Http\Request;
use App\Models\MstCatVehGroup;
use Illuminate\Support\Facades\Validator;

class VehiclesController extends Controller
{
    public function index()
    {
        $mstvehicles = MstVehicle::active()->get();
        $vehicleGroup = MstCatVehGroup::get();
        // dd($mstvehicles);

        return view('backend.admin.masters.vehicles.index', compact('mstvehicles'));
    }
    public function manage(Request $request)
    {
        $vehicleId = $request->customerPeopleId ?? -1;
        $vehicleGroup = MstCatVehGroup::get();
        $driver = MstMyDriver::active()->get();
        // ->with('addresses')
        $mstVehicle = MstVehicle::active()->where('id', $vehicleId)->first();
        return view('backend.admin.masters.vehicles.manage', compact('mstVehicle', 'vehicleId', 'vehicleGroup', 'driver'));
    }
    // public function manage(Request $request)
    // {
    //     // $customerId = $request->customerId;
    //     // $customerPeopleId = $request->customerPeopleId ?? -1;
    //     // $customerPeople = MSTCustomerPeople::where('id', $customerPeopleId)->with('addresses')->first();
    //     // $collection ? $collection : []
    //     // dd($customerPeople);
    //     // $labels = MstLabel::all();
    //     // dd($customerPeople);
    //     return view('backend.admin.masters.customers.people.manage', compact('labels', 'customerId', 'customerPeople'));
    // }
    public function createOrUpdate(Request $request)
    {
        dd($request->all());
        $vehicleId = $request->vehicleId;
        $validator = Validator::make(
            $request->all(),
            [
                'model_name' => 'required|string',
                'vehicle_no' => 'required|string',
                'image' => 'nullable|string',
                'seat_capacity' => 'required|numeric',
                'fuel_type' => 'required|string',
                'vehicle_group_id' => 'required|integer',
                'color' => 'nullable|string',
                'driver_id' => 'nullable|integer',
                'vehicle_code' => 'nullable|string',
                'branches' => 'nullable|string',
                'loan_emi_amt' => 'nullable|numeric',
                'loan_srt_date' => 'nullable|date',
                'loan_end_date' => 'nullable|date',
                'bank_name' => 'nullable|string',
                'emi_day' => 'nullable|integer',
                'reg_owner_name' => 'nullable|string',
                'reg_data' => 'nullable|date',
                'parts_chasis_no' => 'nullable|string',
                'parts_engine_no' => 'nullable|string',
                'insaurance_company_name' => 'nullable|string',
                'insaurance_policy_no' => 'nullable|string',
                'insaurance_issue_date' => 'nullable|date',
                'insaurance_due_date' => 'nullable|date',
                'insaurance_prem_amt' => 'nullable|numeric',
                'insaurance_cover_amt' => 'nullable|numeric',
                'rto_address' => 'nullable|string',
                'rto_tax_efficiency' => 'nullable|integer',
                'rto_exp_date' => 'nullable|date',
                'fitness_no' => 'nullable|string',
                'fitness_expiry_date' => 'nullable|date',
                'auth_no' => 'nullable|string',
                'auth_expiry_date' => 'nullable|date',
                'speed_details' => 'nullable|string',
                'speed_expiry_date' => 'nullable|date',
                'puc_no' => 'nullable|string',
                'puc_expiry_date' => 'nullable|date',
                'unavail_for_duty' => 'nullable|boolean',
                'active' => 'nullable|boolean',
            ],
            [
                'model_name.required' => 'Please fill the Model Name',
                'vehicle_no.required' => 'Please fill the Vehicle Number',
                'seat_capacity.required' => 'Please fill the Seating Capacity',
                'fuel_type.required' => 'Please fill the Fuel Type',
                'vehicle_group_id.required' => 'Please fill the Vehicle Group',
            ]
        );
        if ($validator->fails()) {
            notify()->error($validator->errors()->first(), 'Error');
            return redirect(route('vehicles.manage'))->withInput();
        }

        $mstVehicle = MstVehicle::updateOrCreate(
            [
                'id' => $vehicleId
            ],
            [
                'model_name' => $request->model_name,
                'vehicle_no' => $request->vehicle_no,
                'image' => $request->image,
                'seat_capacity' => $request->seat_capacity,
                'fuel_type' => $request->fuel_type,
                'vehicle_group_id' => $request->vehicle_group_id,
                'color' => $request->color,
                'driver_id' => $request->driver_id,
                'vehicle_code' => $request->vehicle_code,
                'branches' => $request->branches,
                'loan_emi_amt' => $request->loan_emi_amt,
                'loan_srt_date' => $request->loan_srt_date,
                'loan_end_date' => $request->loan_end_date,
                'bank_name' => $request->bank_name,
                'emi_day' => $request->emi_day,
                'reg_owner_name' => $request->reg_owner_name,
                'reg_data' => $request->reg_data,
                'parts_chasis_no' => $request->parts_chasis_no,
                'parts_engine_no' => $request->parts_engine_no,
                'insaurance_company_name' => $request->insaurance_company_name,
                'insaurance_policy_no' => $request->insaurance_policy_no,
                'insaurance_issue_date' => $request->insaurance_issue_date,
                'insaurance_due_date' => $request->insaurance_due_date,
                'insaurance_prem_amt' => $request->insaurance_prem_amt,
                'insaurance_cover_amt' => $request->insaurance_cover_amt,
                'rto_address' => $request->rto_address,
                'rto_tax_efficiency' => $request->rto_tax_efficiency,
                'rto_exp_date' => $request->rto_exp_date,
                'fitness_no' => $request->fitness_no,
                'fitness_expiry_date' => $request->fitness_expiry_date,
                'auth_no' => $request->auth_no,
                'auth_expiry_date' => $request->auth_expiry_date,
                'speed_details' => $request->speed_details,
                'speed_expiry_date' => $request->speed_expiry_date,
                'puc_no' => $request->puc_no,
                'puc_expiry_date' => $request->puc_expiry_date,
                'unavail_for_duty' => $request->unavail_for_duty ?? false,
                'active' => $request->active ?? true,
            ]
        );
        if ($mstVehicle) {
            connectify('success', 'Vehicle Added', 'Vehicle has been added successfully!');
        } else {
            dd($mstVehicle);
            connectify('error', 'Vehicle Not Added', 'Vehicle has not been added successfully!');
        }
        return redirect(route('vehicles.manage', $mstVehicle));
    }

}
