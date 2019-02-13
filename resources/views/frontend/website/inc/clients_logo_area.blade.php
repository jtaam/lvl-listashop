<section class="clients_logo_area">
    <div class="container">
        <div class="main_title">
            <h2>Top Brands of this Month</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="clients_slider owl-carousel">
            @if (isset($topBrands))
                @foreach ($topBrands as $brand)
                    <div class="item">
                        <img src="{{$brand->logo}}" alt="{{$brand->name}}">
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>
