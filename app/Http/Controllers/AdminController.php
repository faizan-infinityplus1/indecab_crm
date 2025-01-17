<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;


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

        return view('adminauth.index', compact(['todays_sales', 'today_users', 'orders', 'subscribers', 'new_orders', 'new_users']));
    }




}
