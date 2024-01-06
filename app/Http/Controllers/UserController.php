<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function index(){

    
        $user = User::all();

        return view('user.index',compact('user'));

    }

    public function create()
    {
        return view('user.create', compact('user'));
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
   
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
    }
}
