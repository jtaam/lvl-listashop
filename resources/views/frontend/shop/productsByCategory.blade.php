@extends('frontend.layouts.shop')

@section('title', ucfirst($category->name))

@push('css')

@endpush

@section('content')
    <div class="col-lg-9">
        <div class="product_top_bar">
            <div class="left_dorp">
                <select class="sorting">
                    <option value="1">Default sorting</option>
                    <option value="2">Default sorting 01</option>
                    <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                    <option value="1">Show 12</option>
                    <option value="2">Show 14</option>
                    <option value="4">Show 16</option>
                </select>
            </div>
            <div class="right_page ml-auto">
                <nav class="cat_page" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item blank"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    </ul>
                    {{$products->links()}}
                </nav>
            </div>
        </div>

        <div class="latest_product_inner row">
            @if (isset($products))
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="f_p_item">
                            <div class="f_p_img">
                                <img class="img-fluid" src="{{$product->images[0]->image}}" alt="{{$product->title}}">
                                <div class="p_icon">
                                    <a href="#"><i class="lnr lnr-heart"></i></a>
                                    <a href="#"><i class="lnr lnr-cart"></i></a>
                                </div>
                            </div>
                            <a href="{{route('shop.product.details', $product->slug)}}"><h4>{{ucfirst($product->title)}}</h4></a>
                            <h5>${{$product->price}}</h5>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>No product found!</h3>
            @endif

        </div>
    </div>
@endsection

@push('js')

@endpush