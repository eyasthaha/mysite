<?php

namespace App\Http\Controllers;
use App\Models\ClientUser;
use Auth;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    public function userLogin(Request $request){

        $data = request()->all();

        $credentials = $request->only('email', 'password');
        if (Auth::guard('client')->attempt($credentials)) {
            return redirect()->route('home');
        }
        return 'failed';

    }

    public function userReg(){

        $data = request()->all();

        $validated = request()->validate([
            'name' => 'required',
            'email' => 'unique:users,email|required',
            'password' => 'required',
            'cpassword' => 'required',
        ]);



            if($data['password'] == $data['cpassword']){

                ClientUser::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
    
                return redirect()->back();
    
            }

    }

    public function logoutUser(){

        auth('client')->logout();

        return redirect()->route('home');
    }
            
}
