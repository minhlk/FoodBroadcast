<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
  	protected $table = 'theloai';


  	public function hinhthuc(){

    	return $this -> hasOne('App\hinhthuc','id','id_hinhthuc');

    }
    public function diadiem(){

    	return $this -> hasOne('App\diadiem','id','id_diadiem');

    }

}
