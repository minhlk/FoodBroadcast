<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
use App\thanhpho;
use App\theloai;
class details extends Controller
{
    public function load(Request $req){
    	if($req -> has('id')){
	    	$diadiem = diadiem::where('id',$req -> id)-> first(); 
	    	$diadiems = diadiem::where('idTP',$diadiem -> idTP)-> get(); 
	    	$khuvuc = rightPaneController::get();
	    	$thanhpho = thanhpho::all();
	    	$theloai = theloai::where('id_diadiem','=', $req -> id) ->get();
	    	return view('itemdetails',
	    		compact('diadiem','diadiems','khuvuc','thanhpho','theloai')
	    		);
    	}
    	else
    		return "page error";

    }
}
