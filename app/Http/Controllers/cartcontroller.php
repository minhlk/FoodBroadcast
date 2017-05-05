<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
use App\thanhpho;
class cartcontroller extends Controller
{
    //
    public static function load(){

    	// $diaDiem = diadiem :: all() ;
    	return view('cart',['khuvuc' => rightPaneController::get(), 'thanhpho' => thanhpho::all()]);
    }
    
}
