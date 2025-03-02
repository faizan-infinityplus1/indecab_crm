<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstVehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.vehicles.index');
    }
    public function manage()
    {
        $vehicleId = $request->customerPeopleId ?? -1;
        // ->with('addresses')
        $mstVehicle = MstVehicle::active()->where('id', $vehicleId)->first();
        return view('backend.admin.masters.vehicles.manage',compact('mstVehicle'));
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


}
