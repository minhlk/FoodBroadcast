<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
class cartcontroller extends Controller
{
    //
    public static function load(){

    	// $diaDiem = diadiem :: all() ;
    	return view('cart',['khuvuc' => rightPaneController::get()]);
    }
    
}
