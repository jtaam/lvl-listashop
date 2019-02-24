@extends('frontend.layouts.shop')

@section('title', 'Cart')

@push('css')
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
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

              @if (isset($cartItems))
                  @foreach ($cartItems as $cartItem)
                    {{--{{dd($cartItem)}}--}}
                    <tr>
                      <td>
                        <div class="media">
                          <div class="d-flex">
                            <img src="{{asset('assets/frontend/img/product/single-product/cart-1.jpg')}}" alt="">
                          </div>
                          <div class="media-body">
                            <p>{{$cartItem->name}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h5>${{$cartItem->price}}</h5>
                      </td>
                      <td>
                        <div class="product_count">
                          <input type="text" name="qty" id="sst-{{$cartItem->id}}" maxlength="12" value="{{$cartItem->qty}}" title="Quantity:" class="input-text qty">
                          <button onclick="var result = document.getElementById('sst-{{$cartItem->id}}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                          <button onclick="var result = document.getElementById('sst-{{$cartItem->id}}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                      </td>
                      <td>
                        <h5>${{$cartItem->price * $cartItem->qty}}</h5>
                      </td>
                      <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i></a> |
                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  @endforeach
              @endif



                <tr class="bottom_button">
                  <td>
                    <a class="gray_btn" href="#">Update Cart</a>
                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                    <div class="cupon_text">
                      <input type="text" placeholder="Coupon Code">
                      <a class="main_btn" href="#">Apply</a>
                      <a class="gray_btn" href="#">Close Coupon</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>$2160.00</h5>
                  </td>
                </tr>
                <tr class="shipping_area">
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                    <h5>Shipping</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <ul class="list">
                        <li><a href="#">Flat Rate: $5.00</a></li>
                        <li><a href="#">Free Shipping</a></li>
                        <li><a href="#">Flat Rate: $10.00</a></li>
                        <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                      </ul>
                      <h6>Calculate Shipping  <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                      <select class="shipping_select" style="display: none;">
                        <option value="1">Bangladesh</option>
                        <option value="2">India</option>
                        <option value="4">Pakistan</option>
                      </select><div class="nice-select shipping_select" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="1" class="option selected">Bangladesh</li><li data-value="2" class="option">India</li><li data-value="4" class="option">Pakistan</li></ul></div>
                      <select class="shipping_select" style="display: none;">
                        <option value="1">Select a State</option>
                        <option value="2">Select a State</option>
                        <option value="4">Select a State</option>
                      </select><div class="nice-select shipping_select" tabindex="0"><span class="current">Select a State</span><ul class="list"><li data-value="1" class="option selected">Select a State</li><li data-value="2" class="option">Select a State</li><li data-value="4" class="option">Select a State</li></ul></div>
                      <input type="text" placeholder="Postcode/Zipcode">
                      <a class="gray_btn" href="#">Update Details</a>
                    </div>
                  </td>
                </tr>
                <tr class="out_button_area">
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="#">Continue Shopping</a>
                      <a class="main_btn" href="#">Proceed to checkout</a>
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
  <script>
    $(document).ready(function () {
      $(this).find('.flex-row-reverse').removeClass();
    });
  </script>
@endpush