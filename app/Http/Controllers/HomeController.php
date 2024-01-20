<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        // User::create([
        //     'name'=>'User1',
        //     'email'=>'john@doe.fr',
        //     'password'=>Hash::make('00000')
        // ]);

        $cars = Cars::where('brand','=','Mercedes')->get();
        return view('home',['cars'=>$cars]);
    }
}
