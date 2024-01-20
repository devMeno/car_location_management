<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cars = Cars::where('brand','=','Mercedes')->get();
        return view('home',['cars'=>$cars]);
    }
}
