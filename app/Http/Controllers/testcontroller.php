<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
use App\khuvuc;
use App\thanhpho;
class testcontroller extends Controller
{
    //

    public static function test(){

    	// echo diadiem::where('idKhuVuc','=','1') -> get() ;
    	// $khuvucs =  khuvuc::all();// -> diadiem() -> find(1) -> get() ;
    	// echo $khuvucs[0] -> diadiem ;
    	echo thanhpho::all();
    }
}
