<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MSTCustomerPeople;
use App\Models\MstCustomerPeopleAddress;
use App\Models\MstLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersPeopleController extends Controller
{
    public function index(Request $request)
    {
        $customerId = $request->customerId;
        // dd($customerId);
        $customerPeople = MSTCustomerPeople::where('customer_id', $customerId)->orderBy('id', 'DESC')->get();
        // dd($customerPeople);
        return view('backend.admin.masters.customers.people.index', compact('customerPeople', 'customerId'));
    }
    public function manage(Request $request)
    {
        $customerId = $request->customerId;
        $customerPeopleId = $request->customerPeopleId ?? -1;
        $customerPeople = MSTCustomerPeople::where('id', $customerPeopleId)->with('addresses')->first();
        // $collection ? $collection : []
        // dd($customerPeople);
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
                'addresses' => 'nullable|array',
                'addresses.*.id' => 'nullable|integer|exists:mst_customer_people_addresses,id',
                'addresses.*.name' => 'required|string',
                'addresses.*.full_address' => 'required|string',
            ],
            [
                'name.required' => 'Please Fill the the name',
            ]
        );
        if ($validator->fails()) {
            // dd($validator->errors()->first());
            connectify('error', 'Add Product', $validator->errors()->first());
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

        // Get existing address IDs from database
        $existingAddressIds = $customerPeople->addresses()->pluck('id')->toArray();

        // Get submitted address IDs
        $submittedAddressIds = collect($request->addresses)->pluck('id')->filter()->toArray();

        // Identify addresses to delete (addresses in DB but not in submitted form)
        $addressesToDelete = array_diff($existingAddressIds, $submittedAddressIds);
        MstCustomerPeopleAddress::whereIn('id', $addressesToDelete)->delete();

        // Loop through addresses from the request
        if(isset($request->addresses)){
        foreach ($request->addresses as $addressData) {
            if (isset($addressData['id'])) {
                // Update existing address
                MstCustomerPeopleAddress::where('id', $addressData['id'])->update($addressData);
            } else {
                // Add new address
                $customerPeople->addresses()->create($addressData);
            }
        }
    }

        // dd($customerPeople);
        if ($customerPeople) {
            connectify('success', 'People Added', 'People has been added successfully !');
        } else {
            connectify('error', 'People Added', 'People has not been added successfully !');
        }
        return redirect(route('customers.people.index', $customerId));
    }
}
