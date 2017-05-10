<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giohang extends Model
{
    //
    protected $table = 'giohang';

    public function diadiem(){

    	return $this -> hasOne('App\diadiem','id','idDiaDiem');
    }
    
}
