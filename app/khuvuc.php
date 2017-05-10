<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class khuvuc extends Model
{
    //
    protected $table = 'khuvuc';

	public function diadiem(){

	    return $this -> hasMany('App\diadiem','id','id');
	}
	public function thanhpho(){

	    return $this -> hasOne('App\thanhpho','id','id');
	}
	public static function getKhuVuc(){
		return DB::table('khuvuc') ->get();
	}


}
