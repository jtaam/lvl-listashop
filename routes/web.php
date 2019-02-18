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

// Category
Route::get('shop/{category}', 'frontend\shop\ShopController@productsByCategory')->name('shop.productsByCategory');
//// Tag
//Route::get('/news/tag/{tag}', 'Frontend\News\ArticleController@articlesByTag')->name('articlesByTag');

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

View::composer('frontend.shop.inc.sidebar', function($view)
{
    $categories = \App\Models\Shop\Category::all();
    $view->with('categories',$categories);
});
View::composer('frontend.shop.inc.sidebar', function($view)
{
    $brands = \App\Models\Shop\Brand::all();
    $view->with('brands',$brands);
});
View::composer('frontend.shop.inc.sidebar', function($view)
{
    $colors = \App\Models\Shop\Color::all();
    $view->with('colors',$colors);
});

// Menu
//View::composer('frontend.inc.menu-section', function ($view) {
//    $categories = App\Models\Blog\Category::all();
//    $view->with('categories', $categories);
//});
//View::composer('frontend.inc.menu-section', function ($view) {
//    $posts = App\Models\Blog\Post::all()->groupBy('category_id');
//    $view->with('posts', $posts);
//});