<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\diadiem;
class homePageController extends Controller
{
    //
    public function load(){
    	// $monAns = DB::table('monan')->get(); 
    	// $monAns = DB::table('monan') -> join('chitietmonan','monan.idMonAn','=','chitietmonan.idMonAn')-> join('khuvuc','khuvuc.idKhuVuc','=','chitietmonan.idKhuVuc')->get();

    	$diaDiem = diadiem :: all() ;
    	return view('index',['diadiems' => $diaDiem , 'khuvuc' => rightPaneController::get()]);

    }
}
