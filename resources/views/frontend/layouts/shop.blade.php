<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('frontend.website.inc.head')
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    @include('frontend.website.inc.top_menu')
    @include('frontend.website.inc.main_menu')
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
    @include('frontend.shop.inc.home_banner')
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area p_120">
    <div class="container">
        <div class="row flex-row-reverse">

            @yield('content')

            @if (Request::is('shop*'))
                @include('frontend.shop.inc.sidebar')
            @endif

        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

<!--================Most Product Area =================-->
    @include('frontend.shop.inc.most_searched_products')
<!--================End Most Product Area =================-->

<!--================ start footer Area  =================-->
    @include('frontend.website.inc.footer')
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
    @include('frontend.website.partials.footer_scripts')
</body>
</html>
