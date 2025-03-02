<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\MstEmployee;
use App\Models\MstCustomer;
use App\Models\MstEmployeeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.employees.index');
    }
    public function create($id = null)
    {
        $mstCustomer = MstCustomer::active()->get();
        return view('backend.admin.masters.employees.create', compact('mstCustomer'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string',
                    'phone_no' => 'nullable|string',
                    'alt_phone_no' => 'nullable|string',
                    'email' => 'required|string',
                    'employee_id' => 'nullable|numeric',
                    'date_of_joining' => 'nullable|date',
                    'employee_photo_name' => 'nullable|string',
                    'employee_photo_path' => 'nullable|string',
                    'designation' => 'nullable|string',
                    'gender' => 'nullable|string',
                    'dob' => 'nullable|date',
                    'blood_group' => 'nullable|string',
                    'aadhar_no' => 'nullable|numeric',
                    'pan_no' => 'nullable|string',
                    'uan_no' => 'nullable|string',
                    'dl_no' => 'nullable|string',
                    'dl_exp_date' => 'nullable|date',
                    'badge_no' => 'nullable|string',
                    'badge_exp_date' => 'nullable|date',
                    'address' => 'nullable|string',
                    'permanent_address' => 'nullable|string',
                    'father_name' => 'nullable|string',
                    'fathers_dob' => 'nullable|date',
                    'mother_name' => 'nullable|string',
                    'mothers_dob' => 'nullable|date',
                    'marriage_date' => 'nullable|date',
                    'license_issued_by' => 'nullable|string',
                    'license_city' => 'nullable|string',
                    'license_state' => 'nullable|string',
                    'license_exp_date' => 'nullable|date',
                    'police_dis_card_no' => 'nullable|string',
                    'police_dis_card_exp_date' => 'nullable|date',
                    'police_verifi_no' => 'nullable|string',
                    'police_verifi_exp_date' => 'nullable|date',
                    'bank_name' => 'nullable|string',
                    'bank_account_number' => 'nullable|string',
                    'bank_ifsc_code' => 'nullable|numeric',
                    'branches' => 'nullable|string',
                    'associate_to_sister_company' => 'nullable|string',
                    'visible_customers' => 'nullable|string',
                    // 'is_api_user' => '',
                ],
                [
                    'name.required' => 'Please Employee Name ',
                    'email.required' => 'Please Employee Name ',
                ]
            );
            if ($validator->fails()) {
                // dd($validator->errors()->first());
                notify()->error($validator->errors()->first(), 'Error');
                return redirect(route('employees.index'));
            }

            $employee = MstEmployee::create([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'alt_phone_no' => $request->alt_phone_no,
                'email' => $request->email,
                'created_employee_id' => $request->created_employee_id,
                'date_of_joining' => $request->date_of_joining,
                'employee_photo_name' => $request->employee_photo_name,
                'employee_photo_path' => $request->employee_photo_path,
                'designation' => $request->designation,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'blood_group' => $request->blood_group,
                'aadhar_no' => $request->aadhar_no,
                'pan_no' => $request->pan_no,
                'uan_no' => $request->uan_no,
                'dl_no' => $request->dl_no,
                'dl_exp_date' => $request->dl_exp_date,
                'badge_no' => $request->badge_no,
                'badge_exp_date' => $request->badge_exp_date,
                'address' => $request->address,
                'permanent_address' => $request->permanent_address,
                'father_name' => $request->father_name,
                'fathers_dob' => $request->fathers_dob,
                'mother_name' => $request->mother_name,
                'mothers_dob' => $request->mothers_dob,
                'marriage_date' => $request->marriage_date,
                'license_issued_by' => $request->license_issued_by,
                'license_city' => $request->license_city,
                'license_state' => $request->license_state,
                'license_exp_date' => $request->license_exp_date,
                'police_dis_card_no' => $request->police_dis_card_no,
                'police_dis_card_exp_date' => $request->police_dis_card_exp_date,
                'police_verifi_no' => $request->police_verifi_no,
                'police_verifi_exp_date' => $request->police_verifi_exp_date,
                'bank_name' => $request->bank_name,
                'bank_account_number' => $request->bank_account_number,
                'bank_ifsc_code' => $request->bank_ifsc_code,
                'branches' => $request->branches,
                'associate_to_sister_company' => $request->associate_to_sister_company,
                'visible_customers' => $request->visible_customers,
                'is_api_user' => $request->is_api_user ?? false,


            ]);
            $employeeId = $employee->id;

            $filesData = [];
            for ($i = 1; $request->has("file_name$i"); $i++) {
                $fileName = $request->input("file_name$i");
                if ($request->hasFile("image$i")) {
                    $file = $request->file("image{$i}");
                    $filePath = $file->store('employee-images', 'public'); // Store in 'storage/app/public/customer-images'

                    // Add file data to array
                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'employee_id' => $employeeId,
                        'name' => $fileName,
                        'image' => $filePath, // Save the unique file name
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    // dd($filesData);
                } else {

                    $filesData[] = [
                        'admin_id' => Auth::user()->id,
                        'employee_id' => $employeeId,
                        'name' => $fileName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            MstEmployeeFile::insert($filesData);

            notify()->success('Data Added Successfully', 'Success');

            return redirect(route('employees.index'));

        } catch (Exception $e) {
            notify()->error($e, 'Error');
            return redirect(route('employees.index'));
        }
    }

    public function delete(Request $request)
    {
        try {
            $employee = MstEmployee::findOrFail($request->id);
            $employee->delete();

            return redirect()->back()->with('success', 'Employee deleted successfully.');

        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete Employee.'], $e);
        }
    }
    public function deleteFiles(Request $request)
    {
        try {
            // Find the record by ID and delete it
            $deleteFiles = MstEmployeeFile::findOrFail($request->id);
            $deleteFiles->delete();

            return response()->json(['success' => 'Employee file deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete employee file.'], $e);
        }
    }
}
