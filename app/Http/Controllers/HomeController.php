<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        // Admin::create([
        //     'name'=>'Admin 1',
        //     'email'=>'admin@outlook.fr',
        //     'password'=>Hash::make('11111')
        // ]);

        $cars = Cars::where('brand','=','Mercedes')->get();
        return view('home',['cars'=>$cars]);
    }
}
