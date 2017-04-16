<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    //

    public function getQuery(Request $req)
    {
   	 
	// return "<p>".Input::get("keyword")."</p>";
    	 $key = $req -> keyword;
    	 return view('search',['keyword' => $key ]);
    } 
}
