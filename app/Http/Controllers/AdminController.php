<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function __construct()
    {
        // dd('i m at login auth');

        // Auth::logout();
        return [
            'guard',
            new Middleware('admin', except: ['logout']),
        ];
    }

    public function index()
    {

        return view('adminauth.index');
    }
    public function showDutyTypes()
    {
        return view('backend.admin.masters.dutytypes.index');
    }
    public function createDutyTypes()
    {
        return view('backend.admin.masters.dutytypes.create');
    }



}
