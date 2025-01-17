<?php

namespace App\Http\Controllers\ShopAuth;

use App\Http\Controllers\Controller;  // Make sure this is the correct import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Routing\Controllers\Middleware;


class LoginController extends Controller  // Inheriting from Controller class
{
    public function __construct()
    {
        // $this->middleware('guard:user')->except('logout');
        return [
            'guard',
            new Middleware('user', except: ['logout']),
        ];
    
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function showLoginForm()
    {
        return view('shopauth.login');
    }

    public function login(Request $request)
    {
        // Your login logic here
        print_r('I am here');
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect(route('shop.login'));
    }
}
