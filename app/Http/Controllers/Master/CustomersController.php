<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MapCustomerApplicableTaxes;
use App\Models\MapCustomerInterstateTaxes;
use App\Models\MstCustomer;
use App\Models\MstCustomerGroup;
use App\Models\MstFeedbackForm;
use App\Models\MstMyCompany;
use App\Models\MstCustomerDriverAllownanceSetting;
use App\Models\MstCustomerDutyTypeType;
use App\Models\MstCustomerFile;
use App\Models\MstDutyType;
use App\Models\MstTax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    public function index()
    {
        $mstCustomer = MstCustomer::active()->with('customerGroups')->orderBy('id','Desc')->get();

        return view('backend.admin.masters.customers.index',compact('mstCustomer'));
    }
    public function create()
    {
        $mstCustomer = MstCustomer::active()->get();
        $customerGroup = MstCustomerGroup::active()->get();
        $feedbackForm = MstFeedbackForm::active()->get();
        $myCompany = MstMyCompany::active()->get();
        $applicableTaxes = MstTax::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.customers.create', compact('mstCustomer', 'customerGroup', 'myCompany', 'feedbackForm', 'applicableTaxes'));
    }
    public function store(Request $request)
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
                    'gst_state'=>'nullable|string',
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
                    // inv_og_hide
                    // in_active

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
                'gst_state'=> $request->gst_state,
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
                'inv_og_hide' => $request->inv_og_hide ?? false,
                'in_active' => $request->in_active ?? false,

            ]);
            $customerId = $customer->id;


            // Process Applicable Taxes
            $applicableTaxesData = [];
            for ($i = 1; $request->has("appli_tax$i"); $i++) {
                $taxId = $request->input("appli_tax{$i}");
                $isNotCharged = $request->has("appli_tax_n_ch{$i}") ? true : false;
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
            // dd($applicableTaxesData);

            MapCustomerApplicableTaxes::insert($applicableTaxesData);


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
            MapCustomerInterstateTaxes::insert($interstateTaxesData);

            // Driver Allowance Setting
            $driverAllowSettingData = [];
            for ($i = 1; $request->has("dri_allow_set_city$i"); $i++) {
                $cityName = $request->input("dri_allow_set_city$i");
                $earlyTime = $request->has("dri_allow_set_early_time{$i}");
                $lateTime = $request->has("dri_allow_set_late_time{$i}");
                $outstaOvernigTime = $request->has("dri_allow_set_late_time{$i}");
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



            // Duty Type Types
            $dutyTypeTypeData = [];
            for ($i = 1; $request->has("dut_typ_tim$i"); $i++) {
                $dutyType = $request->input("dut_typ_tim$i");
                $startTime = $request->has("dut_typ_tim_str{$i}");
                $endTime = $request->has("dri_allow_set_late_time{$i}");
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

            MstCustomerDutyTypeType::insert($dutyTypeTypeData);

            // Files
            $filesData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");

                if ($request->hasFile("image$i")) {
                    $image = $request->file("image$i");

                    // Generate unique file name and save the file
                    $uniqueFileName = uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('storage/images/customer-images'), $uniqueFileName);

                    // Add file data to array
                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'customer_id' => $customerId,
                        'name' => $fileName,
                        'image' => $uniqueFileName, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
                $filesData[] = [
                    'admin_id' => Auth::user()->id,
                    'customer_id' => $customerId,
                    'name' => $fileName,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            MstCustomerFile::insert($filesData);



            dd('i m here');
        } catch (Exception $e) {
            dd($e);
        }
    }
    public function edit(Request $request)
    {
        $mstCustomer = MstCustomer::active()->get();

        $mstCustomerDutyType = MstCustomerDutyTypeType::active()->with('mstCustomer')->get();
        $customerGroup = MstCustomerGroup::active()->get();
        $feedbackForm = MstFeedbackForm::active()->get();
        $myCompany = MstMyCompany::active()->get();
        $applicableTaxes = MstTax::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.customers.edit', compact('mstCustomer','mstCustomerDutyType', 'customerGroup', 'myCompany', 'feedbackForm', 'applicableTaxes'));
    }
    public function update(Request $request)
    {
        dd($request);
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
