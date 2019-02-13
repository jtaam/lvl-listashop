<section class="feature_product_area">
    <div class="main_box">
        <div class="container">
            <div class="row hot_product_inner">

                <div class="col-lg-6">
                    <div class="hot_p_item">
                        <img class="img-fluid" src="img/product/hot-product/hot-p-1.jpg" alt="">
                        <div class="product_text">
                            <h4>Hot Deals of <br />this Month</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hot_p_item">
                        <img class="img-fluid" src="img/product/hot-product/hot-p-2.jpg" alt="">
                        <div class="product_text">
                            <h4>Hot Deals of <br />this Month</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_product_inner">
                <div class="main_title">
                    <h2>Featured Products</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>

                <div class="feature_p_slider owl-carousel">
                    @if (isset($featuredProducts))
                        {{dd($featuredProducts)}}
                        @foreach($featuredProducts->product as $product)
                            <div class="item">
                                <div class="f_p_item">
                                    <div class="f_p_img">
                                        <img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
                                        <div class="p_icon">
                                            <a href="#"><i class="lnr lnr-heart"></i></a>
                                            <a href="#"><i class="lnr lnr-cart"></i></a>
                                        </div>
                                    </div>
                                    <a href="#"><h4>{{ucfirst($product->title)}}</h4></a>
                                    <h5>$150.00</h5>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
