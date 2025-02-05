<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstCatVehGroup;
use App\Models\MstDutyType;
use App\Models\MstSupplier;
use App\Models\MstSupplierApplicableTax;
use App\Models\MstSupplierBankAccount;
use App\Models\MstSupplierDriverAllowanceSetting;
use App\Models\MstSupplierInterstateTax;
use App\Models\MstTax;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SuppliersController extends Controller
{
    public function index()
    {
        $mstSupplier = MstSupplier::active()->with('supplierGroups')->orderBy('id', 'DESC')->get();

        return view('backend.admin.masters.suppliers.index',compact('mstSupplier'));
    }
    public function create()
    {
        $mstCatVehGroup = MstCatVehGroup::active()->get();
        $mstDutyType = MstDutyType::active()->get();
        $applicableTaxes = MstTax::active()->get();
        return view('backend.admin.masters.suppliers.create',compact('mstCatVehGroup','mstDutyType','applicableTaxes'));
    }
    public function showSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups');
    }

    public function store(Request $request){
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
                    'start' => 'nullable|numeric',
                    'end' => 'nullable|numeric',
                    'limit_allot_booking'=>'nullable|array',
                    'limit_duty_type'=>'nullable|array',
                    'vehi_group_limit'=>'nullable|array',
                    'gst_name' => 'nullable|string',
                    'gst_addr' => 'nullable|string',
                    'gst_state' => 'nullable|string',
                    'cities_ext_hig_cost'=> 'nullable|string',
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
                'limit_allot_booking' =>is_array($request->limit_allot_booking) ? implode(',', $request->limit_allot_booking) : $request->limit_allot_booking,
                'limit_duty_type' => is_array($request->limit_duty_type) ? implode(',', $request->limit_duty_type) : $request->limit_duty_type,
                'vehi_group_limit' => is_array($request->vehi_group_limit) ? implode(',', $request->vehi_group_limit) : $request->vehi_group_limit,
                'cities_ext_hig_cost' => $request->cities_ext_hig_cost,
                'gst_name' => $request->gst_name,
                'gst_addr' => $request->gst_addr,
                'gst_state' => $request->gst_state,
                'is_gst_tally' => $request->is_gst_tally ?? false,
                'revrse_chrg' => $request->revrse_chrg,
                'branch' => $request->branch,
                'is_app_logout' => $request->is_app_logout ?? false,
                'is_active' => $request->is_active ?? false,

            ]);
            $supplierId = $supplier->id;


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
            // // dd($dutyTypeTypeData);

           



            return redirect(route('suppliers.index'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit(Request $request){
        $mstCatVehGroup = MstCatVehGroup::active()->get();
        $mstDutyType = MstDutyType::active()->get();
        $applicableTaxes = MstTax::active()->get();
        $particularMstSupplier = MstSupplier::active()->where('id', $request->id)->first();
        $mstApplicableTaxesSupplier = MstSupplierApplicableTax::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstInterstateTaxesSupplier = MstSupplierInterstateTax::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        $mstDriverSupplierSetting = MstSupplierDriverAllowanceSetting::active()->with('mstSupplier')->where('supplier_id', $request->id)->get();
        return view('backend.admin.masters.suppliers.edit', compact('mstCatVehGroup','mstDutyType','applicableTaxes','particularMstSupplier', 'mstApplicableTaxesSupplier', 'mstInterstateTaxesSupplier', 'mstDriverSupplierSetting'));

    }

    public function update(){

    }
    public function createSuppliersGroups()
    {
        return view('backend.admin.masters.suppliers.groups-create');
    }
}
