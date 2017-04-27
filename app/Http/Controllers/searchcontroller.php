<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\diadiem;

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
    	 		,'diadiems' => khuvuc::find($req -> idKhuVuc)-> diadiem]);
    	else {
    	 	$key = $req -> keyword;
    	 	return view('search',['keyword' => $key ,'diadiems' =>diadiem::where('ten','like', '%'.$key.'%') -> get(),'khuvuc' => khuvuc::getKhuVuc()]);
    	 	}

    } 
}
