<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstMyDriver;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyDriversController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.drivers.index');
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
                // dd($validator->errors()->first());
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('mydrivers.index'));
            }
            $filePath= '';
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

            $myDriver = $myDriver->id;


            // // Process Applicable Taxes
            // $applicableTaxesData = [];
            // for ($i = 1; $request->has("appli_tax$i"); $i++) {
            //     $taxId = $request->input("appli_tax{$i}");
            //     $isNotCharged = $request->input("appli_tax_n_ch{$i}") ? true : false;
            //     // Add to applicable taxes data array
            //     $applicableTaxesData[] = [
            //         'admin_id' => Auth::id(),
            //         'customer_id' => $customerId,
            //         'tax_id' => $taxId,
            //         'not_charged' => $isNotCharged,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ];
            //     // print_r($applicableTaxesData);
            // }
            // MstCustomerApplicableTaxes::insert($applicableTaxesData);
            // // dd($applicableTaxesData);


            // // Process Interstate Taxes
            // $interstateTaxesData = [];
            // for ($i = 1; $request->has("inter_appli_tax$i"); $i++) {
            //     $taxId = $request->input("inter_appli_tax$i");
            //     $isNotCharged = $request->has("inter_appli_tax_n_ch{$i}") ? 1 : 0;
            //     // Add to interstate taxes data array
            //     $interstateTaxesData[] = [
            //         'admin_id' => Auth::id(),
            //         'customer_id' => $customerId,
            //         'tax_id' => $taxId,
            //         'not_charged' => $isNotCharged,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ];
            // }
            // MstCustomerInterstateTaxes::insert($interstateTaxesData);
            // // dd($interstateTaxesData);
            // // Driver Allowance Setting
            // $driverAllowSettingData = [];
            // for ($i = 1; $request->has("dri_allow_set_city$i"); $i++) {
            //     $cityName = $request->input("dri_allow_set_city$i");
            //     $earlyTime = $request->input("dri_allow_set_early_time{$i}");
            //     $lateTime = $request->input("dri_allow_set_late_time{$i}");
            //     $outstaOvernigTime = $request->input("dri_allow_set_outst_overnig_time{$i}");
            //     // Add to interstate taxes data array
            //     $driverAllowSettingData[] = [
            //         'admin_id' => Auth::id(),
            //         'customer_id' => $customerId,
            //         'city_name' => $cityName,
            //         'early_time' => $earlyTime,
            //         'late_time' => $lateTime,
            //         'outsta_overnig_time' => $outstaOvernigTime,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ];
            // }
            // MstCustomerDriverAllownanceSetting::insert($driverAllowSettingData);
            // // dd($driverAllowSettingData);

            // // Duty Type Types
            // $dutyTypeTypeData = [];
            // for ($i = 1; $request->has("dut_typ_tim$i"); $i++) {
            //     $dutyType = $request->input("dut_typ_tim$i");
            //     $startTime = $request->input("dut_typ_tim_str{$i}");
            //     $endTime = $request->input("dut_typ_tim_end{$i}");
            //     // Add to interstate taxes data array
            //     $dutyTypeTypeData[] = [
            //         'admin_id' => Auth::id(),
            //         'customer_id' => $customerId,
            //         'duty_type' => $dutyType,
            //         'start_time' => $startTime,
            //         'end_time' => $endTime,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ];
            // }
            // MstCustomerDutyType::insert($dutyTypeTypeData);
            // // dd($dutyTypeTypeData);

            // // Files
            // $filesData = [];
            // for ($i = 1; $request->has("file_name$i"); $i++) {
            //     $fileName = $request->input("file_name$i");

            //     if ($request->hasFile("image$i")) {
            //             $file = $request->file("image{$i}");
            //             $filePath = $file->store('customer-images', 'public'); // Store in 'storage/app/public/customer-images'

            //         // Add file data to array
            //         $filesData[] = [
            //             'admin_id' => Auth::user()->id,
            //             'customer_id' => $customerId,
            //             'name' => $fileName,
            //             'image' => $filePath, // Save the unique file name
            //             'created_at' => now(),
            //             'updated_at' => now(),
            //         ];
            //         // dd($filesData);
            //     } else {

            //         $filesData[] = [
            //             'admin_id' => Auth::user()->id,
            //             'customer_id' => $customerId,
            //             'name' => $fileName,
            //             'created_at' => now(),
            //             'updated_at' => now(),
            //         ];
            //     }
            // }

            // MstCustomerFile::insert($filesData);



            // return redirect(route('customers.index'));
        } catch (Exception $e) {
            dd($e);
        }
    }
}
