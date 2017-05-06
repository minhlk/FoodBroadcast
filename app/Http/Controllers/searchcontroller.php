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
    	if($req -> has('idKhuVuc') )
    	 	return view('filter',
    	 		['kv' =>khuvuc::where('id',$req -> idKhuVuc)->first()
                ,'diadiems' => diadiem::where('idKhuVuc','=',$req -> idKhuVuc) -> get()
                ,'khuvuc' =>khuvuc::all()
                , 'thanhpho' => thanhpho::all()
                ]);
         elseif ($req -> has('idTP')) {
            return view('filter'
                ,['tp' =>thanhpho::where('id',$req -> idTP)->first()
                ,'diadiems' => diadiem::where('idTP','=',$req -> idTP) -> get()
                ,'khuvuc' =>khuvuc::all()
                ,'thanhpho' => thanhpho::all()]);
         }
         // elseif ($req -> has('idHT')) {
         //    return view('filter'
         //        ,['ht' =>hinhthuc::where('id',$req -> idHT)->first()
         //        ,'diadiems' => diadiem::where('idTP','=',$req -> idHT) -> get()
         //        ,'khuvuc' =>khuvuc::all()
         //        ,'thanhpho' => thanhpho::all()]);
         // }
    	else {
    	 	$key = $req -> keyword;
    	 	return view('search',[
                'keyword' => $key 
                ,'diadiems' => diadiem::where('ten','like', '%'.$key.'%') -> get()
                ,'khuvuc' => khuvuc::getKhuVuc()
                , 'thanhpho' => thanhpho::all()
                ]);
    	 	}

    } 
}
