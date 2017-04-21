<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
class rightPaneController extends Controller
{
    //
    public static function get(){

    	return khuvuc::all();
    } 
}
