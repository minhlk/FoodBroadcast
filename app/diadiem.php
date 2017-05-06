<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class diadiem extends Model
{
    protected $table = 'diadiem';
    public function thanhpho(){

    	return $this -> hasOne('App\thanhpho','id','idTP');
    }
    public function khuvuc(){
    	return $this -> hasOne('App\khuvuc','id','idKhuVuc');
    }
    // public function theloai(){
    //     return $this -> hasMany('App\theloai','id',)

    // }
    // public function hinhthuc($id){
    // 	return DB::table('diadiem')-> join('theloai',$id,'=','idDiaDiem') -> join('hinhthuc','idHinhThuc','=','id');
    // }
    public function hinhthuc(){
    		return $this -> belongsToMany('App\hinhthuc');
    }

    public function khuvucs($idKhuVuc){

        return $this->khuvuc()->where('id','like','%'.$idKhuVuc.'%');
    }
}
