<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class StaffController extends Controller
{
    public function index(){

    
        $staff = User::all();

        return view('staff.index',compact('staff'));

    }

    public function create()
    {
        return view('staff.create', compact('staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
        //     'group_id' => $request->group_id,
        // ]);
  
        User::create($request->all());
   
        return redirect()->route('staff.index')
                        ->with('success','Staff created successfully.');
    }

}
