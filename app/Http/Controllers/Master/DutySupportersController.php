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
             $addressData[] = [
                 'admin_id' => Auth::id(),
                 'duty_supporter_id' => $dutySupporterId,
                 'duty_supporter_address_type' => $dutySupporterAddressType,
                 'duty_supporter_address' => $dutySupporterAddress,
                 'created_at' => now(),
                 'updated_at' => now(),
             ];
             // print_r($applicableTaxesData);
         }
         MstDutySupporterAddress::insert($addressData);

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
            notify()->success('Data Added Successfully', 'Success');
            return redirect(route('dutysupporters.index'));
        }
    }

    public function edit(Request $request)
    {
        // MstDutySupporter
        $mstDutySupporter = MstDutySupporter::active()->get();

        $particularMstDutySupporter = MstDutySupporter::active()->where('id', $request->id)->first();
        // MstDutySupporterAddress
        $mstAddressesDutySupporter = MstDutySupporterAddress::active()->with('mstDutySupporter')->where('duty_supporter_id', $request->id)->get();
        // MstDutySupporterFile
        $mstFilesDutySupporter = MstDutySupporterFile::active()->with('mstDutySupporter')->where('duty_supporter_id', $request->id)->get();

        return view('backend.admin.masters.dutysupporters.edit', compact('mstDutySupporter', 'particularMstDutySupporter', 'mstAddressesDutySupporter', 'mstFilesDutySupporter'));
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

            $dutySupporterId = $dutySupporterId->id;

            $addressData = [];
            $filesData = [];


            foreach ($request->keys() as $key) {
                if (preg_match('/^duty_supporter_address_type_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $dutySupporterAddress = $request->input("duty_supporter_address_{$id}_new");
                    $dutySupporterAddressType = $request->input("duty_supporter_address_type_{$id}_new");

                    $addressData[] = [
                        'admin_id' => Auth::id(),
                        'duty_supporter_id' => $dutySupporterId,
                        'duty_supporter_address_type' => $dutySupporterAddressType,
                        'duty_supporter_address' => $dutySupporterAddress,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^duty_supporter_address_type_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $dutySupporterAddress = $request->input("duty_supporter_address_{$id}_update");

                    $dutySupporterAddressType = $request->input("duty_supporter_address_type_{$id}_update");

                    // Update record correctly
                    MstDutySupporterAddress::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'duty_supporter_id' => $dutySupporterId,
                        'duty_supporter_address_type' => $dutySupporterAddressType,
                        'duty_supporter_address' => $dutySupporterAddress,
                        'updated_at' => now(),
                    ]);
                }

                if (preg_match('/^file_name_(\d+)_new$/', $key, $matches)) {
                    // dd('i m here');
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $filePath = null;


                    if ($request->hasFile("image_{$id}_new")) {
                        $file = $request->file("image_{$id}_new");
                        $filePath = $file->store('customer-images', 'public'); // Store in 'storage/app/public/customer-images'
                    }

                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'duty_supporter_id' => $dutySupporterId,
                        'file_name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^file_name_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $existingFile = MstDutySupporterFile::find($id);

                    $filePath = $existingFile->image; // Retain old file if no new file is uploaded

                    if ($request->hasFile("image_{$id}_update")) {
                        $file = $request->file("image_{$id}_update");

                        // Delete old file if exists
                        if ($existingFile->image) {
                            Storage::disk('public')->delete($existingFile->image);
                        }

                        // $filePath = $file->store('storage/images/customer-images', 'public');
                        $filePath = $file->store('customer-images', 'public');
                    }

                    // Update existing file
                    MstDutySupporterFile::where('id', $id)->update([
                        'admin_id' => Auth::user()->id,
                        'duty_supporter_id' => $dutySupporterId,
                        'file_name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'updated_at' => now(),
                    ]);
                }
            }

            if (!empty($addressData)) {
                MstDutySupporterAddress::insert($addressData);
            }
            if (!empty($filesData)) {
                MstDutySupporterFile::insert($filesData);
            }

        } catch (Exception $e) {
            dd($e);
        }
    }

    public function deleteAddress(Request $request)
    {
        // MstDutySupporterAddress::insert($dutySupporterAddressData);
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