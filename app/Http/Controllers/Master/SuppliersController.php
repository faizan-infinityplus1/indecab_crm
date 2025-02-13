<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstCatVehGroup;
use App\Models\MstCustomerFile;
use App\Models\MstCustomerInterstateTaxes;
use App\Models\MstDutyType;
use App\Models\MstSupplier;
use App\Models\MstSupplierApplicableTax;
use App\Models\MstSupplierBankAccount;
use App\Models\MstSupplierCompanyDetail;
use App\Models\MstSupplierDriverAllowanceSetting;
use App\Models\MstSupplierDriverCumOwner;
use App\Models\MstSupplierFile;
use App\Models\MstSupplierInterstateTax;
use App\Models\MstSupplierPermit;
use App\Models\MstTax;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use function Illuminate\Log\log;

class SuppliersController extends Controller
{
    public function index()
    {
        $mstSupplier = MstSupplier::active()->with('supplierGroups','mstSupplierDriverCumOwnerMany')->orderBy('id', 'DESC')->get();
        return view('backend.admin.masters.suppliers.index', compact('mstSupplier'));
    }
    public function create()
    {
        $mstCatVehGroup = MstCatVehGroup::active()->get();
        $mstDutyType = MstDutyType::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.suppliers.create', compact('mstCatVehGroup', 'mstDutyType', 'applicableTaxes'));
    }
    public function showSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'nullable|string',
                    'address' => 'nullable|string',
                    'state' => 'nullable|string',
                    'type' => 'nullable|string',
                    'phone_no' => 'nullable|numeric',
                    'email_id' => 'nullable|string',
                    'gst_no' => 'nullable|string',
                    'gst_type' => 'nullable|string',
                    'revrse_chrg' => 'nullable|string',
                    'revenue_share_per' => 'nullable|string',
                    'altern_phone_no' => 'nullable|numeric',
                    'altern_email_id' => 'nullable|string',
                    'pan_no' => 'nullable|string',
                    'serv_tax_no' => 'nullable|string',
                    'tds_perc' => 'nullable|numeric',
                    'pincode' => 'nullable|numeric',
                    'head_office_city' => 'nullable|string',
                    'supli_groups_id' => 'nullable|numeric',
                    'inv_def' => 'nullable|string',
                    'country' => 'nullable|string',
                    'def_tax_classif' => 'nullable|string',
                    'tds_ledger_type' => 'nullable|string',
                    'start' => 'nullable|string',
                    'end' => 'nullable|string',
                    'limit_allot_booking' => 'nullable|array',
                    'limit_duty_type' => 'nullable|array',
                    'vehi_group_limit' => 'nullable|array',
                    'gst_name' => 'nullable|string',
                    'gst_addr' => 'nullable|string',
                    'gst_state' => 'nullable|string',
                    'cities_ext_hig_cost' => 'nullable|string',
                    'def_car_chrg_disc' => 'nullable|numeric',
                    'supplier_code' => 'nullable|string',

                ],
                [
                    'name.required' => 'Please Filled Duty Type Name ',
                ]
            );
            if ($validator->fails()) {
                // dd($request->max_hours);
                // connectify('error', 'Add Product', $validator->errors()->first());
                dd($validator->errors()->first());
                return redirect(route('suppliers.index'))->withInput();
            }

            $supplier = MstSupplier::create([
                'name' => $request->name,
                'address' => $request->address,
                'state' => $request->state,
                'type' => $request->type,
                'phone_no' => $request->phone_no,
                'email_id' => $request->email_id,
                'gst_no' => $request->gst_no,
                'gst_type' => $request->gst_type,
                'revrse_chrg' => $request->revrse_chrg,
                'revenue_share_per' => $request->revenue_share_per,
                'altern_phone_no' => $request->altern_phone_no,
                'altern_email_id' => $request->altern_email_id,
                'pan_no' => $request->pan_no,
                'serv_tax_no' => $request->serv_tax_no,
                'tds_perc' => $request->tds_perc,
                'pincode' => $request->pincode,
                'head_office_city' => $request->head_office_city,
                'supli_groups_id' => $request->supli_groups_id,
                'inv_def' => $request->inv_def,
                'country' => $request->country,
                'def_tax_classif' => $request->def_tax_classif,
                'tds_ledger_type' => $request->tds_ledger_type,
                'start' => $request->start,
                'end' => $request->end,
                // comma seperate value
                'limit_allot_booking' => is_array($request->limit_allot_booking) ? implode(',', $request->limit_allot_booking) : $request->limit_allot_booking,
                'limit_duty_type' => is_array($request->limit_duty_type) ? implode(',', $request->limit_duty_type) : $request->limit_duty_type,
                'vehi_group_limit' => is_array($request->vehi_group_limit) ? implode(',', $request->vehi_group_limit) : $request->vehi_group_limit,
                'cities_ext_hig_cost' => $request->cities_ext_hig_cost,
                'gst_name' => $request->gst_name,
                'gst_addr' => $request->gst_addr,
                'gst_state' => $request->gst_state,
                'is_gst_tally' => $request->is_gst_tally ?? false,
                'branch' => $request->branch,
                'is_active' => $request->is_active ?? false,

            ]);
            $supplierId = $supplier->id;
            if ($request->filled('vehicle_count') || $request->filled('owner_name')) {    
                MstSupplierCompanyDetail::create([
                    'supplier_id' => $supplierId,
                    'vehicle_count' => $request->vehicle_count ?? '',
                    'owner_name' => $request->owner_name ?? '',
                ]);
            
            }
            if ($request->has('vehicle_model') && !empty($request->get('vehicle_model'))) {
                if ($request->hasFile("driver_image")) {
                    $driverImage = $request->file("driver_image");
                    $driverImagePath = $driverImage->store('suppliers/supplier-driver-cum-owners/avatars', 'public');
                }
                if ($request->hasFile("vehicle_image")) {
                    $vehicleImage = $request->file("vehicle_image");
                    $vehicleImagePath = $vehicleImage->store('suppliers/supplier-driver-cum-owners/vehicle-images', 'public');
                }

                MstSupplierDriverCumOwner::create([
                    'supplier_id' => $supplierId,
                    'driver_image' => $driverImagePath ?? '',
                    'vehicle_image' => $vehicleImagePath ?? '',
                    'vehicle_model' => $request->vehicle_model,
                    'vehicle_no' => $request->vehicle_no,
                    'vehicle_fuel_type' => $request->vehicle_fuel_type,
                    'owner_name' => $request->driver_cum_owner_name,
                    'owner_phone_no' => $request->owner_phone_no,
                    'regis_owner_name' => $request->regis_owner_name,
                    'regis_date' => $request->regis_date,
                    'parts_chasis_no' => $request->parts_chasis_no,
                    'parts_engine_no' => $request->parts_engine_no,
                    'insaurance_company_name' => $request->insaurance_company_name,
                    'insurance_issue_date' => $request->insurance_issue_date,
                    'insurance_policy_no' => $request->insurance_policy_no,
                    'insurance_due_date' => $request->insurance_due_date,
                    'insurance_premium_account' => $request->insurance_premium_account,
                    'insurance_cover_account' => $request->insurance_cover_account,
                    'rto_address' => $request->rto_address,
                    'rto_tax_efficiency' => $request->rto_tax_efficiency,
                    'rto_expiry_date' => $request->rto_expiry_date,
                    'fitness_no' => $request->fitness_no,
                    'fitness_expiry_date' => $request->fitness_expiry_date,
                    'auth_number' => $request->auth_number,
                    'auth_expiry_date' => $request->auth_expiry_date,
                    'speed_details' => $request->speed_details,
                    'speed_expiry_date' => $request->speed_expiry_date,
                    'puc_number' => $request->puc_number,
                    'puc_expiry_date' => $request->puc_expiry_date,
                    'license_no' => $request->license_no,
                    'license_expiry_date' => $request->license_expiry_date,
                    'police_card_no' => $request->police_card_no,
                    'police_expiry_date' => $request->police_expiry_date,
                    'police_veri_number' => $request->police_veri_number,
                    'police_veri_expiry_date' => $request->police_veri_expiry_date,
                    'is_covid_vaccinated' => $request->is_covid_vaccinated ?? false,
                ]);
            }

            // // Process Applicable Taxes
            $applicableTaxesData = [];
            for ($i = 1; $request->has("appli_tax$i"); $i++) {
                $taxId = $request->input("appli_tax{$i}");
                $isNotCharged = $request->input("appli_tax_n_ch{$i}") ? true : false;
                // Add to applicable taxes data array
                $applicableTaxesData[] = [
                    'admin_id' => Auth::id(),
                    'supplier_id' => $supplierId,
                    'tax_id' => $taxId,
                    'not_charged' => $isNotCharged,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                // print_r($applicableTaxesData);
            }
            MstSupplierApplicableTax::insert($applicableTaxesData);
            // // dd($applicableTaxesData);


            // Process Interstate Taxes
            $interstateTaxesData = [];
            for ($i = 1; $request->has("inter_appli_tax$i"); $i++) {
                $taxId = $request->input("inter_appli_tax$i");
                $isNotCharged = $request->has("inter_appli_tax_n_ch{$i}") ? 1 : 0;
                // Add to interstate taxes data array
                $interstateTaxesData[] = [
                    'admin_id' => Auth::id(),
                    'supplier_id' => $supplierId,
                    'tax_id' => $taxId,
                    'not_charged' => $isNotCharged,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstSupplierInterstateTax::insert($interstateTaxesData);


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
                    'supplier_id' => $supplierId,
                    'city_name' => $cityName,
                    'early_time' => $earlyTime,
                    'late_time' => $lateTime,
                    'outsta_overnig_time' => $outstaOvernigTime,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstSupplierDriverAllowanceSetting::insert($driverAllowSettingData);
            // // dd($driverAllowSettingData);

            // // File Name
            $bankAccountData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");
                $accountNumber = $request->input("account_number$i");
                $bankName = $request->input("bank_name$i");
                $bankBranch = $request->input("bank_branch$i");
                $ifscCode = $request->input("ifsc_code{$i}");
                $chequeName = $request->input("cheque_name{$i}");
                $upi = $request->input("upi{$i}");
                // Add to interstate taxes data array
                $bankAccountData[] = [
                    'admin_id' => Auth::id(),
                    'supplier_id' => $supplierId,
                    'file_name' => $fileName,
                    'account_number' => $accountNumber,
                    'bank_name' => $bankName,
                    'bank_branch' => $bankBranch,
                    'ifsc_code' => $ifscCode,
                    'cheque_name' => $chequeName,
                    'upi' => $upi,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            MstSupplierBankAccount::insert($bankAccountData);

            // Files
            $filesData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");

                if ($request->hasFile("image$i")) {
                    $file = $request->file("image{$i}");
                    $filePath = $file->store('suppliers/supplier-images', 'public'); // Store in 'storage/app/public/customer-images'

                    // Add file data to array
                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'supplier_id' => $supplierId,
                        'name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    // dd($filesData);
                } else {

                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'supplier_id' => $supplierId,
                        'name' => $fileName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            MstSupplierFile::insert($filesData);

             // // Process Applicable Taxes
             $permitsTaxData = [];
             for ($i = 1; $request->has("permits_type$i"); $i++) {
                 $permitType = $request->input("permits_type{$i}");
                 $permitExpiryDate = $request->input("permits_expiry_date{$i}");
                 // Add to applicable taxes data array
                 $permitsTaxData[] = [
                     'admin_id' => Auth::id(),
                     'supplier_id' => $supplierId,
                     'permits_type' => $permitType,
                     'permits_expiry_date' => $permitExpiryDate,
                     'created_at' => now(),
                     'updated_at' => now(),
                 ];
                 // print_r($applicableTaxesData);
             }
             MstSupplierPermit::insert($permitsTaxData);




            return redirect(route('suppliers.index'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit(Request $request)
    {
        $mstCatVehGroup = MstCatVehGroup::active()->get();
        $mstDutyType = MstDutyType::active()->get();
        $applicableTaxes = MstTax::active()->get();
        $particularMstSupplier = MstSupplier::active()->with([
            'mstSupplierDriverCumOwner', 'mstSupplierCompanyDetail'
        ])->where('id', $request->id)->first();
        // dd($particularMstSupplier->mstSupplierDriverCumOwner()->toSql());

        // dd($particularMstSupplier->mstSupplierDriverCumOwner->police_veri_expiry_date);
        // dd($particularMstSupplier->toArray());
        $mstApplicableTaxesSupplier = MstSupplierApplicableTax::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstInterstateTaxesSupplier = MstSupplierInterstateTax::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstDriverSupplierSetting = MstSupplierDriverAllowanceSetting::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstFileSupplier = MstSupplierFile::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstBankSupplierSetting = MstSupplierBankAccount::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        // $mstSupplierDriverCum = MstSupplierDriverCumOwner::active()->with('mstSupplier')->where('supplier_id', $request->id)->firstOrFail();
        // $mstSupplierCompany = MstSupplierCompanyDetail::active()->with('mstSupplier')->where('supplier_id', $request->id)->firstOrFail();
        return view('backend.admin.masters.suppliers.edit', compact('mstCatVehGroup', 'mstDutyType', 'applicableTaxes', 'particularMstSupplier', 'mstApplicableTaxesSupplier', 'mstInterstateTaxesSupplier', 'mstDriverSupplierSetting', 'mstBankSupplierSetting', 'mstFileSupplier'));
    }

    public function update(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'nullable|string',
                    'address' => 'nullable|string',
                    'state' => 'nullable|string',
                    'type' => 'nullable|string',
                    'phone_no' => 'nullable|numeric',
                    'email_id' => 'nullable|string',
                    'gst_no' => 'nullable|string',
                    'gst_type' => 'nullable|string',
                    'revrse_chrg' => 'nullable|string',
                    'revenue_share_per' => 'nullable|string',
                    'altern_phone_no' => 'nullable|numeric',
                    'altern_email_id' => 'nullable|string',
                    'pan_no' => 'nullable|string',
                    'serv_tax_no' => 'nullable|string',
                    'tds_perc' => 'nullable|numeric',
                    'pincode' => 'nullable|numeric',
                    'head_office_city' => 'nullable|string',
                    'supli_groups_id' => 'nullable|numeric',
                    'inv_def' => 'nullable|string',
                    'country' => 'nullable|string',
                    'def_tax_classif' => 'nullable|string',
                    'tds_ledger_type' => 'nullable|string',
                    'start' => 'nullable|string',
                    'end' => 'nullable|string',
                    'limit_allot_booking' => 'nullable|array',
                    'limit_duty_type' => 'nullable|array',
                    'vehi_group_limit' => 'nullable|array',
                    'gst_name' => 'nullable|string',
                    'gst_addr' => 'nullable|string',
                    'gst_state' => 'nullable|string',
                    'cities_ext_hig_cost' => 'nullable|array',
                    'def_car_chrg_disc' => 'nullable|numeric',
                    'supplier_code' => 'nullable|string',

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
                return redirect(route('suppliers.index'))->withInput();
            }
            $supplierId = MstSupplier::where('id', $request->id)->firstOrFail();
          
            
            $supplierId->update([
                'name' => $request->name,
                'address' => $request->address,
                'state' => $request->state,
                'type' => $request->type,
                'phone_no' => $request->phone_no,
                'email_id' => $request->email_id,
                'gst_no' => $request->gst_no,
                'gst_type' => $request->gst_type,
                'revrse_chrg' => $request->revrse_chrg,
                'revenue_share_per' => $request->revenue_share_per,
                'altern_phone_no' => $request->altern_phone_no,
                'altern_email_id' => $request->altern_email_id,
                'pan_no' => $request->pan_no,
                'serv_tax_no' => $request->serv_tax_no,
                'tds_perc' => $request->tds_perc,
                'pincode' => $request->pincode,
                'head_office_city' => $request->head_office_city,
                'supli_groups_id' => $request->supli_groups_id,
                'inv_def' => $request->inv_def,
                'country' => $request->country,
                'def_tax_classif' => $request->def_tax_classif,
                'tds_ledger_type' => $request->tds_ledger_type,
                'start' => $request->start,
                'end' => $request->end,
                // comma seperate value
                'limit_allot_booking' => is_array($request->limit_allot_booking) ? implode(',', $request->limit_allot_booking) : $request->limit_allot_booking,
                'limit_duty_type' => is_array($request->limit_duty_type) ? implode(',', $request->limit_duty_type) : $request->limit_duty_type,
                'vehi_group_limit' => is_array($request->vehi_group_limit) ? implode(',', $request->vehi_group_limit) : $request->vehi_group_limit,
                'cities_ext_hig_cost' => is_array($request->cities_ext_hig_cost) ? implode(',', $request->cities_ext_hig_cost) : $request->cities_ext_hig_cost,
                'gst_name' => $request->gst_name,
                'gst_addr' => $request->gst_addr,
                'gst_state' => $request->gst_state,
                'is_gst_tally' => $request->is_gst_tally ?? false,
                'branch' => $request->branch,
                'supplier_code' => $request->supplier_code,
                'is_active' => $request->is_active ?? false,

            ]);
            $supplierId = $supplierId->id;
            if ($request->filled('vehicle_count') || $request->filled('owner_name')) {    
                MstSupplierCompanyDetail::updateOrCreate(
                    [
                        'supplier_id' => $supplierId
                    ],
                    [
                        'vehicle_count'  => $request->vehicle_count ?? '',
                        'owner_name' => $request->owner_name ?? '',
                    ]
                    );
               
            }
            if ($request->has('vehicle_model') && !empty($request->get('vehicle_model'))) {
                if ($request->hasFile("driver_image")) {
                    $driverImage = $request->file("driver_image");
                    $driverImagePath = $driverImage->store('suppliers/supplier-driver-cum-owners/avatars', 'public');
                }
                if ($request->hasFile("vehicle_image")) {
                    $vehicleImage = $request->file("vehicle_image");
                    $vehicleImagePath = $vehicleImage->store('suppliers/supplier-driver-cum-owners/vehicle-images', 'public');
                }
                MstSupplierDriverCumOwner::updateOrCreate(
                    [
                        'supplier_id' => $supplierId
                    ],
                    [
                        'supplier_id' => $supplierId,
                        'driver_image' => $driverImagePath ?? '',
                        'vehicle_image' => $vehicleImagePath ?? '',
                        'vehicle_model' => $request->vehicle_model,
                        'vehicle_no' => $request->vehicle_no,
                        'vehicle_fuel_type' => $request->vehicle_fuel_type,
                        'owner_name' => $request->driver_cum_owner_name,
                        'owner_phone_no' => $request->owner_phone_no,
                        'regis_owner_name' => $request->regis_owner_name,
                        'regis_date' => $request->regis_date,
                        'parts_chasis_no' => $request->parts_chasis_no,
                        'parts_engine_no' => $request->parts_engine_no,
                        'insaurance_company_name' => $request->insaurance_company_name,
                        'insurance_issue_date' => $request->insurance_issue_date,
                        'insurance_policy_no' => $request->insurance_policy_no,
                        'insurance_due_date' => $request->insurance_due_date,
                        'insurance_premium_account' => $request->insurance_premium_account,
                        'insurance_cover_account' => $request->insurance_cover_account,
                        'rto_address' => $request->rto_address,
                        'rto_tax_efficiency' => $request->rto_tax_efficiency,
                        'rto_expiry_date' => $request->rto_expiry_date,
                        'fitness_no' => $request->fitness_no,
                        'fitness_expiry_date' => $request->fitness_expiry_date,
                        'auth_number' => $request->auth_number,
                        'auth_expiry_date' => $request->auth_expiry_date,
                        'speed_details' => $request->speed_details,
                        'speed_expiry_date' => $request->speed_expiry_date,
                        'puc_number' => $request->puc_number,
                        'puc_expiry_date' => $request->puc_expiry_date,
                        'license_no' => $request->license_no,
                        'license_expiry_date' => $request->license_expiry_date,
                        'police_card_no' => $request->police_card_no,
                        'police_expiry_date' => $request->police_expiry_date,
                        'police_veri_number' => $request->police_veri_number,
                        'police_veri_expiry_date' => $request->police_veri_expiry_date,
                        'is_covid_vaccinated' => $request->is_covid_vaccinated ?? false,
                    ]
                    );
               
            }

            $applicableTaxesData = [];
            $interstateTaxesData = [];
            $driverSettingsData = [];
            $bankAccountData = [];
            $filesData = [];



            foreach ($request->keys() as $key) {
                // Handle applicable taxes
                if (preg_match('/^applitax_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $taxId = $request->get($key);
                    $isNotCharged = $request->has("applitaxnch_{$id}_new");

                    $applicableTaxesData[] = [
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
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
                    MstSupplierApplicableTax::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
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
                        'supplier_id' => $supplierId,
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
                    MstSupplierInterstateTax::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
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
                        'supplier_id' => $supplierId,
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
                    MstSupplierDriverAllowanceSetting::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
                        'city_name' => $city,
                        'early_time' => $earlyTime,
                        'late_time' => $lateTime,
                        'outsta_overnig_time' => $overnightTime,
                        'updated_at' => now(),
                    ]);
                }

                if (preg_match('/^filename_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $filePath = null;


                    if ($request->hasFile("image_{$id}_new")) {
                        $file = $request->file("image_{$id}_new");
                        $filePath = $file->store('suppliers/supplier-images', 'public'); // Store in 'storage/app/public/customer-images'
                    }

                    $filesData[] = [
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
                        'name' => $fileName,
                        'image' => $filePath,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^filename_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $existingFile = MstSupplierFile::find($id);

                    $filePath = $existingFile->image; // Retain old file if no new file is uploaded

                    if ($request->hasFile("image_{$id}_update")) {
                        $file = $request->file("image_{$id}_update");

                        // Delete old file if exists
                        if ($existingFile->image) {
                            Storage::disk('public')->delete($existingFile->image);
                        }

                        $filePath = $file->store('customer-images', 'public');
                    }

                    // Update existing file
                    MstSupplierFile::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
                        'name' => $fileName,
                        'image' => $filePath,
                        'updated_at' => now(),
                    ]);
                }

                if (preg_match('/^accountnumber_(\d+)_new$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    log($id);
                    log($matches);
                    log($key);
                    $accountNumber = $request->get($key);
                    $fileName = $request->get("filename_{$id}_new");
                    $bankName = $request->get("bankname_{$id}_new");
                    $bankBranch = $request->get("bankbranch_{$id}_new");
                    $ifscCode = $request->get("ifsccode_{$id}_new");
                    $chequeName = $request->get("chequename_{$id}_new");
                    $upi = $request->get("upi_{$id}_new");

                    $bankAccountData[] = [
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
                        'file_name' => $fileName,
                        'account_number' => $accountNumber,
                        'bank_name' => $bankName,
                        'bank_branch' => $bankBranch,
                        'ifsc_code' => $ifscCode,
                        'cheque_name' => $chequeName,
                        'upi' => $upi,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } elseif (preg_match('/^filename_(\d+)_update$/', $key, $matches)) {
                    $id = (int) $matches[1]; // Ensure integer
                    $fileName = $request->get($key);
                    $accountNumber = $request->get("accountnumber_{$id}_update");
                    $bankName = $request->get("bankname_{$id}_update");
                    $bankBranch = $request->get("bankbranch_{$id}_update");
                    $ifscCode = $request->get("ifsccode_{$id}_update");
                    $chequeName = $request->get("chequename_{$id}_update");
                    $upi = $request->get("upi_{$id}_update");

                    MstSupplierBankAccount::where('id', $id)->update([
                        'admin_id' => Auth::id(),
                        'supplier_id' => $supplierId,
                        'file_name' => $fileName,
                        'account_number' => $accountNumber,
                        'bank_name' => $bankName,
                        'bank_branch' => $bankBranch,
                        'ifsc_code' => $ifscCode,
                        'cheque_name' => $chequeName,
                        'upi' => $upi,
                        'updated_at' => now(),
                    ]);
                }
            }



            if (!empty($driverSettingsData)) {
                MstSupplierDriverAllowanceSetting::insert($driverSettingsData);
            }

            if (!empty($filesData)) {
                MstSupplierFile::insert($filesData);
            }

            // Insert new applicable taxes
            if (!empty($applicableTaxesData)) {
                MstSupplierApplicableTax::insert($applicableTaxesData);
            }

            // Insert new interstate taxes
            if (!empty($interstateTaxesData)) {
                MstSupplierInterstateTax::insert($interstateTaxesData);
            }
            if (!empty($bankAccountData)) {
                MstSupplierBankAccount::insert($bankAccountData);
            }





            return redirect(route('suppliers.index'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function deleteApplicableTaxes(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $interstateTax = MstSupplierApplicableTax::findOrFail($request->id);
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
            $interstateTax = MstSupplierInterstateTax::findOrFail($request->id);
            $interstateTax->delete();

            return response()->json(['success' => 'Inter State tax deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'],  $e);
        }
    }

    public function deleteDriverAllowanceSetting(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $driverAllowanceSetting = MstSupplierDriverAllowanceSetting::findOrFail($request->id);
            $driverAllowanceSetting->delete();

            return response()->json(['success' => 'Driver Allowance Setting deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'],  $e);
        }
    }

    public function deleteBankAccounts(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $driverAllowanceSetting = MstSupplierBankAccount::findOrFail($request->id);
            $driverAllowanceSetting->delete();

            return response()->json(['success' => 'Driver Allowance Setting deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'],  $e);
        }
    }

    public function deleteFiles(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $driverAllowanceSetting = MstSupplierFile::findOrFail($request->id);
            $driverAllowanceSetting->delete();

            return response()->json(['success' => 'Driver Allowance Setting deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete tax.'],  $e);
        }
    }
    public function createSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups-create');
    }
}
