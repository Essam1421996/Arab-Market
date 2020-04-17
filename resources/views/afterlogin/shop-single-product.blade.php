@extends('master')
@section('title')
<title>سوق العرب  | منتج</title>
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
        <li>
          <a href="#">المنتجات</a>
        </li>
        @foreach(App\Product::single_product($prod_id) as $product)
        <li class="active">
       {{$product->name}}
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Single Product -->
    
    <section class="section-wrap single-product">
      <div class="container relative">
        <div class="row">

          <div class="col-sm-6 col-xs-12 mb-60">

            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

              <div class="gallery-cell">
              <a href="{{asset('img/products/'.$product->image)}}" class="lightbox-img"  />
                  <img src="{{asset('img/products/'.$product->image)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
              <a href="{{asset('img/products/'.$product->image)}}" class="lightbox-img"  />
                  <img src="{{asset('img/products/'.$product->image)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
              <a href="{{asset('img/products/'.$product->image)}}" class="lightbox-img"  />
                  <img src="{{asset('img/products/'.$product->image)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
              <a href="{{asset('img/products/'.$product->image)}}" class="lightbox-img"  />
                  <img src="{{asset('img/products/'.$product->image)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
              <a href="{{asset('img/products/'.$product->image)}}" class="lightbox-img"  />
                  <img src="{{asset('img/products/'.$product->image)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
            </div> <!-- end gallery main -->

            <div class="gallery-thumbs">

              <div class="gallery-cell">
              <img src="{{asset('img/products/'.$product->image)}}" alt="" />
              </div>
              <div class="gallery-cell">
              <img src="{{asset('img/products/'.$product->image)}}" alt="" />
              </div>
              <div class="gallery-cell">
              <img src="{{asset('img/products/'.$product->image)}}" alt="" />
              </div>
              <div class="gallery-cell">
              <img src="{{asset('img/products/'.$product->image)}}" alt="" />
              </div>
              <div class="gallery-cell">
              <img src="{{asset('img/products/'.$product->image)}}" alt="" />
              </div>

            </div> <!-- end gallery thumbs -->

          </div> <!-- end col img slider -->

          <div class="col-sm-6 col-xs-12 product-description-wrap">
            <h1 class="product-title">{{$product->name}}</h1>
            <span>
            <input type="hidden" id="rate" value="{{App\Review::review($product->id)}}">
            @if(App\Review::review($product->id)<=4)
            <span  class="fa fa-star" v-for="item in rate"></span><span 
           class="fa fa-star-half-empty" v-if="half > 0"></span><span 
           class="fa fa-star-o" v-if="half > 0" v-for="item in  4 - rate" ></span><span 
           class="fa fa-star-o" v-for="item in  5 - rate" v-if="half == 0"></span>
         
        
        @else
        <span  class="fa fa-star" v-for="item in rate"></span><span 
       class="fa fa-star-half-empty" v-if="half > 0"></span><span 
        class="fa fa-star-o" v-for="item in  5 - rate" v-if="half == 0"></span>
         
        @endif 
              <a href="#" class="reviews_count">{{App\Review::where('product_id',$product->id)->count()}} تقييم</a>
            </span>
            <span class="price">
              <del>
                <span>{{$product->old_price}}</span>
              </del>
              <ins>
                <span class="ammount">{{$product->price}}جنيه</span>
              </ins>
            </span>
            <p class="product-description">{{$product->description}}</p>
         <form method="post" action="{{route('adding_cart',$product->id)}} "  enctype='multipart/form-data' >
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">

                  <div class="select-options">
                    <div class="row row-20">
                      <div class="col-sm-6">
                        <select class="color-select" name="color">
                          <option value='لا يوجد'>اختر اللون</option>
                          @foreach(explode(',',$product->color) as $color)
                          <option value="{{$color}}">{{$color}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col-sm-6">
                        <select class="size-options" name="size">
                        <option value='لا يوجد'>اختر الحجم</option>
                          @foreach(explode(',',$product->size) as $size)
                          <option value="{{$size}}">{{$size}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  <ul class="product-actions clearfix">
                    
                    <li>
                    @if(Auth::user())
                      <input type="submit" class="btn btn-color btn-lg add-to-cart left" value="اضف للمشتريات">
                      @else
                      <a href="{{route('login')}}" class="btn btn-color btn-lg add-to-cart left"><span>اضف للمشتريات</span></a>
                      @endif
                    </li>
              </form>                
              <li>
                <div class="icon-add-to-wishlist left">
                @if(Auth::user())
                  <a href="{{route('add_wish',$product->id)}}"><i class="icon icon_heart_alt"></i></a>
                  @else
                  <a href="{{route('login')}}"><i class="icon icon_heart_alt"></i></a>
                @endif
                </div>
              </li> 
              <li>
                <div class="quantity buttons_added">
                  <input type="button" value="-" class="minus"  @click="count--"/><input v-model="count" name="quantity" type="number"  title="Qty" class="input-text qty text"   /><input type="button" value="+" class="plus"  @click="count++" />
                </div>
              </li>          
            </ul>

            <div class="product_meta">
              <span class="sku">الرقم التعريفي: <a href="#">{{$product->id}}</a></span>
            
              <span class="posted_in">القسم: <a href="#">{{$product->collections->name}}</a></span>
            </div>

            <div class="socials-share clearfix">
              <div class="social-icons rounded">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
          </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
          <div class="col-md-12">
            <div class="tabs tabs-bb">
              <ul class="nav nav-tabs">                                 
                <li class="">
                <a href="#tab-description" data-toggle="tab" aria-expanded="true">وصف المنتج</a>
                </li>                                 
                                               
                <li>
                  <a href="#tab-reviews" data-toggle="tab">التقييمات</a>
                </li>                                 
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tab-content">
                
                <div class="tab-pane fade in " id="tab-description">
                  <p>
                  {{$product->description}}
                  </p>
                </div>
                
                <div class="tab-pane fade" id="tab-reviews">

                  <div class="reviews">
                    <ul class="reviews-list">
                      @foreach(App\Review::where('product_id',$product->id)->get() as $rev)
                      <li>
                        <div class="review-body">
                          <div class="review-content">
                            <p class="review-author"><strong>{{$rev->user()->value('name')}}</strong>{{$rev->updated_at}}</p>
                            <div>
                                <span  class="fa fa-star" v-for="item in {{$rev->degree}}"></span>
                                <span  	class="fa fa-star-o" v-for="item in  5 - {{$rev->degree}}" ></span>       
                            </div>
                            <p>{{$rev->content}}.</p>
                          </div>
                        </div>
                      </li>
                      <br>
                      @endforeach
                     
                      @if(Auth::user())
                       <br>    
                      <li>
                      <strong>إضافة تقييم</strong>
                        <div class="review-body">
                          <div class="review-content">
                          <form action="{{route('add_review',$product->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <textarea name="content"></textarea><br>

                            <span @click="user_rate=item" class="fa fa-star" v-for="item in parseInt(user_rate)"></span><span 
                            @click="user_rate=item+user_rate" class="fa fa-star-o" v-for="item in  5 - user_rate" ></span><br>
                            <input v-model="user_rate" type="hidden" name="num">
                            <button type="submit" class="btn btn-success">أضف</button>

                            </form>
                            </div>
                           </div>
                      </li>
                      @endif
                    </ul>         
                  </div> <!--  end reviews -->
                </div>
                
              </div> <!-- end tab content -->

            </div>
          </div> <!-- end tabs -->
        </div> <!-- end row -->

        
      </div> <!-- end container -->
    </section> <!-- end single product -->

  @endforeach
    <!-- Related Items -->
    <section class="section-wrap related-products pt-0">
      <div class="container">
        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>منتجات أخري لهذا القسم</small></h2>
          </div>
        </div>
        
        <div class="row row-10 rel-products">

          <div id="owl-related-products" class="owl-carousel owl-theme nopadding">
          
          @foreach(App\Product::related_products($category_id,$prod_id) as $product)
          
           <div class="product-item">
              <div class="product-img">
              <a href="{{route('single_product',[$product->category_id,$product->id])}}">
                <img src="{{asset('img/products/'.$product->image)}}" alt="" />
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
                    <span class="ammount">{{$product->price}}جنيه</span>
                  </ins>
                </span>
              </div>
            </div>
           @endforeach
            
          </div> <!-- end owl -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end related products -->
   
@endsection