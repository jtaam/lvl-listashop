<?php
/**
 * Created by PhpStorm.
 * User: jtam
 * Date: 2/21/19
 * Time: 12:05 PM
 */
View::composer('frontend.shop.inc.sidebar', function($view)
{
    $parentCategories = \App\Models\Shop\ParentCategory::all();
    $view->with('parentCategories',$parentCategories);
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