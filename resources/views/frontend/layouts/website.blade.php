<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.website.inc.head')
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    @include('frontend.website.inc.top_menu')
    @include('frontend.website.inc.main_menu')
</header>
<!--================Header Menu Area =================-->

    @yield('content')

<!--================Most Product Area =================-->
    @include('frontend.website.inc.most_product_area')
<!--================End Most Product Area =================-->

<!--================ start footer Area  =================-->
    @include('frontend.website.inc.footer')
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
    @include('frontend.website.partials.footer_scripts')
</body>
</html>