<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function __construct()
    {
        return [
            'guard',
            new Middleware('admin', except: ['logout']),
        ];
    }

    public function index()
    {

        return view('adminauth.index');
    }




}
