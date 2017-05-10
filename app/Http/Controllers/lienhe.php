<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thanhpho;
use App\hinhthuc;
class lienhe extends Controller
{
    //
    public function load(){
		    	$khuvuc = rightPaneController::get();
		    	$thanhpho = thanhpho::all();
		    	$hinhthuc = hinhthuc::all();
		    	return view('lienhe', compact(
		    		
		    		'khuvuc'
		    		,'thanhpho'
		    		,'hinhthuc'
		    		));

    }
}
