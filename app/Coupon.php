<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use App\User;
use App\Product;
use App\Collection;
use App\Cart;
use App\Wishlist;

class Coupon extends Model
{
	public function gifts(){
		return $this->hasMany('App\Gift','coupon_id','id');
	}
    static function date_check($beginning,$ending){
    	$date_now=Carbon::now()->toDateString();
    	$dateNow=Carbon::createFromFormat('Y-m-d',$date_now);  //important
    	$starting=Carbon::createFromFormat('Y-m-d',$beginning);
    	$end=Carbon::createFromFormat('Y-m-d',$ending);

    	if($dateNow->lessThanOrEqualTo($starting)&&$starting->lessThanOrEqualTo($end)){

    		return true;
    	}
    	else
    		return false;


	}
	
	static function code_check($code){

		$coupon=Coupon::where('code',$code)->first();
		$carbon=Carbon::now();
                     if($coupon==null){
						 return false;
					 }
					 
			if($coupon->exists() &&$carbon->between(Carbon::createFromFormat('Y-m-d',$coupon->beginning)
			,Carbon::createFromFormat('Y-m-d',$coupon->ending), true)){

                           return $coupon->discount;
			}
			else
			return false;
		  
	}
	static function coupons(){
		$coupons=Coupon::all();
		return $coupons;
	}
}
