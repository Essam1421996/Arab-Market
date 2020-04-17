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
use App\Coupon;

class Order extends Model
{
    public function carts(){
        return $this->hasMany('App\Cart','carts_id','id');
    }
    public function users(){
        return $this->hasMany('App\User','user_id','id');
    }

    
   
}
