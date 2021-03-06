@extends('frontend.layouts.shop')

@section('title', 'Cart')


@push('css')
    {{--Toastrjs--}}
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <style>
        .product_count {
            position: relative;
        }

        .cart-update {
            position: absolute;
            top: 5px;
            left: 105px;
            background-color: #ffc107 !important;
            border-color: #ffc107 !important;
            color: #0D0A0A !important;
        }

        .cart-item {
            width: 145px !important;
            height: 98px !important;
        }

        .cart_area {
            width: 100%;
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text .gray_btn {
            padding: 0px 36px;
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .main_btn {
            padding: 0px 26px;
        }

    </style>

    @if(Request::segment(2) == 'cart')
        <style>
            .left_sidebar_parent {
                display: none;
            }
        </style>
    @endif

@endpush

@section('content')
    <div class="row">
        <section class="cart_area">
            <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Remove</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if (isset($cartItems))
                                @foreach ($cartItems as $cartItem)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <a href="{{route('shop.product.details', $cartItem->options->slug)}}"
                                                       target="_blank">
                                                        <img src="{{$cartItem->options->image}}"
                                                             alt="{{$cartItem->name}}" class="cart-item">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <p>
                                                        <a href="{{route('shop.product.details', $cartItem->options->slug)}}"
                                                           class="text-dark" target="_blank">{{$cartItem->name}}</a></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>${{$cartItem->price}}</h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <form action="{{route('cart.update', $cartItem->rowId)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="text" name="qty" id="sst-{{$cartItem->id}}"
                                                           maxlength="12" value="{{$cartItem->qty}}" title="Quantity:"
                                                           class="input-text qty"/>
                                                    <button onclick="var result = document.getElementById('sst-{{$cartItem->id}}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="lnr lnr-chevron-up"></i></button>
                                                    <button onclick="var result = document.getElementById('sst-{{$cartItem->id}}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="lnr lnr-chevron-down"></i></button>
                                                    <button type="submit" class="btn-warning btn-sm cart-update"><i
                                                                class="fa fa-refresh" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{route('cart.destroy', $cartItem->rowId)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-times" aria-hidden="true"></i></button>
                                            </form>

                                        </td>
                                        <td>
                                            <h5>${{$cartItem->price * $cartItem->qty}}</h5>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            <tr class="bottom_button">

                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="main_btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close Coupon</a>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal
                                        <small>(- tax)</small>
                                    </h5>
                                </td>
                                <td>
                                    <h5>${{Cart::subtotal(2)}}</h5>
                                </td>

                            </tr>

                            <tr class="shipping_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><h5>Shipping</h5></td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select" style="display: none;">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <div class="nice-select shipping_select" tabindex="0"><span class="current">Bangladesh</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">Bangladesh</li>
                                                <li data-value="2" class="option">India</li>
                                                <li data-value="4" class="option">Pakistan</li>
                                            </ul>
                                        </div>
                                        <select class="shipping_select" style="display: none;">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <div class="nice-select shipping_select" tabindex="0"><span class="current">Select a State</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">Select a State</li>
                                                <li data-value="2" class="option">Select a State</li>
                                                <li data-value="4" class="option">Select a State</li>
                                            </ul>
                                        </div>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner">
                                        <a class="gray_btn" href="{{route('shop.home')}}">Continue Shopping</a>
                                        <a class="main_btn" href="{{route('admin.shipping.info')}}">Proceed to
                                            checkout</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('js')
    {{--Toastr--}}
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script>
        $(document).ready(function () {
            $(this).find('.flex-row-reverse').removeClass();
        });
    </script>
@endpush
