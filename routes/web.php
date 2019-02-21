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

// Shop routes
@include 'shop/shop-routes.php';
// Shop routes

View::composer('frontend.website.inc.feature_product_area', function($view)
{
//    $featuredProducts = \App\Models\Shop\Featured::where('featured', 1)->take(8)->get();
    $featuredProducts = \App\Models\Shop\Featured::all();
    $view->with('featuredProducts', $featuredProducts);
});
// Shop view composers
@include 'shop/shop-view-composers.php';
// Shop view composers


// Menu
//View::composer('frontend.inc.menu-section', function ($view) {
//    $categories = App\Models\Blog\Category::all();
//    $view->with('categories', $categories);
//});
//View::composer('frontend.inc.menu-section', function ($view) {
//    $posts = App\Models\Blog\Post::all()->groupBy('category_id');
//    $view->with('posts', $posts);
//});