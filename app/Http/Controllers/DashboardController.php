<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $user_type = auth()->user()->user_type;

        return view($user_type. '.dashboards.index');
    }
}
