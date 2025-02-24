<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDutySupporter;
use App\Models\MstDutySupporterAddress;
use App\Models\MstDutySupporterFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DutySupportersController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.dutysupporters.index');
    }
    public function create()
    {
        return view('backend.admin.masters.dutysupporters.create');
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
            return redirect(route('dutysupporters.index'))->withInput();
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
        $dutySupporterId = $dutySupporter->id;

         // Process Applicable Taxes
         $addressData = [];
         for ($i = 1; $request->has("duty_supporter_address_type$i"); $i++) {
             $dutySupporterAddressType = $request->input("duty_supporter_address_type{$i}");
             $dutySupporterAddress = $request->input("duty_supporter_address{$i}");
             // Add to applicable taxes data array
             $dutySupporterAddressData[] = [
                 'admin_id' => Auth::id(),
                 'duty_supporter_id' => $dutySupporterId,
                 'duty_supporter_address_type' => $dutySupporterAddressType,
                 'duty_supporter_address' => $dutySupporterAddress,
                 'created_at' => now(),
                 'updated_at' => now(),
             ];
             // print_r($applicableTaxesData);
         }
         MstDutySupporterAddress::insert($dutySupporterAddressData);

         $filesData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");

                if ($request->hasFile("image$i")) {
                    $file = $request->file("image{$i}");
                    $filePath = $file->store('suppliers/supplier-images', 'public'); // Store in 'storage/app/public/customer-images'

                    // Add file data to array
                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'duty_supporter_id' => $dutySupporterId,
                        'file_name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    // dd($filesData);
                } else {

                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'duty_supporter_id' => $dutySupporterId,
                        'file_name' => $fileName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            MstDutySupporterFile::insert($filesData);

        if ($dutySupporter) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('dutysupporters.index'));
        }
    }

    public function edit(Request $request)
    {
        // MstDutySupporter
        $mstDutySupporter = MstDutySupporter::active()->get();
        // MstDutySupporterAddress
        $mstAddressesDutySupporter = MstDutySupporterAddress::active()->with('mstDutySupporter')->where('duty_supporter_id', $request->id)->get();
        // MstDutySupporterFile
        $mstFilesDutySupporter = MstDutySupporterFile::active()->with('mstDutySupporter')->where('duty_supporter_id', $request->id)->get();

        return view('backend.admin.masters.dutysupporters.edit', compact('mstDutySupporter', 'mstAddressesDutySupporter', 'mstFilesDutySupporter'));
    }
    public function update(Request $request)
    {
        try{
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
                return redirect(route('dutysupporters.index'))->withInput();
            }
            
            $dutySupporterId = MstDutySupporter::where('id', $request->id)->firstOrFail();

            $dutySupporterId->update(
                [
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
                ]
            );

        } catch (Exception $e) {
            dd($e);
        }
    }

    public function deleteAddress(Request $request)
    {
        MstDutySupporterAddress::insert($dutySupporterAddressData);
        try {
            // Find the record by ID and delete it
            $deleteAddresses = MstDutySupporterAddress::findOrFail($request->id);
            $deleteAddresses->delete();

            return response()->json(['success' => 'Duty Supporters Addresses deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete addresses.'],  $e);
        }
    }
    public function deleteFiles(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $deleteFiles = MstDutySupporterFile::findOrFail($request->id);
            $deleteFiles->delete();

            return response()->json(['success' => 'Duty Supporters File deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete file.'],  $e);
        }
    }
}