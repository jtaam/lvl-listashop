<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 2/22/19
 * Time: 9:00 AM
 */
View::composer('frontend.website.inc.feature_product_area', function($view)
{
//    $featuredProducts = \App\Models\Shop\Featured::where('featured', 1)->take(8)->get();
    $featuredProducts = \App\Models\Shop\Featured::all();
    $view->with('featuredProducts', $featuredProducts);
});