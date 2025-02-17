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
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('admin.dashboard'));
                }
                break;

            default:
                // Redirect to a default dashboard for any undefined guard
                if (Auth::check()) {
                    return redirect()->intended('/dashboard');
                }
                break;
        }

        return $next($request);
    }
}
