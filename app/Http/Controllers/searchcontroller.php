<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\diadiem;
use App\thanhpho;
use App\hinhthuc;
use App\theloai;
class searchcontroller extends Controller
{
    //

    public function getQuery(Request $req)
    {
   	 
	// return "<p>".Input::get("keyword")."</p>";
    	 // tim kiem theo khu vuc
        if( count($req  -> all() ) >= 2 ){
            $conditions = [
                 ['ten','like', '%%']
            ];     
            if ($req -> has('idKhuVuc')){
                array_push($conditions, ['idKhuVuc','=',$req -> idKhuVuc]);
                $kv = khuvuc::where('id',$req -> idKhuVuc)->first();
            }
            if ($req -> has('idTP')){
                array_push($conditions, ['idTP','=',$req -> idTP]);
                $tp = thanhpho::where('id',$req -> idTP)->first();
            }
            $khuvuc = khuvuc::all();
            $thanhpho = thanhpho::all();
            $hinhthuc = hinhthuc::all();
            $diadiems = diadiem::where( $conditions ) -> paginate(8);
            if ($req -> has('idHT')){
                // array_push($conditions, ['idHT','=',$req -> idHT]); //??
                $idHT = $req -> idHT; 
                $ht = hinhthuc::where('id',$req -> idHT)->first();
            return view('filter',
                compact(
                 'kv'
                ,'ht'
                ,'tp'
                ,'idHT'
                ,'diadiems'    
                ,'khuvuc' 
                , 'thanhpho'
                , 'hinhthuc' 
                ));
              
            }
           
            return view('filter',
                compact(
                 'kv'
                ,'ht'
                ,'tp'
                ,'diadiems'    
                ,'khuvuc' 
                , 'thanhpho'
                , 'hinhthuc' 
                ));
        }
    	elseif($req -> has('idKhuVuc') )
    	 	return view('filter',
    	 		['kv' =>khuvuc::where('id',$req -> idKhuVuc)->first()
                ,'diadiems' => diadiem::where('idKhuVuc','=',$req -> idKhuVuc) -> paginate(8)
                ,'khuvuc' =>khuvuc::all()
                , 'thanhpho' => thanhpho::all()
                , 'hinhthuc' => hinhthuc::all()

                ]);
        elseif ($req -> has('idTP')) {
            return view('filter'
                ,['tp' =>thanhpho::where('id',$req -> idTP)->first()
                ,'diadiems' => diadiem::where('idTP','=',$req -> idTP) -> paginate(8)
                ,'khuvuc' =>khuvuc::all()
                ,'thanhpho' => thanhpho::all()
                , 'hinhthuc' => hinhthuc::all()
                ]);
         }
         elseif ($req -> has('idHT')) {
            return view('filter'
                ,['ht' =>hinhthuc::where('id',$req -> idHT)->first()
                ,'theloais' => theloai::where('id_hinhthuc','=',$req -> idHT) -> paginate(8)
                ,'khuvuc' =>khuvuc::all()
                , 'hinhthuc' => hinhthuc::all()
                ,'thanhpho' => thanhpho::all()]);
         }
    	else {
    	 	$key = $req -> keyword;

    	 	return view('search',[
                'keyword' => $key 
                ,'diadiems' => diadiem::where('ten','like', '%'.$key.'%') -> paginate(8)
                ,'khuvuc' => khuvuc::getKhuVuc()
                , 'thanhpho' => thanhpho::all()
                , 'hinhthuc' => hinhthuc::all()
                ]);
    	 	}

    } 
}
