<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use DB;
use Hash;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'status' => 'nullable|string',
                'customer_detail' => 'nullable|string',
                'products_id' => 'nullable|exists:products,id',
                'category_id' => 'nullable|exists:categories,id',
        ]);

        Order::create($validatedData);

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order.edit',compact('order'));
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
        $request->validate([
            'status' => 'required',
            'customer_detail' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
        ]);

    
  
        $order->update($request->all());
  
        return redirect()->route('order.index')
                        ->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
  
        return redirect()->route('order.index')
                        ->with('success','Order deleted successfully');
    }
}
