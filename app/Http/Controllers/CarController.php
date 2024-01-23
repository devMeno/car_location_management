<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchCardRequest;
use App\Models\Cars;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index(SearchCardRequest $request){
        $cars = Cars::all();
        if($request->has('price')){
            $cars = Cars::query()->where('price','<=',$request->input('price'));
        }

        return view('allCars',['cars'=>$cars->paginate(20),'input'=>$request->validated()]);
    }

    public function show(string $slug, Cars $car){
        $order = new Orders();
        $order->fill([
            'car'=>$car->name,
            'user_id'=> 1,
        ]);
        $expectedSlug = $car->getSlug();
        if($slug !== $expectedSlug){
            return to_route('car.show',['slug'=>$expectedSlug,'car'=>$car]);
        }

        return view('carShow',['car'=>$car,'order'=>$order]);
    }
}
