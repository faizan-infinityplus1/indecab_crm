<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstCustomerApplicableTaxes;
use App\Models\MstCustomerInterstateTaxes;
use App\Models\MstCustomer;
use App\Models\MstCustomerGroup;
use App\Models\MstFeedbackForm;
use App\Models\MstMyCompany;
use App\Models\MstCustomerDriverAllownanceSetting;
use App\Models\MstCustomerDutyType;
use App\Models\MstCustomerFile;
use App\Models\MstDutyType;
use App\Models\MstTax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    public function index()
    {
        $mstCustomer = MstCustomer::active()->with('customerGroups')->orderBy('id', 'DESC')->get();

        return view('backend.admin.masters.customers.index', compact('mstCustomer'));
    }
    public function create()
    {
        $mstCustomer = MstCustomer::active()->get();
        $customerGroup = MstCustomerGroup::active()->get();
        $feedbackForm = MstFeedbackForm::active()->get();
        $myCompany = MstMyCompany::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.customers.create', compact('mstCustomer', 'customerGroup', 'myCompany', 'feedbackForm', 'applicableTaxes'));
    }
    public function store(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'address' => 'nullable|string',
                    'pincode' => 'nullable|numeric',
                    'state' => 'nullable|string',
                    'cust_groups_id' => 'nullable|numeric',
                    'phone_no' => 'nullable|numeric',
                    'email_id' => 'nullable|string',
                    'pan_no' => 'nullable|string',
                    'gst_no' => 'nullable|string',
                    'tds_perc' => 'nullable|numeric',
                    'inv_def' => 'nullable|string',
                    'def_disc' => 'nullable|string',
                    'base_city_fuel' => 'nullable|string',
                    'sales_comis_perc' => 'nullable|numeric',
                    'country' => 'nullable|string',
                    'def_tax_classif' => 'nullable|string',
                    'customer_id' => 'nullable|numeric',
                    'gst_name' => 'nullable|string',
                    'gst_addr' => 'nullable|string',
                    'gst_state' => 'nullable|string',
                    // 'is_gst_primary'
                    // 'is_gst_tally'
                    'altern_phone_no' => 'nullable|numeric',
                    'altern_email_id' => 'nullable|string',
                    'serv_tax_no' => 'nullable|string',
                    'gst_type' => 'nullable|string',
                    'revrse_chrg' => 'nullable|string',
                    'surcharg_perc' => 'nullable|numeric',
                    'def_car_chrg_disc' => 'nullable|numeric',
                    'force_fuel_type' => 'nullable|string',
                    'feedback_id' => 'nullable|numeric',
                    'company_id' => 'nullable|numeric',
                    'branch' => 'nullable|string',
                    'notes' => 'nullable|string',
                    'inv_term_cond' => 'nullable|string',
                    'cust_code' => 'nullable|string',
                    // is_inv_og_hide
                    // is_active

                ],
                [
                    'name.required' => 'Please Filled Duty Type Name ',
                ]
            );
            if ($validator->fails()) {
                // dd($validator->errors()->first());
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('customers.index'));
            }
            $customer = MstCustomer::create([
                'name' => $request->name,
                'address' => $request->address,
                'pincode' => $request->pincode,
                'state' => $request->state,
                'cust_groups_id' => $request->cust_groups_id,
                'phone_no' => $request->phone_no,
                'email_id' => $request->email_id,
                'pan_no' => $request->pan_no,
                'gst_no' => $request->gst_no,
                'tds_perc' => $request->tds_perc,
                'inv_def' => $request->inv_def,
                'def_disc' => $request->def_disc,
                'base_city_fuel' => $request->base_city_fuel,
                'sales_comis_perc' => $request->sales_comis_perc,
                'country' => $request->country,
                'def_tax_classif' => $request->def_tax_classif,
                'customer_id' => $request->customer_id,
                'gst_name' => $request->gst_name,
                'gst_addr' => $request->gst_addr,
                'gst_state' => $request->gst_state,
                'is_gst_primary' => $request->is_gst_primary ?? false,
                'is_gst_tally' => $request->is_gst_tally ?? false,
                'altern_phone_no' => $request->altern_phone_no,
                'altern_email_id' => $request->altern_email_id,
                'gst_type' => $request->gst_type,
                'serv_tax_no' => $request->serv_tax_no,
                'revrse_chrg' => $request->revrse_chrg,
                'surcharg_perc' => $request->surcharg_perc,
                'def_car_chrg_disc' => $request->def_car_chrg_disc,
                'force_fuel_type' => $request->force_fuel_type,
                'feedback_id' => $request->feedback_id,
                'company_id' => $request->company_id,
                'branch' => $request->branch,
                'notes' => $request->notes,
                'inv_term_cond' => $request->inv_term_cond,
                'cust_code' => $request->cust_code,
                'is_inv_og_hide' => $request->is_inv_og_hide ?? false,
                'is_active' => $request->is_active ?? false,

            ]);
            $customerId = $customer->id;


            // Process Applicable Taxes
            $applicableTaxesData = [];
            for ($i = 1; $request->has("appli_tax$i"); $i++) {
                $taxId = $request->input("appli_tax{$i}");
                $isNotCharged = $request->input("appli_tax_n_ch{$i}") ? true : false;
                // Add to applicable taxes data array
                $applicableTaxesData[] = [
                    'admin_id' => Auth::id(),
                    'customer_id' => $customerId,
                    'tax_id' => $taxId,
                    'not_charged' => $isNotCharged,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // print_r($applicableTaxesData);
            }
            MstCustomerApplicableTaxes::insert($applicableTaxesData);
            // dd($applicableTaxesData);


            // Process Interstate Taxes
            $interstateTaxesData = [];
            for ($i = 1; $request->has("inter_appli_tax$i"); $i++) {
                $taxId = $request->input("inter_appli_tax$i");
                $isNotCharged = $request->has("inter_appli_tax_n_ch{$i}") ? 1 : 0;
                // Add to interstate taxes data array
                $interstateTaxesData[] = [
                    'admin_id' => Auth::id(),
                    'customer_id' => $customerId,
                    'tax_id' => $taxId,
                    'not_charged' => $isNotCharged,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstCustomerInterstateTaxes::insert($interstateTaxesData);
            // dd($interstateTaxesData);
            // Driver Allowance Setting
            $driverAllowSettingData = [];
            for ($i = 1; $request->has("dri_allow_set_city$i"); $i++) {
                $cityName = $request->input("dri_allow_set_city$i");
                $earlyTime = $request->input("dri_allow_set_early_time{$i}");
                $lateTime = $request->input("dri_allow_set_late_time{$i}");
                $outstaOvernigTime = $request->input("dri_allow_set_outst_overnig_time{$i}");
                // Add to interstate taxes data array
                $driverAllowSettingData[] = [
                    'admin_id' => Auth::id(),
                    'customer_id' => $customerId,
                    'city_name' => $cityName,
                    'early_time' => $earlyTime,
                    'late_time' => $lateTime,
                    'outsta_overnig_time' => $outstaOvernigTime,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstCustomerDriverAllownanceSetting::insert($driverAllowSettingData);
            // dd($driverAllowSettingData);

            // Duty Type Types
            $dutyTypeTypeData = [];
            for ($i = 1; $request->has("dut_typ_tim$i"); $i++) {
                $dutyType = $request->input("dut_typ_tim$i");
                $startTime = $request->input("dut_typ_tim_str{$i}");
                $endTime = $request->input("dut_typ_tim_end{$i}");
                // Add to interstate taxes data array
                $dutyTypeTypeData[] = [
                    'admin_id' => Auth::id(),
                    'customer_id' => $customerId,
                    'duty_type' => $dutyType,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstCustomerDutyType::insert($dutyTypeTypeData);
            // dd($dutyTypeTypeData);

            // Files
            $filesData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");

                if ($request->hasFile("image$i")) {
                    $file = $request->file("image{$i}");
                    $filePath = $file->store('customer-images', 'public'); // Store in 'storage/app/public/customer-images'

                    // Add file data to array
                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'customer_id' => $customerId,
                        'name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    // dd($filesData);
                } else {

                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'customer_id' => $customerId,
                        'name' => $fileName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            MstCustomerFile::insert($filesData);
            notify()->success('Data Added Successfully', 'Success');

            if ($request->query('hide_menu') == 1) {
                // This will display 'i m here' and then stop the code execution.
                dd('I\'m here');
                // Redirection if hide_menu is 1
                return redirect()->route('customers.create');
            } else {
                // This will display 'i m here1' and then stop the code execution.
                dd('I\'m here1');
                // Redirection if hide_menu is not 1
                return redirect()->route('customers.index');
            }

            // if (request()->query('hide_menu') == 1) {
            //     dd('i m here');
            //     return redirect(route('customers.create'));
            // } else {
            //     dd('i m here1');
            //     return redirect(route('customers.index'));
            // }

            // return redirect(route('customers.index'));
        } catch (Exception $e) {
            notify()->error('Something Went Wrong Please Try Again Later', 'Error');
            return redirect(route('customers.index'));

        }
    }
    public function edit(Request $request)
    {
        $mstCustomer = MstCustomer::active()->get();
        $customerGroup = MstCustomerGroup::active()->get();
        $feedbackForm = MstFeedbackForm::active()->get();
        $myCompany = MstMyCompany::active()->get();
        $applicableTaxes = MstTax::active()->get();
        $particularMstCustomer = MstCustomer::active()->where('id', $request->id)->first();
        $mstApplicableTaxesCustomer = MstCustomerApplicableTaxes::active()->with('mstCustomer')->where('customer_id', $request->id)->get();
        $mstInterstateTaxesCustomer = MstCustomerInterstateTaxes::active()->with('mstCustomer')->where('customer_id', $request->id)->get();
        $mstDriverCustomerSetting = MstCustomerDriverAllownanceSetting::active()->with('mstCustomer')->where('customer_id', $request->id)->get();
        $mstDutyTypeCustomer = MstCustomerDutyType::active()->with('mstCustomer')->where('customer_id', $request->id)->get();
        $mstFilesCustomer = MstCustomerFile::active()->with('mstCustomer')->where('customer_id', $request->id)->get();
        return view('backend.admin.masters.customers.edit', compact('mstCustomer', 'customerGroup', 'myCompany', 'feedbackForm', 'applicableTaxes', 'particularMstCustomer', 'mstApplicableTaxesCustomer', 'mstInterstateTaxesCustomer', 'mstDutyTypeCustomer', 'mstDriverCustomerSetting', 'mstFilesCustomer'));
    }
    public function update(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'nullable|string',
                    'address' => 'nullable|string',
                    'pincode' => 'nullable|numeric',
                    'state' => 'nullable|string',
                    'cust_groups_id' => 'nullable|numeric',
                    'phone_no' => 'nullable|numeric',
                    'email_id' => 'nullable|string',
                    'pan_no' => 'nullable|string',
                    'gst_no' => 'nullable|string',
                    'tds_perc' => 'nullable|numeric',
                    'inv_def' => 'nullable|string',
                    'def_disc' => 'nullable|string',
                    'base_city_fuel' => 'nullable|string',
                    'sales_comis_perc' => 'nullable|numeric',
                    'country' => 'nullable|string',
                    'def_tax_classif' => 'nullable|string',
                    'customer_id' => 'nullable|numeric',
                    'gst_name' => 'nullable|string',
                    'gst_addr' => 'nullable|string',
                    'gst_state' => 'nullable|string',
                    // 'is_gst_primary'
                    // 'is_gst_tally'
                    'altern_phone_no' => 'nullable|numeric',
                    'altern_email_id' => 'nullable|string',
                    'serv_tax_no' => 'nullable|string',
                    'gst_type' => 'nullable|string',
                    'revrse_chrg' => 'nullable|string',
                    'surcharg_perc' => 'nullable|numeric',
                    'def_car_chrg_disc' => 'nullable|numeric',
                    'force_fuel_type' => 'nullable|string',
                    'feedback_id' => 'nullable|numeric',
                    'company_id' => 'nullable|numeric',
                    'branch' => 'nullable|string',
                    'notes' => 'nullable|string',
                    'inv_term_cond' => 'nullable|string',
                    'cust_code' => 'nullable|string',
                    // is_inv_og_hide
                    // is_active
                ],
                [
                    'name.required' => 'Please Filled Duty Type Name ',
                ]
            );
            if ($validator->fails()) {
                // dd($request->max_hours);
                // connectify('error', 'Add Product', $validator->errors()->first());
                dd($validator->errors()->first());
                return redirect(route('customers.index'))->withInput();
            }
            $customerId = MstCustomer::where('id', $request->id)->firstOrFail();

            $customerId->update([
                'name' => $request->name,
                'address' => $request->address,
                'pincode' => $request->pincode,
                'state' => $request->state,
                'cust_groups_id' => $request->cust_groups_id,
                'phone_no' => $request->phone_no,
                'email_id' => $request->email_id,
                'pan_no' => $request->pan_no,
                'gst_no' => $request->gst_no,
                'tds_perc' => $request->tds_perc,
                'inv_def' => $request->inv_def,
                'def_disc' => $request->def_disc,
                'base_city_fuel' => $request->base_city_fuel,
                'sales_comis_perc' => $request->sales_comis_perc,
                'country' => $request->country,
                'def_tax_classif' => $request->def_tax_classif,
                'customer_id' => $request->customer_id,
                'gst_name' => $request->gst_name,
                'gst_addr' => $request->gst_addr,
                'gst_state' => $request->gst_state,
                'is_gst_primary' => $request->is_gst_primary ?? false,
                'is_gst_tally' => $request->is_gst_tally ?? false,
                'altern_phone_no' => $request->altern_phone_no,
                'altern_email_id' => $request->altern_email_id,
                'gst_type' => $request->gst_type,
                'serv_tax_no' => $request->serv_tax_no,
                'revrse_chrg' => $request->revrse_chrg,
                'surcharg_perc' => $request->surcharg_perc,
                'def_car_chrg_disc' => $request->def_car_chrg_disc,
                'force_fuel_type' => $request->force_fuel_type,
                'feedback_id' => $request->feedback_id,
                'company_id' => $request->company_id,
                'branch' => $request->branch,
                'notes' => $request->notes,
                'inv_term_cond' => $request->inv_term_cond,
                'cust_code' => $request->cust_code,
                'is_inv_og_hide' => $request->is_inv_og_hide ?? false,
                'is_active' => $request->is_active ?? false,
            ]);
            // dd($mstCustomer);
            $customerId = $customerId->id;

            // // Process Applicable Taxes

            $applicableTaxesData = [];
            $interstateTaxesData = [];
            $driverSettingsData = [];
            $dutyTypeSettingsData = [];
            $filesData = [];



            foreach ($request->keys() as $key) {
                // Handle applicable taxes
                if (preg_match('/^applitax_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $taxId = $request->get($key);
                    $isNotCharged = $request->has("applitaxnch_{$id}_new");

                    $applicableTaxesData[] = [
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'tax_id' => $taxId,
                        'not_charged' => $isNotCharged,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^applitax_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $taxId = $request->get($key);
                    $isNotCharged = $request->has("applitaxnch_{$id}_update");

                    // Update record correctly
                    MstCustomerApplicableTaxes::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'tax_id' => $taxId,
                        'not_charged' => $isNotCharged,
                        'updated_at' => now(),
                    ]);
                }

                // Handle interstate taxes (Ensure it does not modify applicable taxes)
                if (preg_match('/^interapplitax_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $taxId = $request->get($key);
                    $isNotCharged = $request->has("interapplitaxnch_{$id}_new");

                    $interstateTaxesData[] = [
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'tax_id' => $taxId,
                        'not_charged' => $isNotCharged,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^interapplitax_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $taxId = $request->get($key);
                    $isNotCharged = $request->has("interapplitaxnch_{$id}_update");

                    // Update record correctly
                    MstCustomerInterstateTaxes::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'tax_id' => $taxId,
                        'not_charged' => $isNotCharged,
                        'updated_at' => now(),
                    ]);
                }


                // Handle Driver Allow Settings
                if (preg_match('/^driallowsetcity_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $city = $request->get($key);
                    $earlyTime = $request->get("driallowsetearlytime_{$id}_new");
                    $lateTime = $request->get("driallowsetlatetime_{$id}_new");
                    $overnightTime = $request->get("driallowsetoutstovernigtime_{$id}_new");

                    $driverSettingsData[] = [
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'city_name' => $city,
                        'early_time' => $earlyTime,
                        'late_time' => $lateTime,
                        'outsta_overnig_time' => $overnightTime,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^driallowsetcity_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $city = $request->get($key);
                    $earlyTime = $request->get("driallowsetearlytime_{$id}_update");
                    $lateTime = $request->get("driallowsetlatetime_{$id}_update");
                    $overnightTime = $request->get("driallowsetoutstovernigtime_{$id}_update");

                    // Update record correctly
                    MstCustomerDriverAllownanceSetting::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'city_name' => $city,
                        'early_time' => $earlyTime,
                        'late_time' => $lateTime,
                        'outsta_overnig_time' => $overnightTime,
                        'updated_at' => now(),
                    ]);
                }

                // Handle Duty Type taxes
                if (preg_match('/^duttyptim_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $dutyType = $request->get($key);
                    $startTime = $request->get("duttyptimstr_{$id}_new");
                    $endTime = $request->get("duttyptimend_{$id}_new");

                    $dutyTypeSettingsData[] = [
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'duty_type' => $dutyType,
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^duttyptim_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $dutyType = $request->get($key);
                    $startTime = $request->get("duttyptimstr_{$id}_update");
                    $endTime = $request->get("duttyptimend_{$id}_update");

                    // Update record correctly
                    MstCustomerDutyType::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'duty_type' => $dutyType,
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                        'updated_at' => now(),
                    ]);
                }

                if (preg_match('/^filename_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $filePath = null;


                    if ($request->hasFile("image_{$id}_new")) {
                        $file = $request->file("image_{$id}_new");
                        $filePath = $file->store('customer-images', 'public'); // Store in 'storage/app/public/customer-images'
                    }

                    $filesData[] = [
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'name' => $fileName,
                        'image' => $filePath,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^filename_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $existingFile = MstCustomerFile::find($id);

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
                    MstCustomerFile::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'customer_id' => $customerId,
                        'name' => $fileName,
                        'image' => $filePath,
                        'updated_at' => now(),
                    ]);
                }
            }

            if (!empty($driverSettingsData)) {
                MstCustomerDriverAllownanceSetting::insert($driverSettingsData);
            }

            // Insert new duty type settings
            if (!empty($dutyTypeSettingsData)) {
                MstCustomerDutyType::insert($dutyTypeSettingsData);
            }

            if (!empty($filesData)) {
                MstCustomerFile::insert($filesData);
            }

            // Files
            // $filesData = [];
            // for ($i = 1; $request->has("file_name$i"); $i++) {
            //     $fileName = $request->input("file_name$i");

            //     // if ($request->hasFile("image$i")) {
            //     //     $image = $request->file("image$i");

            //     //     // Generate unique file name and save the file
            //     //     $uniqueFileName = uniqid() . '.' . $image->getClientOriginalExtension();
            //     //     $image->move(public_path('storage/images/customer-images'), $uniqueFileName);

            //     //     // Add file data to array
            //     //     $filesData[] = [
            //     //         'admin_id' => Auth::user()->id,
            //     //         'customer_id' => $customerId,
            //     //         'name' => $fileName,
            //     //         'image' => $uniqueFileName, // Save the unique file name
            //     //         'created_at' => now(),
            //     //         'updated_at' => now(),
            //     //     ];
            //     // }
            //     $filesData[] = [
            //         'admin_id' => Auth::user()->id,
            //         'customer_id' => $customerId,
            //         'name' => $fileName,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ];
            // }

            // MstCustomerFile::insert($filesData);



            // Insert new applicable taxes
            if (!empty($applicableTaxesData)) {
                MstCustomerApplicableTaxes::insert($applicableTaxesData);
            }

            // Insert new interstate taxes
            if (!empty($interstateTaxesData)) {
                MstCustomerInterstateTaxes::insert($interstateTaxesData);
            }

            return redirect(route('customers.edit', $request->id));



            // dd('i m here');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function deleteApplicableTaxes(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $interstateTax = MstCustomerApplicableTaxes::findOrFail($request->id);
            $interstateTax->delete();

            return response()->json(['success' => 'Applicable Tax deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'], 500);
        }
    }

    public function deleteInterstateTaxes(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $interstateTax = MstCustomerInterstateTaxes::findOrFail($request->id);
            $interstateTax->delete();

            return response()->json(['success' => 'Inter State tax deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'], $e);
        }
    }

    public function deleteDriverAllowanceSetting(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $driverAllowanceSetting = MstCustomerDriverAllownanceSetting::findOrFail($request->id);
            $driverAllowanceSetting->delete();

            return response()->json(['success' => 'Driver Allowance Setting deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'], $e);
        }
    }

    public function deleteDutyType(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $dutyType = MstCustomerDutyType::findOrFail($request->id);
            $dutyType->delete();

            return response()->json(['success' => 'Duty Type deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'], $e);
        }
    }

    public function deleteFiles(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $deleteFiles = MstCustomerFile::findOrFail($request->id);
            $deleteFiles->delete();

            return response()->json(['success' => 'Duty Type deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'], $e);
        }
    }

    public function showCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups');
    }
    public function createCustomersGroups()
    {
        return view('backend.admin.masters.customers.groups-create');
    }
}
