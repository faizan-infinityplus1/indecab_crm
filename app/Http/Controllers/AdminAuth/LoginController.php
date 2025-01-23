<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class LoginController extends Controller
{

    public function __construct()
    {
        // dd('i m at login guard');
        return [
            'guard',
            new Middleware('admin', except: ['logout']),
        ];
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


    public function showLoginForm()
    {
//         $password = '123456789'; // User's plain text password
// $hashedPassword = Hash::make($password); // Hash the password
// dd($hashedPassword);
        return view('adminauth.login');
    }

    public function login(Request $request)
    {
        //     'email'    => 'required|email',
        //     'password' => 'required',
        // ]);
        // Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remeber);
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
