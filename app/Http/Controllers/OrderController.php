<?php

namespace App\Http\Controllers;

use App\Products;
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
    public function create(Request $request,$id)
    {
        $products = Products::find($id);
    

    return view('order.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = Products::all();
        $validatedData = $request->validate([
                'customer_name' => 'nullable|string',
                'phone_number' => 'nullable|string',
                'address' => 'nullable|string',
                'product_name' => 'nullable|string'
        ]);
         
        Order::create($request->all());

        return redirect()->route('orders.index',compact('products'))
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
