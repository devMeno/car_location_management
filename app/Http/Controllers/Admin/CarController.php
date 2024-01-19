<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarFormRequest;
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index',['cars'=>Cars::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form',['car'=>new Cars()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarFormRequest $request)
    {
        $fuel = $request->input('fuel');
        $transmission = $request->input('transmission');
        // if($request->hasFile('image1_path') && $request->hasFile('image2_path')){
        //     $image1_path = $request->file('image1_path')->store('public/images/cars');
        //     $image2_path = $request->file('image2_path')->store('public/images/cars');

        //     $request->validated()['image1_path'] = $image1_path;
        //     $request->validated()['image2_path'] = $image2_path;
        // }
        /** @var UploadedFile $image1 */
        $image1 = $request->validated()['image1_path'];
        $image1_path = $image1->store('images/cars','public');

        /** @var UploadedFile $image2 */
        $image2 = $request->validated()['image2_path'];
        $image2_path = $image2->store('images/cars','public');

        $new_car = Cars::create([
            'brand'=>$request->validated()['brand'],
            'model'=>$request->validated()['model'],
            'fuel'=>$fuel,
            'transmission'=>$transmission,
            'description'=>$request->validated()['description'],
            'places'=>$request->validated()['places'],
            'color'=>$request->validated()['color'],
            'price'=>$request->validated()['price'],
            'available'=>$request->validated()['available'],
            'image1_path'=>$image1_path ,
            'image2_path'=>$image2_path ,
        ]);

        return to_route('admin.car.index')->with('success','Car added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $car)
    {
        return view('admin.form',['car'=>$car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarFormRequest $request, Cars $car)
    {
        $fuel = $request->input('fuel');
        $transmission = $request->input('transmission');
        if($request->hasFile('image1_path') && $request->hasFile('image2_path')){
            $image1_path = $request->file('image1_path')->store('public/images/cars');
            $image2_path = $request->file('image2_path')->store('public/images/cars');

            $request->validated()['image1_path'] = $image1_path;
            $request->validated()['image2_path'] = $image2_path;
        }

        $car->update([
            'brand'=>$request->validated()['brand'],
            'model'=>$request->validated()['model'],
            'fuel'=>$fuel,
            'transmission'=>$transmission,
            'description'=>$request->validated()['description'],
            'places'=>$request->validated()['places'],
            'color'=>$request->validated()['color'],
            'price'=>$request->validated()['price'],
            'available'=>$request->validated()['available'],
            'image1_path'=>$request->validated()['image1_path'],
            'image2_path'=>$request->validated()['image2_path'],
        ]);

        return to_route('admin.car.index')->with('success','Car modified successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $car)
    {
        $car->delete();
        return to_route('admin.car.index')->with('success','Car deleted successfully!');
    }
}
