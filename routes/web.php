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

// Website view composers
@include 'website/view-composers.php';

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

// Admin route group
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'backend', 'middleware' => ['auth']], function () {
    // Dashboard
    Route::get('dashboard', 'dashboard\DashboardController@index')->name('dashboard');
    // User Settings
    //    Route::get('settings', 'SettingsController@index')->name('settings');
    //    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    //    Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');
    //    // Tag
    //    Route::resource('tag', 'TagController');
    //    // Category
    //    Route::resource('category', 'CategoryController');

    //    // Post
    //    Route::resource('post', 'PostController');
    //    Route::get('pending/post', 'PostController@pending')->name('post.pending');
    //    Route::put('/post/{id}/approve', 'PostController@approval')->name('post.approve');
    //    // Subscriber
    //    Route::get('/subscriber', 'SubscriberController@index')->name('subscriber.index');
    //    Route::delete('/subscriber/{id}', 'SubscriberController@destroy')->name('subscriber.destroy');
    //    // Favorite
    //    Route::get('/favorite', 'FavoriteController@index')->name('favorite.index');
    //    // Comment
    //    Route::get('comments','CommentController@index')->name('comment.index');
    //    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');
    //    // Authors
    //    Route::get('authors/','AuthorController@index')->name('author.index');
    //    Route::delete('authors/{id}','AuthorController@destroy')->name('author.destroy');
    //    Route::get('authors/create','AuthorController@create')->name('author.create');
    //    Route::post('authors/store','AuthorController@store')->name('author.store');
    //    // Cloudinary
    //    Route::resource('cloudinary', 'CloudinaryController');
});