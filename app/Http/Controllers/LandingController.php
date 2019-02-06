<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;

class LandingController extends Controller
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

    public function getLanding()
    {
    	$sections = Landing::getSections(1);
        foreach($sections as $section){
            $idents[] = $section['uident'];
        }

        $comma_separated = implode("','", $idents);
        $identities = "'" . $comma_separated . "'";
        
    	return view('landing', ['sections' => $sections, 'identities' => $identities]);
    }

    public function renderFrontend()
    {
    	$sections = Landing::getSections(1);
    	return view('front', ['sections' => $sections]);
    }

    public function updateLanding(Request $request)
    {
        Landing::updateLandingBlocks($request->all());
        return redirect()->back();
    }

    public function knowledge()
    {
        return view('knowledge');
    }
    
}
