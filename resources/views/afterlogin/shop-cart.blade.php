@extends('master')
@section('title')
<title>سوق العرب | المشتريات</title>
@endsection
@section('container')
    <!-- Page Title -->
    <section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">المشتريات</h1>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- Cart -->
    <section class="section-wrap shopping-cart pt-0 ">
      <div class="container relative">
        <div class="row">

          <div class="col-md-12">
            <div class="table-wrap mb-30">
              <table class="shop_table cart table">
                <thead>
                  <tr>
                    <th class="product-name" colspan="2">المنتج</th>
                    <th class="product-price">السعر</th>
                    <th class="product-quantity">الكمية</th>
                    <th class="product-subtotal">السعر الإجمالي</th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->carts as $cart)
                  <tr class="cart_item">
                    <td class="product-thumbnail">
                      <a href="#">
                        <img src="{{asset('img/products/'.$cart->product->image)}}" alt="">
                      </a>
                    </td>
                    <td class="product-name">
                      <a href="#">{{$cart->product->name}}</a>
                      <ul>
                        <li>الحجم:{{$cart->product_size}}</li>
                        <li>اللون:{{$cart->product_color}}</li>
                      </ul>
                    </td>
                    <td class="product-price">
                      <span class="amount">{{$cart->product->price}} جنيه</span>
                    </td>
                    <td class="product-quantity">
                      <input type="hidden" value="{{$cart->quantity}}" 
                      :id="calc_dynamicID({{$cart->id}})">
                      
                      <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus" @click="dynamicID--" /><input type="number"  v-model="calc_quantity()" title="الكمية"  class="input-text qty text" /><input type="button" value="+" class="plus"  @click="dynamicID++">
                      </div>
                    </td>
                    <td class="product-subtotal">
                      <span class="amount">{{$cart->product->price * $cart->quantity}} جنيه</span>
                    </td>
                    <td class="product-remove">
                      <a href="{{route('delete_cart',$cart->id)}}" class="remove" title="إزالة المنتج">
                        <i class="icon icon_close"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>

            <div class="row mb-50">
              <div class="col-md-5 col-sm-12">
                <div class="coupon">
                <form method="post" action="{{route('apply_coupon')}}"  enctype='multipart/form-data'>
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" placeholder="كود الخصم">
                     <input type="submit" name="apply_coupon" class="btn btn-md btn-dark" value="تنفيذ">
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="actions right">
                  <input type="submit" name="update_cart" value="تعديل المشتريات" class="btn btn-md btn-dark">
                  <div class="wc-proceed-to-checkout">
                    <a href="{{route('checkout')}}" class="btn btn-md btn-color"><span>تأكيد الطلب</span></a>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
          <div class="col-md-4 col-md-offset-2 right">
            <div class="cart_totals">
              <h2 class="heading relative heading-small uppercase mb-30"> مجموع المشتريات</h2>

              <table class="table shop_table">
                <tbody>
                  <tr class="cart-subtotal">
                    <th>السعر الإجمالي</th>
                    <td>
                      <span class="amount">{{App\Cart::total_price()}} جنيه</span>
                    </td>
                  </tr>
                  <tr class="shipping">
                    <th>الشحن</th>
                    <td>
                      <span>مجاني</span>
                    </td>
                  </tr>
                  <tr class="order-total">
                    <th><strong>السعر الإجمالي بعد الخصم</strong></th>
                    <td>
                      <strong><span class="amount">{{Auth::user()->gifts()->value('totalprice')}} جنيه</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div> <!-- end col cart totals -->

        </div> <!-- end row -->     

        
      </div> <!-- end container -->
    </section> <!-- end cart -->      
@endsection