<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\MstCatVehGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class CategoriesVehicleGroupsController extends Controller
{
    public function index()
    {
        $data = MstCatVehGroup::all();
        return view('backend.admin.masters.vehiclegroups.index', compact('data'));
    }
    public function manage($id = null)
    {
        $data = $id ? MstCatVehGroup::active()->find($id) : null; // Find the record or default to null

        return view('backend.admin.masters.vehiclegroups.manage', compact('data'));
    }
    public function store(Request $request)
    {
        // dd('i m here',$request->apply_outside_allowance);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'description' => 'nullable|string',
                'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
                'seat_capacity' => 'nullable|numeric',
                'lug_count' => 'nullable|numeric',
            ],
            [
                'name.required' => 'Please Filled Vehicles Groups Name ',
                'image.max'       => 'Please Choose image of Maximum 1MB Size..',
                'image.required'  => 'Please Choose Atleast One Image',
                'image.image'     => 'Please Choose Only Image',
            ]
        );
        if ($validator->fails()) {
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first(), 'i m here');
            return redirect(route('vehiclegroups.manage'))->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '.' . $request->image->getClientOriginalExtension();

            // Store the file using the 'public' disk
            $path = $request->image->storeAs('categories-vehicle-groups', $fileName, 'public');

            // Save the file path to the request or database
            $request['img'] = $path;

            $vehGrpName = MstCatVehGroup::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $request->img,
                'seat_capacity' => $request->seat_capacity,
                'lug_count' => $request->lug_count,
            ]);
        } else {
            $vehGrpName = MstCatVehGroup::create([
                'name' => $request->name,
                'description' => $request->description,
                'seat_capacity' => $request->seat_capacity,
                'lug_count' => $request->lug_count,
            ]);
           
        }

        if ($vehGrpName) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('vehiclegroups.manage'));
        }
    }
    public function edit(Request $request)
    {
        $vehGrpName = MstCatVehGroup::findOrFail($request->id);
        
        return view('backend.admin.masters.vehiclegroups.manage', compact('data'));
    }
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'description' => 'nullable|string',
                'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
                'seat_capacity' => 'nullable|numeric',
                'lug_count' => 'nullable|numeric',
            ],
            [
                'name.required' => 'Please Filled Vehicles Groups Name ',
                'image.max'       => 'Please Choose image of Maximum 1MB Size..',
                'image.required'  => 'Please Choose Atleast One Image',
                'image.image'     => 'Please Choose Only Image',
            ]
        );
        if ($validator->fails()) {
            // connectify('error', 'Add Product', $validator->errors()->first());
            dd($validator->errors()->first());
            return redirect(route('vehiclegroups.manage', $request->id))->withInput();
        }

        $vehGrpName = MstCatVehGroup::where('id', $request->id)->firstOrFail();
        if ($request->hasFile('image')) {
            if ($vehGrpName->image) {
                $imageName = basename($vehGrpName->image);
                $oldImagePath = 'categories-vehicle-groups/' . $imageName;
                Log::info('Old image path: ', ['path' => $oldImagePath]);
                if (Storage::disk('public')->exists($oldImagePath)) {
                    Log::info('Deleting old image: ', ['path' => $oldImagePath]);
                    $deleted = Storage::disk('public')->delete($oldImagePath);
                    if ($deleted) {
                        Log::info('Old image deleted successfully.');
                    } else {
                        Log::error('Failed to delete old image.');
                    }
                } else {
                    Log::warning('Old image not found: ', ['path' => $oldImagePath]);
                }
            }

            $fileName = uniqid() . '.' . pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
            $path = $request->image->storeAs('categories-vehicle-groups', $fileName, 'public');
            $request['img'] = $path;

            $vehGrpName->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $request->img,
                'seat_capacity' => $request->seat_capacity,
                'lug_count' => $request->lug_count,
            ]);
        } else {
            $vehGrpName->update([
                'name' => $request->name,
                'description' => $request->description,
                'seat_capacity' => $request->seat_capacity,
                'lug_count' => $request->lug_count,
            ]);
        }

        if ($vehGrpName) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('vehiclegroups.manage', $request->id));
        }
    }
}
