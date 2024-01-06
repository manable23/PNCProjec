<?php

namespace App\Http\Controllers;
use DB;
use App\Display;
use App\Products;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){


        $display = Display::with('products')
        ->get();

        return view('display.index',compact('display'));

    }
}