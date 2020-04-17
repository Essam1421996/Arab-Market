<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Product;
use App\Collection;
use App\Cart;
use App\Wishlist;


class Cart extends Model
{
     ///////////////////////// Relations ///////////////////
    public function users(){
        return $this->belongsTo("App\User",'user_id','id');
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function order(){
        return $this->belongsTo('App\Order','carts_id','id');
    }
////////////////////////////////////////////////////////////////
    static function total_price(){
        $CartContent=Auth::user()->carts;
        $total_price=0;
        foreach ($CartContent as $cart) {
            $total_price=$total_price+($cart->product()->value('price')*$cart->quantity);
            
        }
        return $total_price;
    }
    static function  carts(){
        $carts=Cart::where('user_id',Auth::user()->id)->paginate(2);
        return $carts;
    }
   
}
