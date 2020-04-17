<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Product;
use App\Collection;
use App\Review;


class productcontroll extends Controller
{

    public function collection_show($collection_id){
        $collection_name=Collection::where('id',$collection_id)->value('name');
        $collect=Collection::where('id',$collection_id)->get();
        $products=Product::where('category_id',$collection_id)->get();
        $search_products=null;
         
        return view('afterlogin.shop-catalog',compact('products','collect','collection_id','search_products'));

    }
    public function single_product($category_id,$prod_id){

           return view('afterlogin.shop-single-product',compact('category_id','prod_id'));
    }

    public function add_review(Request $request,$product_id){
    
        $userr=Review::select('user_id')->where('user_id',Auth::user()->id)->count();
        $productt=Review::where('product_id',$product_id)->count();
          if(($userr>0)&&($productt>0)){
            $rev=Review::where([['product_id',$product_id],['user_id',Auth::user()->id]])->get();

            $rev[0]->degree=$request->input('num');
            $rev[0]->content=$request->input('content');
            $rev[0]->save();
            return back()->with('success','تم إضافة التقييم بنجاح');

        
    }
    else{
        $review=new Review();
        $review->product_id=$product_id;
        $review->user_id=Auth::user()->id;
        $review->content=$request->input('content');
        $review->degree=$request->input('num');
        $review->save();
        return back()->with('success','تم إضافة التقييم بنجاح');
    }


    }
    public function search(Request $request){
       /* $category_id=Collection::where('category',$request->input('categories'))->value('id');
        $allproducts=Product::all();

        foreach($allproducts as $product){
            if($request->input('colors')!=null){
                
        foreach(explode(',',$product->color) as $color){

            if($color==$request->input('colors')){
                $product_color=$request->input('color');
            }
        
        }
      }
    }
                  foreach
        $products=Product::where([['category_id',$category_id],[]])*/
        /********************************* */
        /********************************** */
        $search_products=array();
        $category_id=Collection::where('category',$request->input('collections'))->value('id');
        
            
           foreach(Product::products_with_specific_size($request->input('colors'),$request->input('sizes')) as $key=>$product){
               if($request->input('categories') !=null){
                if($product->category_id == $category_id){

                    array_push($search_products,$product);
                }
                else
                array_push($search_products,$product);
            }
            else
            array_push($search_products,$product);
                              
               
           
        }
       // dd($search_products);
           return view('afterlogin.searching',compact('search_products'));
      }

    
}
