<?php

namespace App\Http\Controllers;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Products;
use App\Category;
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

        $category = Category::pluck('name', 'id');

        return view('products.create', compact('category'));
    }
    

    public function store(Request $request)
    {
        $products = new Products();
    
        $products->name = $request->input('name');
        $products->stock = $request->input('stock');
        $products->category_id = $request->input('category_id');
    
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move('uploads/products/', $filename);
            $products->image = $filename;
        } else {
            $products->image = '';
        }
    
        $products->price = $request->input('price');
        $products->discount_percentage = $request->input('discount_percentage');
    
        // Calculate and set the price_after_discount
        $priceAfterDiscount = $this->calculatePriceAfterDiscount($request->input('price'), $request->input('discount_percentage'));
        $products->price_after_discount = $priceAfterDiscount;
        $products->save();
        

        return redirect()->route('products.index')->with('success', 'Product saved successfully');
    }
    

    public function show(Products $products)
    {
        return view('products.show',compact('products' ));
    }

    public function edit($id)
{

        $category = Category::pluck('name', 'id');
        $products = Products::find($id);
        

        return view('products.edit', compact('products', 'category'));
}    

    public function update(Request $request,$id)
{
        $products = Products::find($id);

        $products->name = $request->input('name');
        $products->stock = $request->input('stock');
        $products->category_id = $request->input('category_id');
    
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move('uploads/products/', $filename);
            $products->image = $filename;
        }
    
        $products->price = $request->input('price');
        $products->discount_percentage = $request->input('discount_percentage');
    
        // Calculate and set the price_after_discount
        $priceAfterDiscount = $this->calculatePriceAfterDiscount($request->input('price'), $request->input('discount_percentage'));
        $products->price_after_discount = $priceAfterDiscount;
        $products->save();
        

        return redirect()->route('products.index')->with('success', 'Product saved successfully');
}


    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

     /**
     * Calculate the price after discount.
     *
     * @param float $price
     * @param float $discountPercentage
     * @return float
     */
    protected function calculatePriceAfterDiscount($price, $discountPercentage)
    {
        $discountedAmount = ($discountPercentage / 100) * $price;
        $priceAfterDiscount = $price - $discountedAmount;

        return $priceAfterDiscount;
    }
}
