<div class="col-lg-3">
    <div class="left_sidebar_area">
        <aside class="left_widgets cat_widgets">
            <div class="l_w_title">
                <h3>Browse Categories</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">

                    @if (isset($parentCategories))
                        @foreach ($parentCategories as $subCategory)
                            <li><a href="#">{{title_case($subCategory->name)}}</a>
                                <ul class="list">

                                    @if (isset($subCategory->categories))
                                        @foreach ($subCategory->categories as $category)
                                            <li><a href="#">{{title_case($category->name)}}</a></li>
                                        @endforeach

                                    @endif

                                </ul>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </aside>
        <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>Product Filters</h3>
            </div>
            <div class="widgets_inner">
                <h4>Brand</h4>
                <ul class="list">
                    @if (isset($brands))
                        @foreach ($brands as $brand)
                            <li><a href="#">{{ucfirst($brand->name)}}</a></li>
                        @endforeach
                    @endif

                    {{--<li class="active"><a href="#">Gionee</a></li>--}}

                </ul>
            </div>
            <div class="widgets_inner">
                <h4>Color</h4>
                <ul class="list">
                    @if (isset($colors))
                        @foreach ($colors as $color)
                            <li><a href="#">{{ucfirst($color->name)}}</a></li>
                        @endforeach
                    @endif

                    {{--<li class="active"><a href="#">Black with red</a></li>--}}

                </ul>
            </div>
            <div class="widgets_inner">
                <h4>Price</h4>
                <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="row m0">
                        <label for="amount">Price : </label>
                        <input type="text" id="amount" readonly>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>