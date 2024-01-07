<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Products;

class DashboardController extends Controller
{
    public function index(Request $request)
{
    $products = Products::all(); // Fetch all products
    $totalProduct = $products->count();

    return view('dashboard.user', compact('products', 'totalProduct'));
}


    public function userDashboard(Request $request)
    {
        $products = Products::all(); // Fetch all products
        $totalProduct = $products->count();

        return view('dashboard.user', compact('products','totalProduct'));
    }

    public function showProductDetails($id)
    {
        $products = Products::all();
        $products = Products::findOrFail($id);

        return view('dashboard.productdetails', compact('products'));
    }
}
