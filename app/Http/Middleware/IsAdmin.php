<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            // $usertype = User::findOrFail(Auth::user()->id);
            // if ($usertype->usertype == '1') {
            //     return $next($request);
            // }
            if (Auth::user()->usertype == '1') {
                return $next($request);
            }
    
            if (Auth::user()->usertype == '0') {
                Session::flush();
                Auth::logout();
                return redirect()->route('home');
            }
    
            if (Auth::user()->usertype == '2') {
                Session::flush();
                Auth::logout();
                return redirect()->route('home');
            }
        }
        return redirect()->back()->with('error', 'You can not go in there');

        // if (!Auth::check()) {
        //     Session::flush();
        //     Auth::logout();
        //     return redirect()->route('home');
        // }

        
    }
}
