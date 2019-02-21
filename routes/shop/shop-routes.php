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
//// Tag
//Route::get('/news/tag/{tag}', 'Frontend\News\ArticleController@articlesByTag')->name('articlesByTag');
// Product
Route::get('shop/product/{slug}','frontend\shop\ShopController@productDetails')->name('shop.product.details');
// Comment
Route::post('shop/product/comment/{productId}','frontend\shop\CommentController@commentStore')->name('shop.comment.store');
// Review
Route::post('shop/product/review/{productId}','frontend\shop\ReviewController@reviewStore')->name('shop.review.store');