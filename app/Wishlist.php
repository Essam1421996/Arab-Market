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

class Wishlist extends Model
{

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    
}
