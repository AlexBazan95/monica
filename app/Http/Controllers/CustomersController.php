<?php

namespace App\Http\Controllers;

use DB;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function getVisitors()
    {
    	$vis = DB::table('visitors')->paginate(20);
    	return view('visitors', compact('vis'));
    }
}
