<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstBankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BankAccountsController extends Controller
{
    public function index()
    {
        $data = MstBankAccount::all();
        return view('backend.admin.masters.bankaccounts.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ?MstBankAccount::active()->find($id) : null;
        return view('backend.admin.masters.bankaccounts.manage', compact('data'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'account_name' => 'required|string',
                'account_number' => 'required|string',
                'ifsc_code' => 'required|string',
                'bank_name' => 'required|string',
                'bank_branch' => 'required|string',
                'cheques_in_name' => 'required|string',
                'upi_address' => 'nullable|string',
            ],
            [
                'account_name.required' => 'Please Fill Account Name',
                'account_number.required' => 'Please Fill Account Number',
                'ifsc_code.required' => 'Please Fill IFSC Code',
                'bank_name.required' => 'Please Fill Bank Name',
                'bank_branch.required' => 'Please Fill Branch Name',
                'cheques_in_name.required' => 'Please Fill Cheques In Name Of',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('bankaccounts.manage'))->withInput();
        }
        $bankAccount = MstBankAccount::create([
            'account_name' =>  $request->account_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'cheques_in_name' => $request->cheques_in_name,
            'upi_address' => $request->upi_address,
        ]);
        if ($bankAccount) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('bankaccounts.index'));
        }
    }
    public function edit(Request $request)
    {
        $bankAccount = MstBankAccount::findOrFail($request->id);
        
        return view('backend.admin.masters.bankaccounts.manage', compact('data'));
    }

    public function update(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'account_name' => 'required|string',
                'account_number' => 'required|string',
                'ifsc_code' => 'required|string',
                'bank_name' => 'required|string',
                'bank_branch' => 'required|string',
                'cheques_in_name' => 'required|string',
                'upi_address' => 'nullable|string',
            ],
            [
                'account_name.required' => 'Please Fill Account Name',
                'account_number.required' => 'Please Fill Account Number',
                'ifsc_code.required' => 'Please Fill IFSC Code',
                'bank_name.required' => 'Please Fill Bank Name',
                'bank_branch.required' => 'Please Fill Branch Name',
                'cheques_in_name.required' => 'Please Fill Cheques In Name Of',
            ]
        );
        if ($validator->fails()) {
            // dd($request->max_hours);
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('bankaccounts.manage', $request->id))->withInput();
        }
        $bankAccount = MstBankAccount::where('id', $request->id)->firstOrFail();

        $bankAccount->update([
            'account_name' =>  $request->account_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'cheques_in_name' => $request->cheques_in_name,
            'upi_address' => $request->upi_address,

        ]);
        if ($bankAccount) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            // return redirect(route('bankAccount.manage', $request->id));
            $data = MstBankAccount::all();
            return view('backend.admin.masters.bankaccounts.index', compact('data'));
        }
    }
}
