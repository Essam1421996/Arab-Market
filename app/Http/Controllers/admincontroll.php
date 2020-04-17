<?php

namespace App\Http\Controllers;

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


class admincontroll extends Controller
{

    public function index(){
		
		
		

        return view('admin.home');
		
 
 
    }

    public function show_products(){
        return view('admin.products');
    }

    public function show_categories(){
        return view('admin.categories');
    }


    public function show_users(){
        return view('admin.users');
    }

    public function show_coupons(){
        return view('admin.coupons');
    }


    public function add_product(Request $request){
        $product=new Product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $file=$request->file('prod_img');
        $filename=$file->getClientOriginalName();
        $file->move('img/products',$filename);
        $product->image=$filename;
        $product->category_id=Collection::where('name',$request->input('category'))->value('id');
        $product->amount=$request->input('amount');
        $colors=$request->input('colors');
        $product->color=implode(',',$colors);
        $sizes=$request->input('sizes');
        $product->size=implode(',',$sizes);
        $product->description=$request->input('discribe');
        $product->save();
       
         return back()->with('success','تم إضافة المنتج بنجاح');
        
         

    }
    public function add_collection(Request $request){
        $collection=new Collection();
        $collection->name=$request->input('name');
        $collection->category=$request->input('category');
        $file=$request->file('category_img');
        $filename=$file->getClientOriginalName();
        $file->move('img/shop',$filename);
        $collection->image=$filename;
        $collection->save();
        return back()->with('success','تم إضافة القسم بنجاح');

    }
    public function add_coupon(Request $request){
        $coupons=new Coupon();

    if(Coupon::date_check($request->input('beginning'),$request->input('ending'))) {
        
            $coupons->beginning=$request->input('beginning');
            $coupons->ending=$request->input('ending');
             $coupons->code=substr(md5(rand()),0,10);         //important
             $coupons->discount=$request->input('discount');
             $coupons->save();
             return back()->with('success','تم إضافة الهدية بنجاح');

     
    }
    else
        return back()->with('fail','تأكد من صلاحية التاريخ'); 

    }

    /************************************* Edit And Delete******************************************* */
   /************** products **************** */
    public function delete_product($prod_id){
        Product::find($prod_id)->delete();
        return back()->with('success',' تم حذف المنتج بنجاح');
    }
    public function product_update(Request $request,$prod_id){
           
        $product=Product::find($prod_id);
        $product->name=$request->input('name');
        $product->category_id=Collection::where('name',$request->input('category'))->value('id');
        if($request->input('price')!=$product->price){
        $product->old_price=$product->price;
        }
        $product->price=$request->input('price');
        $product->amount=$request->input('amount');
        $colors=$request->input('colors');
        $product->color=implode(',',$colors);
        $sizes=$request->input('sizes');
        $product->size=implode(',',$sizes);
        $product->description=$request->input('discribe');
        $product->save();
        return back()->with('success',' تم تعديل المنتج بنجاح');
        
        

    }

    /***************** users *********** */
    public function delete_user($user_id){
          User::find($user_id)->delete();
          return back()->with('success','تم حذف المستخدم بنجاح');
    }
    /**************** collections************** */
    public function collection_update(Request $request,$collection_id){
        $collection=Collection::find($collection_id);
        $collection->name=$request->input('name');
        $collection->category=$request->input('category');
        $collection->save();
        return back()->with('success','تم تعديل القسم بنجاح');

    }
    public function delete_collection($collection_id){
        Collection::find($collection_id)->products()->delete();
        Collection::find($collection_id)->delete();
        return back()->with('success','تم حذف القسم بنجاح');
    }
    /*************** coupons **************** */
    public function coupon_update(Request $request,$coupon_id){
               
          $coupon=Coupon::find($coupon_id);
          
         if(Coupon::date_check($request->input('beginning'),$request->input('ending'))) 
            {
               
               
                $coupon->beginning=$request->input('beginning');
                $coupon->ending=$request->input('ending');
                $coupon->code=substr(md5(rand()),0,10);         //important
                $coupon->discount=$request->input('discount');
                $coupon->save();
                return back()->with('success','تم تعديل الهدية بنجاح');

 
            }
            else
            return back()->with('fail','تأكد من صلاحية التاريخ'); 



    }

    public function delete_coupon($coupon_id){
        Coupon::find($coupon_id)->delete();
        return back()->with('success','تم حذف الهدية بنجاح');
    }
    

}
