<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class khuvuc extends Model
{
    //
    protected $table = 'khuvuc';

	public function monans(){

	    return $this -> hasMany('App\monanmodel','idMonAn','idKhuVuc');
	}
	public static function getKhuVuc(){
		return DB::table('khuvuc') ->get();
	}


}
