<!DOCTYPE html>
<html>
<head>
@yield('title')
  <title>سوق العرب | الرئيسية</title>
<!--------------------- Arabic ---------------------------------->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>
  <!-- Css -->
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"  />
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/sliders.css')}}"  />
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/animate.min.css')}}"  />
  <link  type="text/css"  rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}"  />
  
  <!-- Favicons -->
 <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
     <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
<!------------------------------------------------------->

</head>
<body class="relative">
@include('flash_message')

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

   

      <div class="top-bar hidden-sm hidden-xs">
        <div class="container">
          <div class="top-bar-line">
            <div class="row">
              <div class="top-bar-links">
                <ul class="col-sm-6 top-bar-acc">
                @if(Auth::user())
                  <li class="top-bar-link"><a href="{{route('logout')}}">تسجيل الخروج</a></li>
                  @else
                  <li class="top-bar-link"><a href="#">ﺣﺴﺎﺑﻲ</a></li>
                  @endif
                  
                  <li class="top-bar-link"><a href="#">اﻟﻤﻔﻀﻠﺔ</a></li>
                  <li class="top-bar-link"><a href="#">اﻷﺧﺒﺎﺭ</a></li>
                  @if(Auth::user())
                  <li class="top-bar-link"><a href="#">اﻟﺘﺴﺠﻴﻞ</a></li>
                  @else
                  <li class="top-bar-link"><a href="/register">اﻟﺘﺴﺠﻴﻞ</a></li>

                  <li class="top-bar-link"><a href="/login">تسجيل الدخول</a></li>
                  @endif
                  <li class="top-bar-link"><a href="{{route('contact')}}">اﻟﺘﻮاﺻﻞ</a></li>
                </ul>

                <ul class="col-sm-6 text-right top-bar-currency-language">
                  <li>
                    اﻟﻌﻤﻠﺔ: <a href="#">ﺟﻨﻴﻪ<i class="fa fa-angle-down"></i></a>
                    <div class="currency-dropdown">
                      <ul>
                        <li><a href="#">ﺟﻨﻴﻪ</a></li>
                        <li><a href="#">ﺩﻭﻻﺭ</a></li>
                      </ul>
                    </div>
                  </li>
               <!--   <li class="language">
                     اﻟﻠﻐﺔ: <i class="fa fa-angle-down"></i>
                    <div class="language-dropdown">
                      <ul>
                      
                      
                      
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
					
                 <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
               </a>
             </li>
          @endforeach
		  </ul>
         </div>
                    </div>
                  </li>-->
				   <li class="language">
                    اللغة: <a href="#">العربية<i class="fa fa-angle-down"></i></a>
                    <div class="language-dropdown">
                      <ul>
                        <li><a href="#">الإنجليزية</a></li>
                        <li><a href="#">الأسبانية</a></li>
                        <li><a href="#">الألمانية</a></li>
                        <li><a href="#">الصينية</a></li>
                      </ul>
                    </div>
					</div>
                  </li>
                  <li>
                    <div class="social-icons social-icons-nav">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                  </li>
                </ul>              

              </div>
            </div>
          </div>
          
        </div>
      </div> <!-- end top bar -->
    
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">2</a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

              <div class="header-wrap">
                <div class="header-wrap-holder">

                  <!-- Search -->
                  <div class="nav-search hidden-sm hidden-xs">
                    <form method="get" class="search-form">
                    <input class="search" type="search" class="form-control" placeholder="اﺑﺤﺚ ﻫﻨﺎ">
                      <button type="submit" class="search-button">
                        <i class="icon icon_search"></i>
                      </button>
                    </form>
                  </div>

                  <!-- Logo -->
                  <div class="logo-container">
                    <div class="logo-wrap text-center">
                      <a href="{{asset('/')}}">
                        <img class="logo" src="{{asset('img/logo_dark.png')}}" alt="logo">
                      </a>
                    </div>
                  </div>
                     @if(Auth::user())
                    <!-- Cart -->
                  <div class="nav-cart-wrap hidden-sm hidden-xs">
                     <div class="nav-cart right">
                      <div class="nav-cart-outer">
                        <div class="nav-cart-inner">
                          <a href="#" class="nav-cart-icon">{{Auth::user()->carts->count()}}</a>
                        </div>
                      </div>
                      
                      <div class="nav-cart-container">
                        <div class="nav-cart-items">
                          @foreach(App\Cart::carts() as $cart)
                          <div class="nav-cart-item clearfix">
                            <div class="nav-cart-img">
                              <a href="#">
                          
                                <img src="{{asset('img/products/'.$cart->product()->value('image'))}}" alt="" >
                              </a>
                            </div>
                            <div class="nav-cart-title">
                              <a href="#">
                                 {{$cart->product()->value('name')}}
                              </a>
                              
                                <span style="float:right;">x{{$cart->quantity}}</span>
                                <span style="float:left;">{{$cart->product()->value('price')}}</span>

                               
                                
                              
                            </div>
                            <div class="nav-cart-remove">
                              <a href="{{route('delete_cart',$cart->id)}}"><i class="icon icon_close"></i></a>
                            </div>
                          </div>
                          @endforeach

                        </div> <!-- end cart items -->

                        <div class="nav-cart-summary">
                          <span class="total_price_tile"> اﻟﺴﻌﺮاﻹﺟﻤﺎﻟﻲ</span>
                          <span class="total_price">{{App\Cart::total_price()}}ﺟﻨﻴﻪ</span>
                        </div>
                     
                        <div class="nav-cart-actions mt-20">
                          <a href="{{route('show_cart')}}" class="btn btn-md btn-dark"><span>ﻋﺮﺽ اﻟﻤﺸﺘﺮﻳﺎﺕ</span></a>
                          <a href="{{route('checkout')}}" class="btn btn-md btn-color mt-10"><span>ﺗﺄﻛﻴﺪ اﻟﻄﻠﺐ</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="menu-cart-amount right">
                      <span>
                        اﻟﺴﻌﺮاﻹﺟﻤﺎﻟﻲ /
                        <a href="#">{{App\Cart::total_price()}}ﺟﻨﻴﻪ</a>
                      </span>
                    </div>
                  </div> <!-- end cart -->        
                   @endif

                </div>
              </div> <!-- end header wrap -->

              <div class="nav-wrap">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search relative">
                        <input type="search" class="form-control" placeholder="اﺑﺤﺚ ﻫﻨﺎ">
                        <button type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li>

                    <li class="dropdown">
                      <a href="{{asset('/')}}">اﻟﺮﺋﻴﺴﻴﺔ</a>
                    </li>

                    <li class="dropdown">
                      <a href="#">اﻟﺼﻔﺤﺎﺕ</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('about_us')}}">ﺗﻌﺮﻑ ﻋﻠﻴﻨﺎ</a></li>
                        <li><a href="{{route('contact')}}">اﻟﺘﻮاﺻﻞ</a></li>
                        <li><a href="/login">اﻟﺘﺴﺠﻴﻞ</a></li>
                        <li><a href="{{route('FAQ')}}">F.A.Q</a></li>
                        <li><a href="{{route('error_404')}}">404</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown">اﻷﻗﺴﺎﻡ</a>
                      <ul class="dropdown-menu megamenu">
                        <li>
                          <div class="megamenu-wrap">
                            <div class="row">

                              <div class="col-md-3 megamenu-item">
                                <h6>ﻟﻠﺮﺟﺎﻝ</h6>
                                <ul class="menu-list">
                                 
                                @foreach(App\Collection::collections() as $collection)
                                @if($collection->category=="رجال")
                                  <li><a href="{{route('collection_show',$collection->id)}}">{{$collection->name}}</a></li>
                                @endif
                                @endforeach
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>ﻟﻠﺴﻴﺪاﺕ</h6>
                                <ul class="menu-list">
                                @foreach(App\Collection::collections()  as $collection)
                                @if($collection->category == "سيدات")
                                  <li><a href="{{route('collection_show',$collection->id)}}">{{$collection->name}}</a></li>
                                @endif
                                @endforeach
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>اﻛﺴﺴﻮاﺭاﺕ</h6>
                                <ul class="menu-list">
                                @foreach(App\Collection::collections()  as $collection)
                                @if($collection->category == "اكسسوارات")
                                  <li><a href="{{route('collection_show',$collection->id)}}">{{$collection->name}}</a></li>
                                @endif
                                @endforeach
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>ﺣﻘﺎﺋﺐ</h6>
                                <ul class="menu-list">
                                @foreach(App\Collection::collections()  as $collection)
                                @if($collection->category == "حقائب")
                                  <li><a href="{{route('collection_show',$collection->id)}}">{{$collection->name}}</a></li>
                                @endif
                                @endforeach
                                </ul>
                              </div>

                            </div>
                          </div>
                        </li>
                      </ul>
                    </li> <!-- end categories -->

                    <li class="dropdown">
                      <a href="#">اﻟﻤﺤﺘﻮﻱ</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('blog_standard')}}">اﻓﺘﺮاﺿﻲ</a></li>
                        <li><a href="{{route('blog_single')}}"> ﻣﻨﺸﻮﺭ</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">اﻟﻤﺘﺠﺮ</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="#">ﻣﻨﺘﺠﺎﺕ اﻟﻘﺴﻢ</a></li>
                        <li><a href="{{route('home')}}">اﻷﻗﺴﺎﻡ</a></li>
                        <li><a href="#">ﻣﻨﺘﺞ ﻭﺣﻴﺪ</a></li>
                        @if(Auth::user())
                        <li><a href="{{route('show_cart')}}">اﻟﺘﺴﻮﻳﻖ</a></li>
                        @else
                        <li><a href="#">اﻟﺘﺴﻮﻳﻖ</a></li>
                        @endif

                        @if(Auth::user())
                        <li><a href="{{route('checkout')}}">ﺗﺄﻛﻴﺪ اﻟﻄﻠﺐ</a></li>
                        @else
                        <li><a href="#">ﺗﺄﻛﻴﺪ اﻟﻄﻠﺐ</a></li>
                        @endif
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">اﻟﻌﻨﺎﺻﺮ</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('shortcodes')}}">ﺭﻣﻮﺯ ﻗﺼﻴﺮﺓ</a></li>
                        <li><a href="{{route('typography')}}">ﻃﺒﺎﻋﺔ</a></li>
                      </ul>
                    </li>

                    <li class="mobile-links">
                    <ul>
                        <li>
                          <a href="{{route('login')}}">اﻟﺘﺴﺠﻴﻞ</a>
                        </li>
                        <li>
                          <a href="#">ﺣﺴﺎﺑﻲ</a>
                        </li>
                        <li>
                          <a href="#">اﻟﻤﻔﻀﻠﺔ</a>
                        </li>
                      </ul>
                    </li>
        
                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header> <!-- end navigation -->
  @yield('container')
  <!-- Footer Type-1 -->
  <footer class="footer footer-type-1 bg-white">
      <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
          <div class="row">

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">ﻣﻌﻠﻮﻣﺎﺕ</h5>
                <ul class="list-no-dividers">
                  <li><a href="#">ﻗﺼﺼﻨﺎ</a></li>
                  <li><a href="#">ﺗﻌﺮﻑ ﻋﻠﻴﻨﺎ</a></li>
                  <li><a href="#">ﺗﻌﺎﻣﻞ ﻣﻌﻨﺎ</a></li>
                  <li><a href="#">ﺗﻮﺻﻴﻞ اﻟﻤﻌﻠﻮﻣﺎﺕ</a></li>
                  <li><a href="#">ﺣﻴﺚ &amp; اﻟﻈﺮﻭﻑ</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">ﻣﺴﺎﻋﺪﺓ</h5>
                <ul class="list-no-dividers">                  
                  <li><a href="#">ﺗﻌﺮﻑ ﻋﻠﻴﻨﺎ</a></li>
                  <li><a href="#">ﺗﺮﺗﻴﺐ اﻟﻤﺴﺎﺭ</a></li>
                  <li><a href="#">F.A.Q</a></li>
                  <li><a href="#">ﺳﻴﺎﺳﺔ اﻟﺨﺼﻮﺻﻴﺔ</a></li>
                  <li><a href="#">ﺇﺭﺟﺎﻉ</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻲ</h5>
                <ul class="list-no-dividers">
                  <li><a href="#">ﺑﺮﻳﺪﻱ اﻹﻟﻜﺘﺮﻭﻧﻲ</a></li>
                  <li><a href="#">اﻟﻤﻔﻀﻠﺔ</a></li>
                  <li><a href="#">ﺗﺎﺭﻳﺦ اﻟﻄﻠﺐ</a></li>
                  <li><a href="#">ﻫﺪاﻳﺎ ﺧﺎﺻﺔ</a></li>
                  <li><a href="#">ﺗﺮﺗﻴﺐ اﻟﻤﺴﺎﺭ</a></li>
                </ul>
              </div>
            </div>              

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h5 class="widget-title uppercase">ﺗﻌﺮﻑ ﻋﻠﻴﻨﺎ</h5>
                <p class="mb-0">سوق العرب  ﻫﻮ ﻗﺎﻟﺐ اﻟﺘﺠﺎﺭﺓ اﻹﻟﻜﺘﺮﻭﻧﻴﺔ ﻣﻊ ﺇﻣﻜﺎﻧﻴﺎﺕ ﻻ ﻧﻬﺎﻳﺔ ﻟﻬﺎ .ﺇﻧﺸﺎء ﻣﺘﺠﺮ ﻣﻼﺑﺲ ﺭﻫﻴﺒﺔ ﻣﻊ ﻫﺬا اﻟﻤﻮﺿﻮﻉ ﻣﻦ اﻟﺴﻬﻞ ﻣﻤﺎ ﻳﻤﻜﻨﻚ ﺃﻥ ﺗﺘﺨﻴﻞ</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5 class="widget-title uppercase">اﻟﺘﻮاﺻﻞ</h5>
                <address class="footer-address"><span>اﻟﻌﻨﻮاﻥ:</span></address>
                <p>اﻟﺘﻠﻴﻔﻮﻥ: <a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></p>
                <p>اﻟﺒﺮﻳﺪ اﻹﻟﻜﺘﺮﻭﻧﻲ: <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></p>
                <div class="social-icons rounded mt-20">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-vimeo"></i></a>
                </div>
              </div>
            </div> <!-- end stay in touch -->           

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="bottom-footer bg-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; 2017 ﺗﻢ اﻟﻌﻤﻞ ﻋﻠﻴﻪ ﺏ <a href="http://deothemes.com">DeoThemes</a>
              </span>
            </div>

            <div class="col-sm-4 text-center">
              <div id="back-to-top">
                <a href="#top">
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
            </div>

            <div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
              <i class="fa fa-cc-paypal"></i>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-amex"></i>
            </div>
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->
  </main> <!-- end main container -->

  <!-- jQuery Scripts -->

  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/sweetalert2.min.js')}}"></script>
 
  
 </body>
</html>