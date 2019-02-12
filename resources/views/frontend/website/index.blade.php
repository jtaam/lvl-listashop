@extends('frontend.layouts.website')

@section('title' , 'Home')

@push('css')
@endpush

@section('content')

    <!--================Home Banner Area =================-->
    @include('frontend.website.inc.home_banner_area')
    <!--================End Home Banner Area =================-->

    <!--================Feature Product Area =================-->
    @include('frontend.website.inc.feature_product_area')
    <!--================End Feature Product Area =================-->

    <!--================Deal Timer Area =================-->
    @include('frontend.website.inc.timer_area')
    <!--================End Deal Timer Area =================-->

    <!--================Latest Product Area =================-->
    @include('frontend.website.inc.latest_product_area')
    <!--================End Latest Product Area =================-->

    <!--================Clients Logo Area =================-->
    @include('frontend.website.inc.clients_logo_area')
    <!--================End Clients Logo Area =================-->

@stop

@push('js')
@endpush
