<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 2/21/19
 * Time: 11:22 AM
 */
// Shop home
Route::get('shop','frontend\shop\ShopController@shop')->name('shop.home');
// Category
Route::get('shop/category/{category}', 'frontend\shop\ShopController@productsByCategory')->name('shop.productsByCategory');
// Brand
Route::get('shop/brand/{brand}', 'frontend\shop\ShopController@productsByBrand')->name('shop.productsByBrand');
// Color
Route::get('shop/color/{color}', 'frontend\shop\ShopController@productsByColor')->name('shop.productsByColor');
//// Tag
//Route::get('/news/tag/{tag}', 'Frontend\News\ArticleController@articlesByTag')->name('articlesByTag');
//Route::get('cart','frontend\shop\ShopController@showCart')->name('shop.cart');
// Cart
Route::resource('shop/cart', 'backend\dashboard\shop\CartController');
Route::get('shop/cart/{id}/add', 'backend\dashboard\shop\CartController@add')->name('cart.add');
// Product
Route::get('product/{slug}','frontend\shop\ShopController@productDetails')->name('shop.product.details');
// Comment
Route::post('product/comment/{productId}','frontend\shop\CommentController@commentStore')->name('shop.comment.store');
// Review
Route::post('product/review/{productId}','frontend\shop\ReviewController@reviewStore')->name('shop.review.store');

