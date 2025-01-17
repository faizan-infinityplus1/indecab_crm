<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class LoginController extends Controller
{

    public function __construct()
    {
        // $this->middleware('guard:user')->except('logout');
        return [
            'guard',
            new Middleware('admin', except: ['logout']),
        ];
    }
    public function showLoginForm()
    {
        return view('adminauth.login');
    }

    public function login(Request $request)
    {
        //     'email'    => 'required|email',
        //     'password' => 'required',
        // ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remeber)) {
            return redirect()->intended(url()->previous());
        }

        return redirect(route('login'))->withInput($request->only('email', 'remember'))->withErrors(['email' => Lang::get('auth.failed')]);    
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->intended(route('login'));
    }

    public function checkEmail(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            return "true";
        }
        return "false";
    }
}
