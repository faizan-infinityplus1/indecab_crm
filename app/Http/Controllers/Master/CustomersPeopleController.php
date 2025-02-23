<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MSTCustomerPeople;
use App\Models\MstLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersPeopleController extends Controller
{
    public function index(Request $request)
    {
        $customerId = $request->customerId;
        // dd($customerId);
        $customerPeople = MSTCustomerPeople::where('customer_id', $customerId)->orderBy('id','DESC')->get();
        // dd($customerPeople);
        return view('backend.admin.masters.customers.people.index', compact('customerPeople', 'customerId'));
    }
    public function manage(Request $request)
    {
        $customerId = $request->customerId;
        $customerPeopleId = $request->customerPeopleId ?? -1;
        $customerPeople = MSTCustomerPeople::where('id', $customerPeopleId)->first();
        $labels = MstLabel::all();
        // dd($customerPeople);
        return view('backend.admin.masters.customers.people.manage', compact('labels', 'customerId', 'customerPeople'));
    }


    public function createOrUpdate(Request $request)
    {
        $customerId = $request->customerId;
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'phone_no' => 'nullable|numeric',
                'alternate_phone_no' => 'nullable|numeric',
                'email' => 'nullable|string',
                'alternate_email' => 'nullable|string',
                'labels' => 'nullable|array',
                'notes' => 'nullable|string',
                'isPassenger' => 'nullable|numeric',
                'isBookedBy' => 'nullable|numeric',
                'isAdditionalContact' => 'nullable|string',
                'isEmergencyContact' => 'nullable|string',
            ],
            [
                'name.required' => 'Please Fill the the name',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('customers.index'))->withInput();
        }
        $customerPeople = MSTCustomerPeople::updateOrCreate(
            [
                'id' => $request->customerPeopleId
            ],
            [
                'name' => $request->name,
                'customer_id' => $customerId,
                'phone_no' => $request->phone_no,
                'alternate_phone_no' => $request->alternate_phone_no,
                'email' => $request->email,
                'alternate_email' => $request->alternate_email,
                'labels' => implode(',', $request->labels ?? []),
                'notes' => $request->notes,
                'isPassenger' => $request->isPassenger ?? false,
                'isBookedBy' => $request->isBookedBy ?? false,
                'isAdditionalContact' => $request->isAdditionalContact ?? false,
                'isEmergencyContact' => $request->isEmergencyContact ?? false,
            ]
        );
        // dd($customerPeople);
        if ($customerPeople) {
            connectify('success', 'People Added', 'People has been added successfully !');
        } else {
            connectify('error', 'People Added', 'People has not been added successfully !');
        }
        return redirect(route('customers.people.index', $customerId));
    }
}
