<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\monanmodel;

class searchcontroller extends Controller
{
    //

    public function getQuery(Request $req)
    {
   	 
	// return "<p>".Input::get("keyword")."</p>";
    	 // tim kiem theo khu vuc
    	if($req -> has('idKhuVuc'))
    	 	return view('filter'
    	 		,['keyword' => 'khuvuc' ,'khuvuc' =>khuvuc::getKhuVuc()
    	 		,'monans' => monanmodel::findMonAn()->where('idKhuVuc',$req ->idKhuVuc)]);
    	else {
    	 	$key = $req -> keyword;
    	 	return view('search',['keyword' => $key ,'khuvuc' =>rightPaneController::get()]);
    	 	}

    } 
}
