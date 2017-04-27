<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
class details extends Controller
{
    public function load(Request $req){
    	if($req -> has('id')){
	    	$diadiem = diadiem::where('id',$req -> id)-> first(); 
	    	return view('itemdetails',['diadiem' => $diadiem]);
    	}
    	else
    		return "page error";

    }
}
