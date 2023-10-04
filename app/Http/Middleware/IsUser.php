<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return $next($request);
        }

        if (Auth::user()->usertype == '1') {
            Session::flush();
            Auth::logout();
            return redirect()->route('home');
        }

        if (Auth::user()->usertype == '0') {
            return $next($request);
        }

        if (Auth::user()->usertype == '2') {
            Session::flush();
            Auth::logout();
            return redirect()->route('home');
        }

        // Session::flush();
        // Auth::logout();
        // return redirect()->route('login');
    }
}
