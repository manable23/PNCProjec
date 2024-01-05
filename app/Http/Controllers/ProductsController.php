<?php

namespace App\Http\Controllers;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Products;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('products.index',compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function edit(Products $products)
    {
        return view('products.edit', compact('products'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'stock' => 'required|string',
            'price' => 'required|numeric',
            'discount_percentage' =>'required|numeric',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload and storage
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        Products::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            // 'image' => $imagePath,
            'price' => $request->input('price'),
            'discount_percentage' => $request->input('discount_percentage'),
            
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Products $products)
    {
        return view('products.show',compact('products'));
    }

    public function update(Request $request, Products $products)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_percentage' =>'required|numeric',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload and storage
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $products->image; // Keep the existing image path if no new image is uploaded
        }

        // Update the existing product
        $products->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'price' => $request->input('price'),
            // 'image' => $imagePath,
            'discount_percentage' => $request->input('discount_percentage'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
