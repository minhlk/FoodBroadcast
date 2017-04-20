<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuvuc extends Model
{
    //
    protected $table = 'khuvuc';

	public function monans(){

	    return $this -> hasMany('App\monanmodel','idMonAn','idKhuVuc');
	}

}
