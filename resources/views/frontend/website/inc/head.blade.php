<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('assets/frontend/img/favicon.png')}}" type="image/png">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>


    @include('frontend.shop.partials.head_styles')
</head>