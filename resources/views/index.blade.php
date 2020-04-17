@extends('master')
@section('title')
<title>سوق العرب | الرئيسية</title>
@endsection
@section('container')
    <!-- Hero Slider -->
    <section class="section-wrap nopadding">
      <div class="container">
        <div class="entry-slider">
          <div class="flexslider" id="flexslider-hero">
            <ul class="slides clearfix">
              <li>
                <img src="img/slider/1.jpg" alt="">
                <div class="img-holder img-1"></div>
                <div class="hero-holder text-center right-align">
                  <div class="hero-lines">
                    <h1 class="hero-heading white">مجموعة 2017</h1>
                    <h4 class="hero-subheading white uppercase">الأتجاهات القديمة والحديثة لهذه السنة</h4>
                  </div>
                  <a href="#" class="btn btn-lg btn-white"><span>تسوق الآن </span></a>
                </div>
              </li>
              <li>
                <img src="img/slider/2.jpg" alt="">
                <div class="img-holder img-2"></div>
                <div class="hero-holder text-center">
                  <div class="hero-lines">
                    <h1 class="hero-heading white large">مبيعات الشتاء</h1>
                  </div>
                  <a href="#" class="btn btn-lg btn-white"><span>تسوق الآن</span></a>
                </div>
              </li>
              <li>
                <img src="img/slider/3.jpg" alt="">
                <div class="img-holder img-3"></div>
                <div class="hero-holder left-align">
                  <div class="hero-lines">
                    <h1 class="hero-heading white">خريف 2017</h1>
                    <p class="white">A-ha أفضل حل للمشكلة الالكترونية</p>
                    <p class="white">معبأة مع طن من الميزات وأنماط فريدة من نوعها</p>
                  </div>
                  <a href="#" class="btn btn-lg btn-white"><span>تسوق الآن</span></a>
                </div>
              </li>
              <li>
                <img src="img/slider/4.jpg" alt="">
                <div class="img-holder img-4"></div>
                <div class="hero-holder text-center right-align">
                  <div class="hero-lines">
                    <h1 class="hero-heading white">صيف 2017</h1>
                    <p class="white">A-ha أفضل حل للمشكلة الالكترونية</p>
                    <p class="white">معبأة مع طن من الميزات وأنماط فريدة من نوعها</p>
                  </div>
                  <a href="#" class="btn btn-lg btn-white"><span>تسوق الآن</span></a>
                </div>
              </li>
            </ul>
          </div>
        </div> <!-- end slider -->
      </div>
    </section> <!-- end hero slider -->

    <!-- New Arrivals -->
    <section class="section-wrap new-arrivals pb-40">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>أحدث المنتجات</small></h2>
          </div>
        </div>

        <div class="row row-10">              
              @foreach($last_products as $product)
              
          <div class="col-md-3 col-xs-6 last_products">
            <div class="product-item">
              <div class="product-img">
              <a href="{{route('single_product',[$product->category_id,$product->id])}}">
                  <img src="{{asset('img/products/'.$product->image)}}" alt="">
                </a>
                <div class="product-label">
                  <span class="sale">للبيع</span>
                </div>
                <div class="product-actions">
                     @if(Auth::user())
                        <a href="{{route('add_cart',$product->id)}}" class="product-add-to-cart" data-toggle="tooltip" data-placement="bottom" title="أضف للمشتريات">
                          <i class="fa fa-exchange"></i>
                        </a>
                        <a href="{{route('add_wish',$product->id)}}" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="أضف للمفضلة">
                          <i class="fa fa-heart"></i>
                        </a>               
                       @endif              
                </div>
                <a href="#" class="product-quickview">عرض سريع</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="{{route('single_product',[$product->category_id,$product->id])}}">{{$product->name}}</a>
                </h3>
                <span class="price">
                  <del>
                      <span>{{$product->old_price}}</span>
                  </del>
                  <ins>
                    <span class="ammount">{{$product->price}}جنيه</span>
                  </ins>
                </span>
              </div>
            </div>
          </div>
@endforeach
         

        </div> <!-- end row -->
      </div>
    </section> <!-- end new arrivals -->

    <!-- Newsletter -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="newsletter-box">
            <h5 class="uppercase">اشترك لتلقي تحديثاتنا</h5>
            <form>
              <input type="email" class="newsletter-input" placeholder="البريد الالكتروني">
              <input type="submit" class="newsletter-submit btn btn-md btn-dark" value="اشترك">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Best Sellers -->
    <section class="section-wrap pb-0">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>أفضل المبيعات</small></h2>
          </div>
        </div>

        <div class="row row-10">              

         
         @foreach($best_sellers as $product)
          <div class="col-md-3 col-xs-6 animated-from-right">
            
			<div class="product-item">
              <div class="product-img">
                <a href="{{route('single_product',[App\Product::find($product->product_id)->category_id,
				$product->product_id])}}">
                  <img src="{{asset('img/products/'.App\Product::find($product->product_id)->image)}}" alt="">
                </a>
                <div class="product-label">
                  <span class="sale">للبيع</span>
                </div>
                <div class="product-actions">
				  @if(Auth::user())
                        <a href="{{route('add_cart',$product->product_id)}}" class="product-add-to-cart" data-toggle="tooltip" data-placement="bottom" title="أضف للمشتريات">
                          <i class="fa fa-exchange"></i>
                        </a>
                        <a href="{{route('add_wish',$product->product_id)}}" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="أضف للمفضلة">
                          <i class="fa fa-heart"></i>
                        </a>               
                       @endif                        
                </div>
                <a href="#" class="product-quickview">عرض سريع</a>
              </div>

              <div class="product-details">
                <h3>
                  <a class="product-title" href="{{route('single_product',[App\Product::find($product->product_id)->category_id,
				$product->product_id])}}">{{APP\Product::find($product->product_id)->name}}</a>
                </h3>
                <span class="price">
                  <del>
                      <span>{{APP\Product::find($product->product_id)->old_price}}</span>
                  </del>
                  <ins>
                    <span class="ammount">{{APP\Product::find($product->product_id)->price}}جنيه</span>
                  </ins>
                </span>
              </div>                  

            </div>
		
			
			
          </div> 
          	@endforeach
          

        </div> <!-- end row -->
      </div>
    </section> <!-- end best sellers -->            

    <!-- Partners -->
    <section class="section-wrap partners pt-0 pb-50 adverts">
      <div class="container">
        <div class="row">

          <div id="owl-partners" class="owl-carousel owl-theme">

                  <div class="item">
                    <a href="#">
                      <img src="img/partners/partner_logo_dark_1.png" alt="">
                    </a>
                  </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_2.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_3.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_4.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_5.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_6.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_1.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_2.png" alt="">
              </a>
            </div>

          </div> <!-- end carousel -->
          
        </div>
      </div>
    </section> <!-- end partners -->      
    @endsection
