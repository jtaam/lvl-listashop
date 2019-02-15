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
                <hr/>
                @guest()
                    <h5><a href="{{route('login')}}" class="details-login-link">Login to Comment</a></h5>
                @else
                    <form class="row contact_form" action="{{route('shop.comment.store', $product->id)}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
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
                @endguest
            </div>
        </div>
    </div>
</div>