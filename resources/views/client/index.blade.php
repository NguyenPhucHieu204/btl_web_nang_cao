@extends('client.layoutclient.master')

@section('title', 'Trang chủ')

@section('content')

    <!-- Bắt đầu Phần Banner -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner-1.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Bộ sưu tập quần áo 2025</h2>
                            <a href="#">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner-2.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Phụ kiện</h2>
                            <a href="#">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner-3.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Giày Xuân 2025</h2>
                            <a href="#">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Banner -->

    <!-- Bắt đầu Phần Sản phẩm -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Bán chạy nhất</li>
                        <li data-filter=".new-arrivals">Hàng mới về</li>
                        <li data-filter=".hot-sales">Khuyến mãi hot</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{asset('storage/' . $product->image) }}">
                                <span class="label">Mới</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/compare.png') }}" alt=""> <span>So sánh</span></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->name }}</h6>
                                <a href="{{route('add.cart',$product->id)}}" class="add-cart">+ Thêm vào giỏ</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>${{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Sản phẩm -->

    <!-- Bắt đầu Phần Instagram -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/instagram/instagram-1.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/instagram/instagram-2.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/instagram/instagram-3.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Instagram -->

    <!-- Bắt đầu Phần Blog mới nhất -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin tức mới nhất</span>
                        <h2>Xu hướng thời trang mới</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Blog mới nhất -->

@endsection
