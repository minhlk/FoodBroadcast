<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monanmodel extends Model
{
    //
    protected $table = 'monan';

    public function khuvucs(){

    	// return $this -> hasMany('App\khuvuc','idKhuVuc','idMonAn');
    	return $this -> hasMany('App\chitietmonan','idMonAn','idMonAn');
    }
}
