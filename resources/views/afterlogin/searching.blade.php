@extends('master')
@section('title')
<title>سوق العرب  | المنتجات</title>
@endsection
@section('container')

    <!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="{{asset('/')}}">الرئيسية</a>
        </li>
        <li>
          <a href="{{route('home')}}">الأقسام</a>
        </li>
        <li class="active">
          منتجات البحث
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Catalogue -->
    <section class="section-wrap pt-70 pb-40 catalogue">
      <div class="container relative">
        <div class="row">

          <div class="col-md-9 catalogue-col right mb-50">

            <!-- Banner -->
            <div class="shop-filter">
              <p class="result-count">عرض:1-12 من 80 نتيجة</p>

              <form class="ecommerce-ordering">
                <select>
                  <option value="default-sorting">ترتيب إفتراضي</option>
                  <option value="price-high-to-low">السعر: الأعلي إلي الأقل</option>
                  <option value="price-low-to-high">السعر: الأقل إلي الأعلي</option>
                  <option value="by-popularity">الأكثر مبيعاً</option>
                  <option value="date">الأحدث</option>
                  <option value="rating">الأكثر تقييماً</option>
                </select>
              </form>
            </div>

            <div class="shop-catalogue grid-view">

              <div class="row row-10 items-grid">
                 @foreach($search_products as $product)    
                <div class="col-md-6 col-xs-6">
                  <div class="product-item">
                    <div class="product-img">
                      <a href="{{route('single_product',[$product->category_id,$product->id])}}">
                        <img src="{{asset('img/products/'.$product->image)}}" alt="">
                        
                      </a>
                      <div class="product-label">
                        <span class="sale">شراء</span>
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
                        <a class="product-title" href="#">{{$product->name}}</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>{{$product->old_price}}</span>
                        </del>
                        <ins>
                          <span class="ammount">${{$product->price}} جنيه</span>
                        </ins>
                      </span>
                    </div>
                  </div>
                </div>
                 @endforeach

                 
                
              </div> <!-- end row -->
            </div> <!-- end grid mode -->

            <div class="clear"></div>

            <!-- Pagination -->
            <div class="pagination-wrap">
            <p class="result-count">عرض:1-12 من 80 نتيجة</p>
              <nav class="pagination right clear">
                <a href="#"><i class="fa fa-angle-left"></i></a><span class="page-numbers current">
                1</span><a href="#">
                2</a><a href="#">
                3</a><a href="#">
                4</a><a href="#">
                <i class="fa fa-angle-right"></i></a>
              </nav>
            </div>

          </div> <!-- end col -->

          <!-- Sidebar -->
          <aside class="col-md-3 sidebar left-sidebar">
          <form action="{{route('search')}}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
           <!-- Categories -->
            <div class="widget categories">
              <h3 class="widget-title uppercase">الأقسام</h3>
              <ul class="list-no-dividers">
                <li>
                  <input type="radio" name="collections" value="رجال">رجال
                </li>
                <li>
                <input type="radio" name="collections" value="سيدات">سيدات
                </li>
                <li>
                <input type="radio" name="collections" value="اكسسوارات">اكسسوارات
                </li>
                <li>
                <input type="radio" name="collections" value="حقائب">حقائب
                </li>
                <li>
                <input type="radio" name="collections" value="ساعات">ساعات
                </li>
                <li>
                <input type="radio" name="collections" value="أحذية">أحذية
                </li>
              </ul>
            </div>

            <!-- Select size -->
            <div class="widget categories">
              <h3 class="widget-title uppercase">أختر الحجم</h3>
              <ul class="list-no-dividers">
                <li>
                <input type="radio" name="sizes" value="كبير">كبير
                </li>
                <li>
                <input type="radio" name="sizes" value="متوسط">متوسط
                </li>
                <li>
                <input type="radio" name="sizes" value="صغير">صغير
                </li>
                <li>
                <input type="radio" name="sizes" value="كبير جدا">كبير جدا
                </li>
                <li>
                <input type="radio" name="sizes" value="صغير جدا">صغير جدا
                </li>
              </ul>
            </div>

            <!-- Select color -->
            <div class="widget categories">
              <h3 class="widget-title uppercase">أختر اللون</h3>
              <ul class="list-no-dividers">
                <li>
                <input type="radio" name="colors" value="الأسود">الأسود
                </li>
                <li>
                <input type="radio" name="colors" value="الأبيض">الأبيض
                </li>
                <li>
                <input type="radio" name="colors" value="الوردي">الوردي
                </li>
                <li>
                <input type="radio" name="colors" value="الأحمر">الأحمر
                </li>
                <li>
                <input type="radio" name="colors" value="البرتقالي">البرتقالي
                </li>
                <li>
                <input type="radio" name="colors" value="الأصفر">الأصفر
                </li>
                <li>
                <input type="radio" name="colors" value="الأزرق">الأزرق
                </li>
                <li>
                <input type="radio" name="colors" value="الأخضر">الأخضر
                </li>
                <li>
                <input type="radio" name="colors" value="البني">البني
                </li>
                <li>
                <input type="radio" name="colors" value="البنفسجي">البنفسجي
                </li>
              </ul>
            </div>

            <!-- Filter by Price -->
            <div class="widget filter-by-price clearfix">
              <h3 class="widget-title uppercase">ابحث بالسعر</h3>
               
              <div id="slider-range"></div>
              <p>
                <label for="amount">السعر:</label>
                <input type="text" id="amount"  style="border:0;">
                <button type="submit" class="btn btn-sm btn-dark">ابحث</button>
              </p>
            </div>
            </form>
            
            <!-- Bestsellers -->
            <div class="widget bestsellers">
              <div class="products-widget">
                <h3 class="widget-title uppercase">أفضل المبيعات</h3>
                <ul class="product-list-widget">
                  <li class="clearfix">
                    <a href="shop-single-product.html">
                      <img src="img/shop/shop_item_9.jpg" alt="">
                      <span class="product-title">Sleeveless dress</span>
                    </a>
                    <span class="price">
                      <ins>
                        <span class="ammount">$120.00</span>
                      </ins>
                    </span>
                  </li>
                  <li class="clearfix">
                    <a href="shop-single-product.html">
                      <img src="img/shop/shop_item_10.jpg" alt="">
                      <span class="product-title">Violet Party Dress</span>
                    </a>
                    <span class="price">
                      <ins>
                        <span class="ammount">$179.00</span>
                      </ins>
                    </span>
                  </li>               
                </ul>
              </div>
            </div>

            <!-- Tags -->
            

          </aside> <!-- end sidebar -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalogue -->    
@endsection