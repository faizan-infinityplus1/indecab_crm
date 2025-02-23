<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDriverAddress;
use App\Models\MstDriverDeduction;
use App\Models\MstDriverFile;
use App\Models\MstMyDriver;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MyDriversController extends Controller
{
    public function index()
    {
        $mstMyDriver = MstMyDriver::active()->orderBy('id', 'DESC')->get();

        return view('backend.admin.masters.drivers.index', compact('mstMyDriver'));
    }
    public function create()
    {
        return view('backend.admin.masters.drivers.create');
    }
    public function store(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'mobile_no' => 'required|numeric',
                    'alternate_mobile_no' => 'nullable|numeric',
                    'pan_no' => 'nullable|string',
                    'aadhar_no' => 'nullable|string',
                    'birth_date' => 'nullable|date',
                    'joining_date' => 'nullable|date',
                    'salary_per_month' => 'nullable|numeric',
                    'daily_wages' => 'nullable|string',
                    'branches' => 'nullable|string',
                    'daily_working_hours' => 'nullable|string',
                    'working_hours_start' => 'nullable|string',
                    'working_hours_end' => 'nullable|string',
                    'daily_allowance' => 'nullable|numeric',
                    'allowance_over_time' => 'nullable|numeric',
                    'allowance_outstation_per_day' => 'nullable|numeric',
                    'allowance_outstation_overnight' => 'nullable|string',
                    'sunday_allowance' => 'nullable|numeric',
                    'early_start_allowance' => 'nullable|numeric',
                    'night_allowance' => 'nullable|numeric',
                    'extra_duty_second' => 'nullable|numeric',
                    'extra_duty_third' => 'nullable|numeric',
                    'extra_duty_fourth' => 'nullable|numeric',
                    'extra_duty_fifth' => 'nullable|numeric',
                    'license_no' => 'nullable|string',
                    'license_valid_upto' => 'nullable|date',
                    'police_card_number' => 'nullable|string',
                    'police_card_expiry_date' => 'nullable|date',
                    'police_veri_no' => 'nullable|string',
                    'police_veri_expiry_date' => 'nullable|date',
                    'badge_number' => 'nullable|string',
                    'badge_expiry_date' => 'nullable|date',
                    'additional_info' => 'nullable|string',
                    'driver_code' => 'nullable|string',
                    'is_contract' => 'nullable',
                    'is_covid_vacinated' => 'nullable',
                    'is_active' => 'nullable',

                    // is_contract
                    // is_covid_vacinated
                    // is_active

                ],
                [
                    'name.required' => 'Please Filled Name ',
                    'mobile_no.required' => 'Please Filled Mobile Number ',
                ]
            );
            if ($validator->fails()) {
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('mydrivers.index'));
            }
            $filePath = '';
            if ($request->hasFile("image")) {
                $file = $request->file("image");
                $filePath = $file->store('mydriver-images', 'public');
            }
            $myDriver = MstMyDriver::create([
                'name' => $request->name,
                'image' => $filePath,
                'mobile_no' => $request->mobile_no,
                'alternate_mobile_no' => $request->alternate_mobile_no,
                'pan_no' => $request->pan_no,
                'aadhar_no' => $request->aadhar_no,
                'birth_date' => $request->birth_date,
                'joining_date' => $request->joining_date,
                'salary_per_month' => $request->salary_per_month,
                'daily_wages' => $request->daily_wages,
                'branches' => $request->branches,
                'daily_working_hours' => $request->daily_working_hours,
                'working_hours_start' => $request->working_hours_start,
                'working_hours_end' => $request->working_hours_end,
                'daily_allowance' => $request->daily_allowance,
                'allowance_over_time' => $request->allowance_over_time,
                'allowance_outstation_per_day' => $request->allowance_outstation_per_day,
                'allowance_outstation_overnight' => $request->allowance_outstation_overnight,
                'sunday_allowance' => $request->sunday_allowance,
                'early_start_allowance' => $request->early_start_allowance,
                'night_allowance' => $request->night_allowance,
                'extra_duty_second' => $request->extra_duty_second,
                'extra_duty_third' => $request->extra_duty_third,
                'extra_duty_fourth' => $request->extra_duty_fourth,
                'extra_duty_fifth' =>  $request->extra_duty_fifth,
                'license_no' => $request->license_no,
                'license_valid_upto' => $request->license_valid_upto,
                'police_card_number' => $request->license_no,
                'police_card_expiry_date' => $request->police_card_expiry_date,
                'police_veri_no' => $request->police_veri_no,
                'police_veri_expiry_date' => $request->police_veri_expiry_date,
                'badge_number' => $request->badge_number,
                'badge_expiry_date' => $request->badge_expiry_date,
                'additional_info' => $request->additional_info,
                'driver_code' => $request->driver_code,
                'is_contract' => $request->is_contract ?? false,
                'is_covid_vacinated' => $request->is_covid_vacinated ?? false,
                'is_active' => $request->is_active ?? false,

            ]);

            $driverId = $myDriver->id;


            // // Process Driver Address Data
            $driverAddressData = [];
            for ($i = 1; $request->has("address_file_name$i"); $i++) {
                $addressFileName = $request->input("address_file_name{$i}");
                $addressType = $request->input("address_type{$i}");
                $address = $request->input("address{$i}");
                // Add to applicable taxes data array
                $driverAddressData[] = [
                    'admin_id' => Auth::id(),
                    'driver_id' => $driverId,
                    'address_file_name' => $addressFileName,
                    'address_type' => $addressType,
                    'address' => $address,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstDriverAddress::insert($driverAddressData);


            // // Process Driver Deduction Data
            $driverDeductionData = [];
            for ($i = 1; $request->has("deduction_name$i"); $i++) {
                $deductionName = $request->input("deduction_name$i");
                $deductionAmount = $request->input("deduction_amount{$i}");
                // Add to interstate taxes data array
                $driverDeductionData[] = [
                    'admin_id' => Auth::id(),
                    'driver_id' => $driverId,
                    'deduction_name' => $deductionName,
                    'deduction_amount' => $deductionAmount,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstDriverDeduction::insert($driverDeductionData);


            // Driver File Data
            $driverFileData = [];
            for ($i = 1; $request->has("driver_file_name$i"); $i++) {
                $driverFileName = $request->input("driver_file_name$i");
                if ($request->hasFile("driver_file$i")) {
                    $file = $request->file("driver_file{$i}");
                    $filePath = $file->store('my-driver-images', 'public'); // Store in 'storage/app/public/customer-images'

                    // Add file data to array
                    $driverFileData[] = [
                        'admin_id' => Auth::user()->id,
                        'driver_id' => $driverId,
                        'driver_file_name' => $driverFileName,
                        'driver_file' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } 
            }

            MstDriverFile::insert($driverFileData);

            notify()->success('Data Added Successfully', 'Success');


            return redirect(route('mydrivers.index'));
        } catch (Exception $e) {
            dd($e);
            notify()->error('Whoops!! Something Went Wrong', 'Success');


            return redirect(route('mydrivers.index'));
        }
    }
    public function edit(Request $request)
    {
        $particularMstDriver = MstMyDriver::active()->where('id', $request->id)->first();
        $mstDriverAddress = MstDriverAddress::active()->with('mstDriver')->where('driver_id', $request->id)->get();

        return view('backend.admin.masters.drivers.edit',compact('particularMstDriver','mstDriverAddress'));
    }

    public function update(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'mobile_no' => 'required|numeric',
                    'alternate_mobile_no' => 'nullable|numeric',
                    'pan_no' => 'nullable|string',
                    'aadhar_no' => 'nullable|string',
                    'birth_date' => 'nullable|date',
                    'joining_date' => 'nullable|date',
                    'salary_per_month' => 'nullable|numeric',
                    'daily_wages' => 'nullable|string',
                    'branches' => 'nullable|string',
                    'daily_working_hours' => 'nullable|string',
                    'working_hours_start' => 'nullable|string',
                    'working_hours_end' => 'nullable|string',
                    'daily_allowance' => 'nullable|numeric',
                    'allowance_over_time' => 'nullable|numeric',
                    'allowance_outstation_per_day' => 'nullable|numeric',
                    'allowance_outstation_overnight' => 'nullable|string',
                    'sunday_allowance' => 'nullable|numeric',
                    'early_start_allowance' => 'nullable|numeric',
                    'night_allowance' => 'nullable|numeric',
                    'extra_duty_second' => 'nullable|numeric',
                    'extra_duty_third' => 'nullable|numeric',
                    'extra_duty_fourth' => 'nullable|numeric',
                    'extra_duty_fifth' => 'nullable|numeric',
                    'license_no' => 'nullable|string',
                    'license_valid_upto' => 'nullable|date',
                    'police_card_number' => 'nullable|string',
                    'police_card_expiry_date' => 'nullable|date',
                    'police_veri_no' => 'nullable|string',
                    'police_veri_expiry_date' => 'nullable|date',
                    'badge_number' => 'nullable|string',
                    'badge_expiry_date' => 'nullable|date',
                    'additional_info' => 'nullable|string',
                    'driver_code' => 'nullable|string',
                    'is_contract' => 'nullable',
                    'is_covid_vacinated' => 'nullable',
                    'is_active' => 'nullable',

                    // is_contract
                    // is_covid_vacinated
                    // is_active

                ],
                [
                    'name.required' => 'Please Filled Name ',
                    'mobile_no.required' => 'Please Filled Mobile Number ',
                ]
            );
            if ($validator->fails()) {
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('mydrivers.index'));
            }
            $filePath = '';
            if ($request->hasFile("image")) {
                $file = $request->file("image");
                $filePath = $file->store('mydriver-images', 'public');
            }
            $driverId = MstMyDriver::where('id', $request->id)->firstOrFail();
          
            
            $driverId->update([
                'name' => $request->name,
                'image' => $filePath,
                'mobile_no' => $request->mobile_no,
                'alternate_mobile_no' => $request->alternate_mobile_no,
                'pan_no' => $request->pan_no,
                'aadhar_no' => $request->aadhar_no,
                'birth_date' => $request->birth_date,
                'joining_date' => $request->joining_date,
                'salary_per_month' => $request->salary_per_month,
                'daily_wages' => $request->daily_wages,
                'branches' => $request->branches,
                'daily_working_hours' => $request->daily_working_hours,
                'working_hours_start' => $request->working_hours_start,
                'working_hours_end' => $request->working_hours_end,
                'daily_allowance' => $request->daily_allowance,
                'allowance_over_time' => $request->allowance_over_time,
                'allowance_outstation_per_day' => $request->allowance_outstation_per_day,
                'allowance_outstation_overnight' => $request->allowance_outstation_overnight,
                'sunday_allowance' => $request->sunday_allowance,
                'early_start_allowance' => $request->early_start_allowance,
                'night_allowance' => $request->night_allowance,
                'extra_duty_second' => $request->extra_duty_second,
                'extra_duty_third' => $request->extra_duty_third,
                'extra_duty_fourth' => $request->extra_duty_fourth,
                'extra_duty_fifth' =>  $request->extra_duty_fifth,
                'license_no' => $request->license_no,
                'license_valid_upto' => $request->license_valid_upto,
                'police_card_number' => $request->license_no,
                'police_card_expiry_date' => $request->police_card_expiry_date,
                'police_veri_no' => $request->police_veri_no,
                'police_veri_expiry_date' => $request->police_veri_expiry_date,
                'badge_number' => $request->badge_number,
                'badge_expiry_date' => $request->badge_expiry_date,
                'additional_info' => $request->additional_info,
                'driver_code' => $request->driver_code,
                'is_contract' => $request->is_contract ?? false,
                'is_covid_vacinated' => $request->is_covid_vacinated ?? false,
                'is_active' => $request->is_active ?? false,
            ]);
            $myDriverId = $driverId->id;
           

            $driverAddressData = [];
            $interstateTaxesData = [];
            $driverSettingsData = [];
            $bankAccountData = [];
            $filesData = [];



            foreach ($request->keys() as $key) {
                // Handle applicable taxes
                if (preg_match('/^address_file_name_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $addressFileName = $request->get($key);
                    $addressType = $request->get("address_type_{$id}_new");
                    $address = $request->get("address_{$id}_new");

                    $driverAddressData[] = [
                        'admin_id' => Auth::id(),
                        'driver_id' => $myDriverId,
                        'address_file_name' => $addressFileName,
                        'address_type' => $addressType,
                        'address' => $address,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^address_file_name_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $addressFileName = $request->get($key);
                    $addressType = $request->get("address_type_{$id}_update");
                    $address = $request->get("address_{$id}_update");

                    // Update record correctly
                    MstDriverAddress::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'driver_id' => $myDriverId,
                        'address_file_name' => $addressFileName,
                        'address_type' => $addressType,
                        'address' => $address,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                // Handle interstate taxes (Ensure it does not modify applicable taxes)
                // if (preg_match('/^interapplitax_(\d+)_new$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $taxId = $request->get($key);
                //     $isNotCharged = $request->has("interapplitaxnch_{$id}_new");

                //     $interstateTaxesData[] = [
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'tax_id' => $taxId,
                //         'not_charged' => $isNotCharged,
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ];
                // } elseif (preg_match('/^interapplitax_(\d+)_update$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $taxId = $request->get($key);
                //     $isNotCharged = $request->has("interapplitaxnch_{$id}_update");

                //     // Update record correctly
                //     MstSupplierInterstateTax::where('id', $id)->update([
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'tax_id' => $taxId,
                //         'not_charged' => $isNotCharged,
                //         'updated_at' => now(),
                //     ]);
                // }


                // // Handle Driver Allow Settings
                // if (preg_match('/^driallowsetcity_(\d+)_new$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $city = $request->get($key);
                //     $earlyTime = $request->get("driallowsetearlytime_{$id}_new");
                //     $lateTime = $request->get("driallowsetlatetime_{$id}_new");
                //     $overnightTime = $request->get("driallowsetoutstovernigtime_{$id}_new");

                //     $driverSettingsData[] = [
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'city_name' => $city,
                //         'early_time' => $earlyTime,
                //         'late_time' => $lateTime,
                //         'outsta_overnig_time' => $overnightTime,
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ];
                // } elseif (preg_match('/^driallowsetcity_(\d+)_update$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $city = $request->get($key);
                //     $earlyTime = $request->get("driallowsetearlytime_{$id}_update");
                //     $lateTime = $request->get("driallowsetlatetime_{$id}_update");
                //     $overnightTime = $request->get("driallowsetoutstovernigtime_{$id}_update");

                //     // Update record correctly
                //     MstSupplierDriverAllowanceSetting::where('id', $id)->update([
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'city_name' => $city,
                //         'early_time' => $earlyTime,
                //         'late_time' => $lateTime,
                //         'outsta_overnig_time' => $overnightTime,
                //         'updated_at' => now(),
                //     ]);
                // }

                // if (preg_match('/^filename_(\d+)_new$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $fileName = $request->get($key);
                //     $filePath = null;


                //     if ($request->hasFile("image_{$id}_new")) {
                //         $file = $request->file("image_{$id}_new");
                //         $filePath = $file->store('suppliers/supplier-images', 'public'); // Store in 'storage/app/public/customer-images'
                //     }

                //     $filesData[] = [
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'name' => $fileName,
                //         'image' => $filePath,
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ];
                // } elseif (preg_match('/^filename_(\d+)_update$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $fileName = $request->get($key);
                //     $existingFile = MstSupplierFile::find($id);

                //     $filePath = $existingFile->image; // Retain old file if no new file is uploaded

                //     if ($request->hasFile("image_{$id}_update")) {
                //         $file = $request->file("image_{$id}_update");

                //         // Delete old file if exists
                //         if ($existingFile->image) {
                //             Storage::disk('public')->delete($existingFile->image);
                //         }

                //         $filePath = $file->store('customer-images', 'public');
                //     }

                //     // Update existing file
                //     MstSupplierFile::where('id', $id)->update([
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'name' => $fileName,
                //         'image' => $filePath,
                //         'updated_at' => now(),
                //     ]);
                // }

                // if (preg_match('/^accountnumber_(\d+)_new$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     log($id);
                //     log($matches);
                //     log($key);
                //     $accountNumber = $request->get($key);
                //     $fileName = $request->get("filename_{$id}_new");
                //     $bankName = $request->get("bankname_{$id}_new");
                //     $bankBranch = $request->get("bankbranch_{$id}_new");
                //     $ifscCode = $request->get("ifsccode_{$id}_new");
                //     $chequeName = $request->get("chequename_{$id}_new");
                //     $upi = $request->get("upi_{$id}_new");

                //     $bankAccountData[] = [
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'file_name' => $fileName,
                //         'account_number' => $accountNumber,
                //         'bank_name' => $bankName,
                //         'bank_branch' => $bankBranch,
                //         'ifsc_code' => $ifscCode,
                //         'cheque_name' => $chequeName,
                //         'upi' => $upi,
                //         'created_at' => now(),
                //         'updated_at' => now(),
                //     ];
                // } elseif (preg_match('/^filename_(\d+)_update$/', $key, $matches)) {
                //     $id = (int) $matches[1]; // Ensure integer
                //     $fileName = $request->get($key);
                //     $accountNumber = $request->get("accountnumber_{$id}_update");
                //     $bankName = $request->get("bankname_{$id}_update");
                //     $bankBranch = $request->get("bankbranch_{$id}_update");
                //     $ifscCode = $request->get("ifsccode_{$id}_update");
                //     $chequeName = $request->get("chequename_{$id}_update");
                //     $upi = $request->get("upi_{$id}_update");

                //     MstSupplierBankAccount::where('id', $id)->update([
                //         'admin_id' => Auth::id(),
                //         'supplier_id' => $supplierId,
                //         'file_name' => $fileName,
                //         'account_number' => $accountNumber,
                //         'bank_name' => $bankName,
                //         'bank_branch' => $bankBranch,
                //         'ifsc_code' => $ifscCode,
                //         'cheque_name' => $chequeName,
                //         'upi' => $upi,
                //         'updated_at' => now(),
                //     ]);
                // }
            }



            if (!empty($driverAddressData)) {
                MstDriverAddress::insert($driverAddressData);
            }

            // if (!empty($filesData)) {
            //     MstSupplierFile::insert($filesData);
            // }

            // // Insert new applicable taxes
            // if (!empty($applicableTaxesData)) {
            //     MstSupplierApplicableTax::insert($applicableTaxesData);
            // }

            // // Insert new interstate taxes
            // if (!empty($interstateTaxesData)) {
            //     MstSupplierInterstateTax::insert($interstateTaxesData);
            // }
            // if (!empty($bankAccountData)) {
            //     MstSupplierBankAccount::insert($bankAccountData);
            // }





            // return redirect(route('suppliers.index'));
        } catch (Exception $e) {
            dd($e);
        }
    }
}
