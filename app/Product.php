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
use App\Review;

class Product extends Model
{
    public function collections(){
        return $this->belongsTo("App\Collection",'category_id','id');
    }
    public function carts(){
        return $this->hasMany('App\Cart','product_id','id');
    }
    public function checkout(){
        return $this->belongsTo('App\Checkout','product_id','id');
    }  
    public function wishlists(){
        return $this->hasMany('App\Wishlist','product_id','id');
    }
    public function reviews(){
        return $this->hasMany('App\Review','product_id','id');
    }
    static function colors(){
        $colors=array(
        'الأسود',
           'الأبيض',
           'الوردي',
           'الأحمر',
           'البرتقالي',
           'الأصفر',
           'الأزرق',
           'الأخضر',
           'البني',
           'البنفسجي'
        );
        return $colors;
    }
    static function sizes(){
        $sizes=array(
           'كبير',
           'كبير جدا',
           'صغير',
           'صغير جدا',
           'متوسط'
           
        );
        return $sizes;
    }
    static function single_product($prod_id){
           
        $product=Product::where('id',$prod_id)->get();
        return $product;
    } 
   static function products(){
       $products=Product::all();
       return $products;
   }
   static function related_products($category_id,$prod_id){
       $products=Product::where([['category_id',$category_id],['id','!=',$prod_id]])->get();
       return $products;
   }
   static function products_with_specific_color($c){
       $products=array();
       $allproducts=Product::all();

       foreach($allproducts as $product){
           if($c !=null){
               
       foreach(explode(',',$product->color) as $color){
        if($color==$c){
            array_push($products,$product);

          }
         }
       }
       else
       array_push($products,$product);
     }
     return $products;
    }  

    static function products_with_specific_size($c,$s){
        $products=array();
        $allproducts=Product::products_with_specific_color($c);
        
           foreach($allproducts as $key=>$product){
        
            if($s !=null){
                
        foreach(explode(',',$product->size) as $size){
         if($size==$s){
             array_push($products,$product);
 
           }
          }
        
      }
      else
      array_push($products,$product);
    }
      return $products;
     }  
	 
	
}
