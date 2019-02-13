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
    </style>
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
                            <li><a class="active" href="#"><span>Category</span> : {{ucfirst($product->category->name)}}</a></li>
                            <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                        </ul>
                        <p>{{$product->sub_title}}</p>
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                        <div class="card_area">
                            <a class="main_btn" href="#">Add to Cart</a>
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
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <h5>Width</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->width}} mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Height</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->height}} mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Depth</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->depth}} mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Weight</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->weight}} gm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Quality checking</h5>
                                </td>
                                <td>
                                    <h5>@if ($product->specification->quality_checking == 1)
                                        Yes
                                            @else
                                            No
                                    @endif</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Freshness Duration</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->freshness_duration}} days</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>When packeting</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->packeting}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Each Box contains</h5>
                                </td>
                                <td>
                                    <h5>{{$product->specification->box_contains}} pcs</h5>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="comment_list">

                                @if (isset($product->comments))
                                    @foreach ($product->comments as $comment)
                                        <div class="review_item">
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{$comment->user->profile->avatar}}" alt="{{$comment->user->name}}">
                                                </div>
                                                <div class="media-body">
                                                    <h4>{{$comment->user->name}}</h4>
                                                    <h5>{{date('jS M',strtotime($comment->created_at))}}, {{date('Y', strtotime($comment->created_at))}} at {{date('h:i a', strtotime($comment->created_at))}}</h5>
                                                </div>
                                            </div>
                                            <p>{{$comment->message}}</p>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Post a comment</h4>
                                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        @if ($product->reviews->count() > 1)
                                            <h4>{{$product->reviews->sum('stars')/5}}</h4>
                                            <h6>({{$product->reviews->count()}} Reviews)</h6>
                                        @else
                                            <h4>No review yet, be the first!</h4>
                                            <h6>(00 Reviews)</h6>
                                        @endif

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on 3 Reviews</h3>
                                        <ul class="list">
                                            <li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="review_list">

                                @if (isset($product->reviews))
                                    @foreach ($product->reviews as $productReview)
                                        <div class="review_item">
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{$productReview->user->profile->avatar}}" alt="{{$productReview->user->name}}">
                                                </div>
                                                <div class="media-body">
                                                    <h4>{{$productReview->user->name}}</h4>
                                                    @for ($i = 0; $i < $productReview->stars; $i++)
                                                       <i class="fa fa-star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                            <p>{{$productReview->message}}</p>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Add a Review</h4>
                                <p>Your Rating:</p>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <p>Outstanding</p>
                                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Review"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush