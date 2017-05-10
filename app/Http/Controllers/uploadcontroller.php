<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
class uploadcontroller extends Controller
{
    //
    public function uploadImage(Request $req){
    		
    		
    		
    		// return $file -> getClientOriginalName() ;
    		// return "success";

    		if ($req->hasFile('image')) {
    			$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
    			$path = "./uploads";
    			$file = $req -> file('image');
    			$name = $timestamp.'-'.$file->getClientOriginalName();
    			$file->move($path,$name);
    			// save to database
    			return 'upload thanh cong';
			}
			else
				return "k thanh cong";
    }
}
