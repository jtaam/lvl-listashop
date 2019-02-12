@extends('frontend.layouts.shop')

@section('title','Shop')

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
                </nav>
            </div>
        </div>
        <div class="latest_product_inner row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-2.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-6.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-7.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="f_p_item">
                    <div class="f_p_img">
                        <img class="img-fluid" src="img/product/feature-product/f-p-8.jpg" alt="">
                        <div class="p_icon">
                            <a href="#"><i class="lnr lnr-heart"></i></a>
                            <a href="#"><i class="lnr lnr-cart"></i></a>
                        </div>
                    </div>
                    <a href="#"><h4>Long Sleeve TShirt</h4></a>
                    <h5>$150.00</h5>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush