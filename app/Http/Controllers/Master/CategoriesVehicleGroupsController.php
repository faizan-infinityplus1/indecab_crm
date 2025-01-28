<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstCatVehGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoriesVehicleGroupsController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.vehiclegroups.index');
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
            dd($validator->errors()->first(),'i m here');
            return redirect(route('vehiclegroups.manage'))->withInput();
        }
        if ($request->hasFile('image')) {
            $request['img'] = uniqid() . '.' . pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);

            // $request->image->storeAs('public/images/categories-vehicle-groups', $request->img);
            $request->image->move(public_path('storage/images/categories-vehicle-groups'), $request->img);
        }
        $vehGrpName = MstCatVehGroup::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->img,
            'seat_capacity' => $request->seat_capacity,
            'lug_count' => $request->lug_count,
        ]);
        if ($vehGrpName) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('vehiclegroups.manage'));
        }
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
            $old_image = "/storage/images/categories-vehicle-groups/";
            File::delete(public_path($old_image . $vehGrpName->image));

            $request['img'] = uniqid() . '.' . pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
            $request->image->move(public_path('storage/images/categories-vehicle-groups'), $request->img);
        }

        $vehGrpName->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->img,
            'seat_capacity' => $request->seat_capacity,
            'lug_count' => $request->lug_count,
        ]);
        if ($vehGrpName) {
            // connectify('success', 'Product Added', 'Duty Type has been added successfully !');
            return redirect(route('vehiclegroups.manage', $request->id));
        }
    }
}
