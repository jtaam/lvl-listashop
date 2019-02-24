<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">


                    <h2>{{ucfirst(Request::segment('1'))}}</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('shop.home')}}">Shop</a>
                    </div>


            </div>
        </div>
    </div>
</section>