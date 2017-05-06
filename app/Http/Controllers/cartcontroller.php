<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
use App\thanhpho;
use App\giohang;
use Cart,Auth;
class cartcontroller extends Controller
{
    //
    public function load(Request $req){
    		$khuvuc = rightPaneController::get();
    		$thanhpho = thanhpho::all();
    		$cart = Cart::content();
    		if (Auth::check()) {
    		$giohang = giohang::where('idUser','=',$req -> user() -> id) -> get();
    		return view('cart',
    		compact('khuvuc','thanhpho','cart','giohang')
    		);
    	}
    		else{
	    			return view('cart',
	    		compact('khuvuc','thanhpho','cart')
	    		);
		}
    }

    public function addToCart( $id ){

    	echo $diadiem = diadiem::find($id) ;
    	Cart::add(['id' => $id
    		, 'name' =>  $diadiem -> ten
    		, 'qty' => 1, 'price' => 0
    		, 'options' => [
    			'image' => $diadiem -> image
    			,'idTP' => $diadiem -> idTP
    			,'tenTP' => $diadiem -> thanhpho -> tenTP
    			,'idKhuVuc' => $diadiem -> idKhuVuc
    			,'tenKhuVuc' => $diadiem -> khuvuc-> tenKV
    			]]);
    	// print_r(Cart::content());
    	return redirect() -> route('cart');

    }
    public function removeFromCart($rowId){

    		Cart::remove($rowId);
    		return redirect()-> route('cart');
    }
    public function saveToDB(Request $req){
		if (Auth::check()) {
		   echo $req -> user();
		   foreach (Cart::content() as $item) {
		   		
		   		try{
		   			$giohang =  new giohang;
			   		$giohang -> idUser = $req -> user() -> id;
			   		$giohang -> idDiaDiem = $item -> id;
			   		$giohang -> save();
			   	}
		   		catch(\Exception $e){
					continue;	
					}

		   }
		   	Cart::destroy();
		   
		}
		return	redirect() -> route('cart');
    }
    public function removefromDB(Request $req,$idDiaDiem){

		if (Auth::check()) {
				  $giohang = giohang::where([
    			['idUser','=',$req -> user() -> id],
    			['idDiaDiem','=',$idDiaDiem]
    			]) ;
				  $giohang -> delete();
				  return redirect() -> route('cart');
		}
		else{
    		
			echo "sai";
		}

    }
}
