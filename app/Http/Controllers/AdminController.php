<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }
        return redirect()->back();
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('adminLogin');
    }
}
