<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderFormRequest;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.allOrders',['orders'=>Orders::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderFormRequest $request)
    {
        $new_order = Orders::create([
            'car'=>$request->validated()['car'],
            'user_id'=>$request->validated()['user_id'],
            'phone_number'=>$request->validated()['phone_number'],
            'date'=>$request->validated()['date'],
            'number_of_days'=>$request->validated()['number_of_day'],
            'number_of_car'=>$request->validated()['number_of_car'],
        ]);

        return to_route('admin.order.index')->with('success','Car added successfully!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
