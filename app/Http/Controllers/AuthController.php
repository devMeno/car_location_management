<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();

        return to_route('goToHome');
    }

    public function doLogin(LoginRequest $request){
        $loginInfos = $request->validated();

        if(Auth::attempt($loginInfos)){
            $request->session()->regenerate();
            return redirect()->route('goToHome');
        }

        return to_route('auth.login')->withErrors([
            'email'=>'Invalid email',
        ])->onlyInput('email');
    }
}
