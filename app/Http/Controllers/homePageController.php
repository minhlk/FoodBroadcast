<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homePageController extends Controller
{
    //
    public function load(){
    	// $monAns = DB::table('monan')->get(); 
    	$monAns = DB::table('monan') -> join('chitietmonan','monan.idMonAn','=','chitietmonan.idMonAn')-> join('khuvuc','khuvuc.idKhuVuc','=','chitietmonan.idKhuVuc')->get();
    	return view('index',['monAns' => $monAns]);

    }
}
