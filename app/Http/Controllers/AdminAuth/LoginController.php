<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

    }

    public function showLoginForm(){
        return view('adminauth.login');

    }
}
