<section class="feature_product_area latest_product_area">
    <div class="main_box">
        <div class="container">
            <div class="feature_product_inner">
                <div class="main_title">
                    <h2>Latest Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="latest_product_inner row">
                    @if (isset($latestProducts))
                        @foreach ($latestProducts as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="f_p_item">
                                    <div class="f_p_img">
                                        <img class="img-fluid" src="{{$product->images[0]->image}}" alt="{{$product->title}}">
                                        <div class="p_icon">
                                            <a href="#"><i class="lnr lnr-heart"></i></a>
                                            <a href="#"><i class="lnr lnr-cart"></i></a>
                                        </div>
                                    </div>
                                    <a href="#"><h4>{{ucfirst($product->title)}}</h4></a>
                                    <h5>${{$product->price}}</h5>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
