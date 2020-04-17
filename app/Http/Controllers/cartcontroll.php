<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Product;
use App\Collection;
use App\Cart;
use App\Wishlist;

class cartcontroll extends Controller
{
    public function adding_product($prod_id,Request $request){
        $cartt=Cart::where([['product_id',$prod_id],['user_id',Auth::user()->id]
        ,['product_color',$request->input('color')],['product_size',$request->input('size')]])->count();
        if($cartt==0){
        $cart=new Cart();
        $cart->user_id=Auth::user()->id;
        $cart->product_id=$prod_id;
        $cart->product_color=$request->input('color');
        $cart->product_size=$request->input('size');
        $cart->quantity=$request->input('quantity');
        $cart->save();
        return back()->with('success','تم شراء المنتج بنجاح');
        }
        else{
        $cart_id=Cart::where([['product_id',$prod_id],['user_id',Auth::user()->id],
        ['product_color',$request->input('color')],['product_size',$request->input('size')]])->value('id');
        $thiscart=Cart::find($cart_id);
        $thiscart->quantity+=$request->input('quantity');
        $thiscart->save();
        return back()->with('success','تم شراء المنتج بنجاح');
        }


    }
    public function add_product($prod_id){
              
        $cartt=Cart::where([['product_id',$prod_id],['user_id',Auth::user()->id]
        ,['product_color','لا يوجد'],['product_size','لا يوجد']])->count();
        if($cartt==0){
        $cart=new Cart();
        $cart->user_id=Auth::user()->id;
        $cart->product_id=$prod_id;
        $cart->product_color='لا يوجد';
        $cart->product_size='لا يوجد';
        $cart->quantity=1;
        $cart->save();
        return back()->with('success','تم شراء المنتج بنجاح');
        }
        else{
        $cart_id=Cart::where([['product_id',$prod_id],['user_id',Auth::user()->id],
        ['product_color','لا يوجد'],['product_size','لا يوجد']])->value('id');
        $thiscart=Cart::find($cart_id);
        $thiscart->quantity=$thiscart->quantity+1;
        $thiscart->save();
        return back()->with('success','تم شراء المنتج بنجاح');
        }
    }

    public function delete_cart($cart_id){

        Cart::find($cart_id)->delete();
        return back()->with('success','تم حذف شراء المنتج بنجاح');
    }

    public function add_wish($prod_id){
        $oldwish_count=Wishlist::where([['product_id',$prod_id],['user_id',Auth::user()->id]])->count();
        if($oldwish_count>0){
            return back()->with('fail','عفوا أنت قمت بتسجيل هذا المنتج في المفضلة منى قبل');
        }
        else
        $wish=new Wishlist();
        $wish->user_id=Auth::user()->id;
        $wish->product_id=$prod_id;
        $wish->save();
        return back()->with('success','تم إضافة المنتج للمفضلة بنجاح');
        
        

    }

    public function show_cart(){

        return view('afterlogin.shop-cart');
    }
}
