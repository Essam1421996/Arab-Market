<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response;
use Carbon\Carbon;
use DB;


use App\User;
use App\Product;
use App\Collection;
use App\Cart;
use App\Wishlist;
use App\Coupon;

class Gift extends Model
{
     public function user(){
         return $this->belongsTo('App\User','user_id','id');
        
     }

     public function coupons(){
         return $this->hasMany('App\Coupon','coupon_id','id');
     }
	 
}
