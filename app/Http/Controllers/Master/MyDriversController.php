<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
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
    public function store(Request $request){
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'image' => 'nullable|string',
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
                    'gst_addr' => 'nullable|numeric',
                    'sunday_allowance' => 'nullable|numeric',
                    'early_start_allowance' => 'nullable|numeric',
                    'night_allowance' => 'nullable|numeric',
                    'extra_duty_second' => 'nullable|numeric',
                    'extra_duty_third' => 'nullable|numeric',
                    'extra_duty_fourth' => 'nullable|numeric',
                    'extra_duty_fifth' => 'nullable|numeric',
                    'license_no' => 'nullable|string',
                    'police_card_number' => 'nullable|string',
                    'police_card_expiry_date' => 'nullable|date',
                    'police_veri_no' => 'nullable|string',
                    'police_veri_expiry_date' => 'nullable|date',
                    'badge_number' => 'nullable|string',
                    'badge_expiry_date' => 'nullable|date',
                    'additional_info' => 'nullable|string',
                   
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
                notify()->error('Connection Found','Welcome to Laravel Notify ⚡️') ;

            

                return redirect(route('customers.index'));
            }
            // $customer = MstCustomer::create([
            //     'name' => $request->name,
            //     'address' => $request->address,
            //     'pincode' => $request->pincode,
            // ]);
            // $customerId = $customer->id;


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
