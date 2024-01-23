<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginResquest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(){
        return view('auth.adminLogin');
    }

    public function doLogin(AdminLoginResquest $request){
        $adminLoginInfos = $request->validated();

        if(Auth::guard('admin')->attempt($adminLoginInfos)){
            // dd($adminLoginInfos);
            $request->session()->regenerate();
            return redirect()->route('admin.car.index');
        }

        return to_route('auth.adminlogin')->withErrors([
            'email'=>'Invalid',
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();

        return to_route('goToHome');
    }
}
