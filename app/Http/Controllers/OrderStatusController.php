<?php

namespace App\Http\Controllers;

use App\Order_status;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order = Order_status::latest()->paginate(5);

        return view('order.index',compact('order'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function show(Order_status $order_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_status $order)
    {
        //
        return view('order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_status $order,$id)
    {
        //
        $order->update($request->all());

        return redirect()->route('orderstatus.index')
            ->with('success','Order status updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_status  $order_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_status $order_status)
    {
        //
    }
}
