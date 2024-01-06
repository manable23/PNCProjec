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

    public function show($id)
    {
        $display = Display::with('products')->find($id);

        return view('display.show', compact('display'));
    }

    public function store(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        // Define validation rules here
        'field_name' => 'required|max:255',
        'product_id' => 'required|exists:products,id', // Assuming 'product_id' is the foreign key
        // Add more fields and validation rules as needed
    ]);

    // Create a new Display instance
    $display = new Display();

    // Assign values from the validated data to the Display instance
    $display->field_name = $validatedData['field_name'];
    // Assign other fields similarly

    // Link the Product (assuming 'product_id' is the foreign key)
    $display->product_id = $validatedData['product_id'];

    // Save the Display instance to the database
    $display->save();

    // Redirect to the appropriate route or perform other actions
    return redirect()->route('display.show', $display->id)
                     ->with('success', 'Display item created successfully!');
}

}