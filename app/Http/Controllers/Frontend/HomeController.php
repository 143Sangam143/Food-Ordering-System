<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function userfront()
    {
        if(Auth::check())
        {
            $usertype = User::findOrFail(Auth::user()->id);
    
            if ($usertype->usertype == '0') {
                return redirect()->route('home');
                
            }
            elseif($usertype->usertype == '1')
            {
                return redirect()->route('backend.home');
            }
            elseif($usertype->usertype == '2')
            {
                return redirect()->route('backend.restaurant.home');
            }
            else
            {
                Session::flush();
                Auth::logout();
                return redirect()->route('home');
            }
        }
        else
        {
            Session::flush();
            Auth::logout();
            return redirect()->route('home');
        }
    }
}
