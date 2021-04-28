<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Order;
use App\Phone;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $brands = Brand::all();
        $phones = Phone::all();
        $orders = Order::all();

        return view('public.order', compact('brands', 'phones', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $input = $request->all();
        Order::create($input);

        alert()->Success('User has been Updated', 'Success')->autoclose(3000);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function show( Request $request)
    {
        //
        $brands = Brand::all();
        $phones = Phone::all();
        $orders = Order::all();


        return view('dashboard.index', compact('brands', 'phones', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function destroy(Order $order)
    {
        //
    }
}
