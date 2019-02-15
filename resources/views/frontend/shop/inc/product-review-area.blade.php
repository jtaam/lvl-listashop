<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
    <div class="row">
        <div class="col-lg-6">
            <div class="row total_rate">
                <div class="col-6">
                    <div class="box_total">
                        <h5>Overall</h5>
                        @if ($product->reviews->count() > 0)
                            <h4>{{round($product->reviews->sum('stars')/$product->reviews->count())}}</h4>
                            <h6>({{$product->reviews->count()}} Reviews)</h6>
                        @else
                            <h5>No review yet, be the first!</h5>
                            <h6>(00 Reviews)</h6>
                        @endif

                    </div>
                </div>

                <div class="col-6">
                    <div class="rating_list">
                        <h3>Based on 3 Reviews</h3>
                        <ul class="list">
                            <li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    01</a></li>
                            <li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    01</a></li>
                            <li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    01</a></li>
                            <li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    01</a></li>
                            <li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    01</a></li>
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
                                    <img src="{{$productReview->user->profile->avatar}}"
                                         alt="{{$productReview->user->name}}">
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
                <hr/>
                @guest()
                    <h5><a href="{{route('login')}}" class="details-login-link">Login to add Review</a></h5>
                @else
                <form class="row contact_form" action="{{route('shop.review.store', $product->id)}}" method="post"
                      id="contactForm" novalidate="novalidate">
                    @csrf

                    <div class="col-md-12 pb-2">

                        <fieldset class="rating">
                            <p>Your Rating:</p>
                            <input name="rating"
                                   type="radio"
                                   id="rating5"
                                   value="5"
                                   on="change:rating.submit"/>
                            <label for="rating5"
                                   title="5 stars"><i class="fa fa-star"></i>
                            </label>

                            <input name="rating"
                                   type="radio"
                                   id="rating4"
                                   value="4"
                                   on="change:rating.submit"/>
                            <label for="rating4"
                                   title="4 stars"><i class="fa fa-star"></i>
                            </label>

                            <input name="rating"
                                   type="radio"
                                   id="rating3"
                                   value="3"
                                   on="change:rating.submit"/>
                            <label for="rating3"
                                   title="3 stars"><i class="fa fa-star"></i>
                            </label>

                            <input name="rating"
                                   type="radio"
                                   id="rating2"
                                   value="2"
                                   on="change:rating.submit"
                                   checked="checked"/>
                            <label for="rating2"
                                   title="2 stars"><i class="fa fa-star"></i>
                            </label>

                            <input name="rating"
                                   type="radio"
                                   id="rating1"
                                   value="1"
                                   on="change:rating.submit"/>
                            <label for="rating1"
                                   title="1 stars"><i class="fa fa-star"></i>
                            </label>
                            <p>Outstanding</p>
                        </fieldset>
                        {{--<div submit-success>--}}
                        {{--<template type="amp-mustache">--}}
                        {{--<p>Thanks for rating {{rating}} star(s)!</p>--}}
                        {{--</template>--}}
                        {{--</div>--}}
                        {{--<div submit-error>--}}
                        {{--<template type="amp-mustache">--}}
                        {{--Looks like something went wrong. Please try to rate again. {{error}}--}}
                        {{--</template>--}}
                        {{--</div>--}}
                        {{--<ul class="list">--}}
                        {{--<label>--}}
                        {{--<input type="radio" name="stars" value="1" />--}}
                        {{--<span class="icon">★</span>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--</label>--}}
                        {{--<label>--}}
                        {{--<input type="radio" name="stars" value="2" />--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--</label>--}}
                        {{--<label>--}}
                        {{--<input type="radio" name="stars" value="3" />--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--</label>--}}
                        {{--<label>--}}
                        {{--<input type="radio" name="stars" value="4" />--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--</label>--}}
                        {{--<label>--}}
                        {{--<input type="radio" name="stars" value="5" />--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                        {{--</label>--}}
                        {{--</ul>--}}

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                      placeholder="Review"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Submit Now</button>
                    </div>
                </form>
                @endguest
            </div>
        </div>
    </div>
</div>
