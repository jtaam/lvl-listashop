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

Route::get('/', 'frontend\website\HomePageController@home')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shop','frontend\shop\ShopController@shop')->name('shop.home');

Route::get('shop/product/{slug}','frontend\shop\ShopController@productDetails')->name('shop.product.details');
// Comment
Route::post('shop/product/comment/{productId}','frontend\shop\CommentController@commentStore')->name('shop.comment.store');
// Review
Route::post('shop/product/review/{productId}','frontend\shop\ReviewController@reviewStore')->name('shop.review.store');

View::composer('frontend.website.inc.feature_product_area', function($view)
{
//    $featuredProducts = \App\Models\Shop\Featured::where('featured', 1)->take(8)->get();
    $featuredProducts = \App\Models\Shop\Featured::all();
    $view->with('featuredProducts', $featuredProducts);
});