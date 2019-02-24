@extends('frontend.layouts.shop')

@section('title', ucfirst($product->title))

@push('css')
    <style>
        .product-carousel-thumb img{
            max-width: 60px !important;
            max-height: 60px !important;
        }
        .product_description_area{
            width: 100%;
        }
        .details-login-link{
            color: #c5322d;
        }
        .details-login-link:hover{
            color: #222222;
        }
        /*Product Review*/
    </style>
    <style amp-custom>
        .rating {
            --star-size: 1.5;  /* use CSS variables to calculate dependent dimensions later */
            padding: 0;  /* to prevent flicker when mousing over padding */
            border: none;  /* to prevent flicker when mousing over border */
            unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
            text-align: left;  /* revert the RTL direction */
            user-select: none;  /* disable mouse/touch selection */
            font-size: 2em;  /* fallback - IE doesn't support CSS variables */
            font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
            cursor: pointer;
            /* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            -webkit-tap-highlight-color: transparent;
            margin-bottom: 1em;
        }
        /* the stars */
        .rating > label {
            display: inline-block;
            position: relative;
            width: 1.0em;  /* magic number to overlap the radio buttons on top of the stars */
            width: calc(var(--star-size) / 3 * 1.0em);
        }
        .rating > *:hover,
        .rating > *:hover ~ label,
        .rating:not(:hover) > input:checked ~ label {
            color: transparent;  /* reveal the contour/white star from the HTML markup */
            cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
        }
        .rating > *:hover:before,
        .rating > *:hover ~ label:before,
        .rating:not(:hover) > input:checked ~ label:before {
            content: "★";
            position: absolute;
            left: 0;
            color: gold;
        }
        .rating > input {
            position: relative;
            transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
            transform: scale(var(--star-size));
            /* the magic numbers below correlate with the font-size */
            top: -0.5em;  /* margin-top doesn't work */
            top: calc(var(--star-size) / 6 * -1em);
            margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
            margin-left: calc(var(--star-size) / 6 * -5em);
            z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
            opacity: 0;  /* comment to see where the radio buttons are */
            font-size: initial; /* reset to default */
        }
        form.amp-form-submit-error [submit-error] {
            color: red;
        }
        .rating .fa-star{
            font-size: 70% !important;
        }
    </style>
    {{--Toastr--}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_product_img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @if (isset($product->images))
                                    @foreach ($product->images as $key=>$productImage)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="product-carousel-thumb">
                                            <img src="{{$productImage->image}}" alt="">
                                        </li>
                                    @endforeach
                                @endif

                                {{--<li data-target="#carouselExampleIndicators" data-slide-to="1" class="">--}}
                                    {{--<img src="{{asset('assets/frontend/img/product/single-product/s-product-s-3.jpg')}}" alt="">--}}
                                {{--</li>--}}
                                {{--<li data-target="#carouselExampleIndicators" data-slide-to="2" class="active">--}}
                                    {{--<img src="{{asset('assets/frontend/img/product/single-product/s-product-s-4.jpg')}}" alt="">--}}
                                {{--</li>--}}
                            </ol>
                            <div class="carousel-inner">
                                @if (isset($product))
                                    @foreach ($product->images as $image)
                                        <div class="carousel-item
                                            @if ($loop->first)
                                                active carousel-item-left
                                            @elseif($loop->last)
                                                carousel-item-next carousel-item-left
                                            @endif">
                                            <img class="d-block w-100" src="{{$image->image}}" alt="{{$product->title}}">
                                        </div>
                                    @endforeach
                                @endif

                                {{----}}
                                {{--<div class="carousel-item active carousel-item-left">--}}
                                    {{--<img class="d-block w-100" src="img/product/single-product/s-product-1.jpg" alt="Second slide">--}}
                                {{--</div>--}}
                                {{--<div class="carousel-item carousel-item-next carousel-item-left">--}}
                                    {{--<img class="d-block w-100" src="img/product/single-product/s-product-1.jpg" alt="Third slide">--}}
                                {{--</div>--}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ucfirst($product->title)}}</h3>
                        <h2>${{$product->price}}</h2>
                        <ul class="list">
                            <li><a class="active" href="{{route('shop.productsByCategory', $product->category->slug)}}"><span>Category</span> : {{ucfirst($product->category->name)}}</a></li>
                            <li>
                                <a href="#"><span>Availibility</span> :
                                    @if ($product->stock->amount < 1)
                                        No Stock
                                    @else
                                        In Stock
                                    @endif
                                </a>
                            </li>
                        </ul>
                        <p>{{$product->sub_title}}</p>

                        <div class="product_count">
                            <label for="quantity">Quantity:</label>
                            <input type="text" name="quantity" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                        <div class="card_area">
                            <a class="main_btn" href="{{route('cart.add', $product->id)}}">Add to Cart</a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>{!! $product->description !!}</p>
                </div>

                @include('frontend.shop.inc.product-specification-area')

                @include('frontend.shop.inc.product-comment-area')

                @include('frontend.shop.inc.product-review-area')
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{--<script>--}}
        {{--$(':radio').change(function() {--}}
            {{--console.log('New star rating: ' + this.value);--}}
        {{--});--}}
    {{--</script>--}}
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
@endpush
