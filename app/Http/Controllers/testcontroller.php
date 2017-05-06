<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diadiem;
use App\khuvuc;
use App\thanhpho;
use App\giohang;
use App\theloai;
use App\hinhthuc;


use Cart;
class testcontroller extends Controller
{
    //

    public static function test(){

    	// echo diadiem::where('idKhuVuc','=','1') -> get() ;
    	// $khuvucs =  khuvuc::all();// -> diadiem() -> find(1) -> get() ;
    	// echo $khuvucs[0] -> diadiem ;
    	// echo thanhpho::all();

    	// $carts =  Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 0, 'options' => ['idDiaDiem' => '1']]);
    		
    	// echo Cart::total();
    	// echo Cart::count();
    	// echo Cart::get();
    	// foreach (Cart::content() as $row) {
    	
     // echo "<p><strong>". $row->rowId."</strong></p>";
     // echo '<input type="text" value='.$row->qty."></td>";
     //       		echo "<td>".$row->price."</td>";
     //       		echo "<td>".$row->total."</td>";
       		
    	// }
    	// echo Cart::content()[0] -> rowid;
    		// print_r( Cart::get('92eca2f7ebd230d5853348bfb9f89cbc'));



    	
    		// $giohang = giohang::where([
    		// 	['idUser','=',1],
    		// 	['idDiaDiem','=',2]
    		// 	]) -> first();
    		
    	// foreach ($giohang as $item) {
    	// 	echo $item -> idUser;
    	// 	echo "\n";
    	// 	echo $item -> diadiem-> ten;
    	// 	echo "\n";
    	// 	echo "\n";
    	// }

		// echo $giohang -> idUser;
		// echo $giohang -> idDiaDiem;

    	// print_r(theloai::all());
    	// echo theloai::all();
    	// $theloais = theloai::where('id_diadiem','=','1') ->get() ;
    	// foreach ($theloais as $items) {
    	// 	echo "\n".$items -> diadiem -> ten;
    	// 	echo "\n".$items -> hinhthuc -> tenHT;
    	// }
    	$theloais = theloai::where('id_hinhthuc','=','2') ->get() ;
    	foreach ($theloais as $items) {
    		echo "\n".$items -> diadiem -> ten;
    		echo "\n".$items -> hinhthuc -> tenHT;
    	}


    }
}
