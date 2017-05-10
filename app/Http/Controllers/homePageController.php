<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\diadiem;
use App\thanhpho;
use App\hinhthuc;
class homePageController extends Controller
{
    //
    public function load(){
    	// $monAns = DB::table('monan')->get(); 
    	// $monAns = DB::table('monan') -> join('chitietmonan','monan.idMonAn','=','chitietmonan.idMonAn')-> join('khuvuc','khuvuc.idKhuVuc','=','chitietmonan.idKhuVuc')->get();

    	$diadiems = diadiem :: all() ;
    	$khuvuc = rightPaneController::get();
    	$thanhpho = thanhpho::all();
    	$hinhthuc = hinhthuc::all();
    	return view('index', compact(
    		'diadiems'
    		,'khuvuc'
    		,'thanhpho'
    		,'hinhthuc'
    		));

    }
}
