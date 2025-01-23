<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MstDutyType;
use Illuminate\Http\Request;

class DutyTypeController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.dutytypes.index');
    }
    public function manage($id = null)
    {
        $data = $id ? MstDutyType::find($id) : null; // Find the record or default to null
        return view('backend.admin.masters.dutytypes.manage',compact('data'));
    }
    public function store(Request $request){
        dd($request);
    }

    public function update(){

    }
 
}
