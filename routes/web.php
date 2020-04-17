<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
     [
          'prefix' => LaravelLocalization::setLocale(),
          'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
     ], function(){ 

      

Route::prefix('/')->group(function(){
                     Route::get('/','homecontroll@index');
                     Route::get('/login','homecontroll@login')->name('login');
                     Route::get('/register','homecontroll@register')->name('register');
                     Route::get('/logout','HomeController@logout')->name('logout');
                     Route::get('/home','HomeController@index');
                     Route::get('/contact','homecontroll@contact')->name('contact');
                     Route::get('/about_us','homecontroll@about_us')->name('about_us');
                     Route::get('/FAQ','homecontroll@FAQ')->name('FAQ');
                     Route::get('/error_404','homecontroll@error_404')->name('error_404');
                     Route::get('/blog_standard','homecontroll@blog_standard')->name('blog_standard');
                     Route::get('/blog_single','homecontroll@blog_single')->name('blog_single');
                     Route::get('/shortcodes','homecontroll@shortcodes')->name('shortcodes');
                     Route::get('/typography','homecontroll@typography')->name('typography');
                     Route::get('/shortcodes','homecontroll@shortcodes')->name('shortcodes');
                     
                     


       
    Route::prefix('/afterlogin')->group(function (){
                       Route::get('/home','homecontroll@collections_show')->name('home');
                       Route::get('/collection/{collection_id}/show','productcontroll@collection_show')->name('collection_show');
                       Route::get('/product/{prod_id}/add_cart','cartcontroll@add_product')->name('add_cart');
                       Route::post('/product/{prod_id}/add_cart','cartcontroll@adding_product')->name('adding_cart');
                       Route::get('/product/{prod_id}/add_wish','cartcontroll@add_wish')->name('add_wish');
                       Route::get('/collection/{collection_id}/product/{prod_id}/show','productcontroll@single_product')->name('single_product');
                       Route::get('/show_cart','cartcontroll@show_cart')->name('show_cart');
                       Route::get('/delete_cart/{cart_id}','cartcontroll@delete_cart')->name('delete_cart');
                       Route::post('/apply_coupon','OrderController@apply_coupon')->name('apply_coupon');
                       Route::get('/checkout','OrderController@checkout_show')->name('checkout');
                       Route::post('/add_order','OrderController@add_order')->name('add_order');
                       Route::post('/add_review/{product_id}','productcontroll@add_review')->name('add_review');
                       Route::any('/search','productcontroll@search')->name('search');   //important
					    
						Route::get('stripe', 'StripeController@index');
                        Route::post('store', 'StripeController@store');

      
                      
    Route::prefix('/admin')->group(function (){
            Route::get('/home','admincontroll@index')->name('admin_home');
            Route::get('/forms','admincontroll@show_forms')->name('show_forms');
            Route::get('/categories','admincontroll@show_categories')->name('categories');
            Route::get('/users','admincontroll@show_users')->name('users');
            Route::get('/products','admincontroll@show_products')->name('products');
            Route::get('/coupons','admincontroll@show_coupons')->name('coupons');
            Route::post('/add_product','admincontroll@add_product')->name('add_product');
            Route::post('/add_collection','admincontroll@add_collection')->name('add_collection');
            Route::post('/add_coupon','admincontroll@add_coupon')->name('add_coupon');
            /**************************edit and delte**************************** */
            Route::get('/delete_product/{prod_id}','admincontroll@delete_product')->name('delete_product');
            Route::post('/product_update/{prod_id}','admincontroll@product_update')->name('product_update');
            Route::get('/delete_user/{user_id}','admincontroll@delete_user')->name('delete_user');
            Route::post('/collection_update/{collection_id}','admincontroll@collection_update')->name('collection_update');
            Route::get('/delete_collection/{collection_id}','admincontroll@delete_collection')->name('delete_collection');
            Route::post('/coupon_update/{coupon_id}','admincontroll@coupon_update')->name('coupon_update');
            Route::get('/delete_coupon/{coupon_id}','admincontroll@delete_coupon')->name('delete_coupon');



          });

        });
   });
   Auth::routes();

 });

          
