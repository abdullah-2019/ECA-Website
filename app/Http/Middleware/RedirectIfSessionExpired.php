<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RedirectIfSessionExpired
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && $request->session()->has('lastActivity')) {
            $lastActivity = $request->session()->get('lastActivity');
            $sessionTimeout = config('session.lifetime') * 60; // Convert minutes to seconds

            if (time() - $lastActivity > $sessionTimeout) {
                // Session expired, redirect to logout or login page
                Auth::logout(); // Logout the user
                return Redirect::route('login')->with('message', 'Your session has expired. Please log in again.');
            }
        }

        return $next($request);
    }
}

