<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Cart;
use App\User;
use App\Product;
use App\Collection;
use App\Coupon;
use App\Order;
use App\Gift;

class OrderController extends Controller
{
    public function apply_coupon(Request $request){
        $discount=Coupon::code_check($request->input('coupon_code'));
        if(Coupon::code_check($request->input('coupon_code'))){
            $total_final_price=Cart::total_price();
            if($total_final_price ==null){
                return back()->with('fail','عفوا أنت لم تقم بشراء أي منتج');
            }
            if($discount>0){
                
                $coupon_id=Coupon::where('code',$request->input('coupon_code'))->value('id');
                 $old_gift=Gift::where('user_id',Auth::user()->id)->first();
                 if($old_gift !=null){
                 foreach(explode(',',$old_gift->coupon_id) as $c){
                    if($c == $coupon_id){
                        return back()->with('fail','للأسف تم إستخدامك لهذا الكود من قبل');
                    }

                 }
                }
                
                    if($old_gift != null){
                        $old_gift->coupon_id=$old_gift->coupon_id.','.$coupon_id;
                        $old_gift->totalprice=$old_gift->totalprice * ($discount/100);
                        $old_gift->save();
                        return back()->with('success','تم حصولك علي الهدية وتم الخصم');
                    }
                   $total_final_price=Cart::total_price()*($discount/100);
                  $gift=new Gift();
                  $gift->user_id=Auth::user()->id;
                  $gift->coupon_id=$gift->coupon_id.','.$coupon_id;
                  
                  $gift->totalprice=$total_final_price;
                  $gift->save();
                   
                  return back()->with('success','تم حصولك علي الهدية وتم الخصم');

                  
               }
        }
        else
        return back()->with('fail','تأكد من معلومات الهدية');

   }
   public function checkout_show(){

   
    return view('afterlogin.shop-checkout');
   }
    
   public function add_order(Request $request){
      /* $oldorder=Order::where('user_id',Auth::user()->id)->first();
   if($oldorder!=null){
       if($oldorder->exists()){
    
               return back()->with('success','تم تأكيد طلبك بالفعل من قبل');
       }
        
      }*/
           
            $order=new Order();
            $order->user_id=Auth::user()->id;
            $order->owner_name=$request->input('first_name').' '.$request->input('last_name');
            $order->country=$request->input('country');
            $order->town=$request->input('town');
            $order->address=$request->input('address');
            $order->postcode=$request->input('postcode');
            $order->email=$request->input('email');
            $order->phone=$request->input('phone');
            foreach(Auth::user()->carts as $cart){
                $order->carts_id .=$cart->id.'-';

            }
            $order->total_price=Auth::user()->gifts()->value('totalprice');
            $order->payment_method='بنك تحويل مباشر';
            $order->note=$request->input('note');
            
            /****************** delete cart************************** */
               Auth::user()->carts()->delete();
               /*******************delete gift**************************** */
               Auth::user()->gifts()->delete();
               /********************************************************* */
               $order->save();
            return back()->with('success','تم تأكيد طلبك ويرجي إنتظار تأكيد المسؤل');

   }

}
