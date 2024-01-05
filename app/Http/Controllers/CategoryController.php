<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use Hash;

class CategoryController extends Controller
{
   
    public function index()
    {
        $category = Category::all();

        return view('category.index',compact('category'));
    }

    
    public function create()
    {
        
            return view('category.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
                'category_name' => 'nullable|string',
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully!');
    }

   
    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

   
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            // Add validation rules for other fields if needed
        ]);
    
        $category->update($request->only('name'));
        // If there are more fields to update, add them to the array inside only() method.
    
        return redirect()->route('category.index')
                        ->with('success','Category updated successfully');
    }
    

   
    public function destroy(Category $category)
    {
       
        $category->delete();
  
        return redirect()->route('category.index')
                        ->with('success','Category deleted successfully');
    }
}