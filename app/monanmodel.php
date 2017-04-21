<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class monanmodel extends Model
{
    //
    protected $table = 'monan';

    public function khuvucs(){

    	// return $this -> hasMany('App\khuvuc','idKhuVuc','idMonAn');
    	return $this -> hasMany('App\chitietmonan','idMonAn','idMonAn');
    }
    public static function findMonAn(){

    	return DB::table('monan') -> join('chitietmonan','monan.idMonAn','=','chitietmonan.idMonAn')-> join('khuvuc','khuvuc.idKhuVuc','=','chitietmonan.idKhuVuc')->get();
    }
}
