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

class Review extends Model
{
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
   static function review($prod_id){

    $product=Product::find($prod_id);
    $summ=Review::where('product_id',$prod_id)->get()->sum('degree');
    $countt=Review::where('product_id',$prod_id)->count();
    if($countt>0){
        $review_count=$summ/$countt;
        return $review_count;
    }
   else{
       $review_count=0;
       return $review_count;
      }
   }
}
