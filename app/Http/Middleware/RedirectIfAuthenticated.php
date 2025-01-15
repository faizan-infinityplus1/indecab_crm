<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('admin.dashboard'));
                }
                break;

            case 'user':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('user.dashboard'));
                }
                break;

            case 'shop':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('shop.dashboard'));
                }
                break;

            default:
                return redirect()->intended('/');
                break;
        }

        return $next($request);
    }
}
