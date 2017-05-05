<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\diadiem;
use App\thanhpho;
class searchcontroller extends Controller
{
    //

    public function getQuery(Request $req)
    {
   	 
	// return "<p>".Input::get("keyword")."</p>";
    	 // tim kiem theo khu vuc
    	if($req -> has('idKhuVuc'))
    	 	return view('filter'
    	 		,['khuvuc' =>khuvuc::getKhuVuc()
    	 		,'diadiems' => diadiem::where('idKhuVuc','=',$req -> idKhuVuc) -> get(), 'thanhpho' => thanhpho::all()]);
    	else {
    	 	$key = $req -> keyword;
    	 	return view('search',['keyword' => $key ,'diadiems' =>diadiem::where('ten','like', '%'.$key.'%') -> get(),'khuvuc' => khuvuc::getKhuVuc(), 'thanhpho' => thanhpho::all()]);
    	 	}

    } 
}
