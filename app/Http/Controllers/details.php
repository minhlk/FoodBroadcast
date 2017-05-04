<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
class details extends Controller
{
    public function load(Request $req){
    	if($req -> has('id')){
	    	$diadiem = diadiem::where('id',$req -> id)-> first(); 
	    	$diadiems = diadiem::where('idTP',$diadiem -> idTP)-> get(); 
	    	return view('itemdetails',['diadiem' => $diadiem , 'diadiems' => $diadiems ,'khuvuc' =>rightPaneController::get() ]);
    	}
    	else
    		return "page error";

    }
}
