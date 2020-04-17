<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Product;
use App\Collection;
use App\Cart;

class homecontroll extends Controller
{
  
   public function index(){
       $last_products=Product::orderBy('id','desc')->paginate(4);
	  
		$best_sellers=DB::table('products')->Join('carts','products.id','=','carts.product_id')->select('carts.product_id',DB::raw('SUM(carts.quantity) AS total_sales'))->
	   groupBy('carts.product_id')->orderBy('total_sales','desc')->paginate(6);
       
       return view('index',compact('last_products','best_sellers'));
   } 
   public function collections_show(){
   
    return view('afterlogin.shop-collections');

   }
    public function register(){
        
        return view('register');
    }

    public function login(){
       
     return view('login');
    }

    public function contact(){
        return view('contact');
    }

    public function about_us(){

        return view('about-us');
    }
    public function FAQ(){
        return view('faq');
    }
    public function error_404(){

        return view('404');
    }
    public function blog_standard(){
        return view('blog-standard');
    }
    public function blog_single(){
        return view('blog-single');
    }
    public function shortcodes(){

        return view('shortcodes');
    }
    public function typography(){
        return view('typography');
    }

}
