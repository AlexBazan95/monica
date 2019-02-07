<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Customer;
use App;
use Session;

class FrontController extends Controller
{
    public function renderFrontend()
    {
    	$sections = Landing::getSections(1);
    	return view('front', ['sections' => $sections]);
    }

    public function addVisitor(Request $req)
    {
    	return Customer::addVisitor($req->all());
    }

}
