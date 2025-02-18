@extends('layouts.layout')

@section('content')
    <!-- slider-area start -->
    <section class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slide-1-style slide-height d-flex align-items-center"
                 data-background="img/slider/slide1.jpg">
                <div class="shape-title bounce-animate">
                    <h2>UX</h2>
                </div>
                <div class="shape-icon bounce-animate">
                    <img src="img/slider/shape-icon.png" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slide-content">
                                <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                    Chair Upholstered</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft"
                                       data-delay=".7s">shop now</a>
                                    <a class="btn white-btn" href="shop.html" data-animation="fadeInRight"
                                       data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pos-relative">
                            <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img
                                    src="img/slider/shape1.png" alt=""></div>
                            <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.2s"><img
                                    src="img/slider/shape2.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide-1-style slide-height d-flex align-items-center"
                 data-background="img/slider/slide1-1.jpg">
                <div class="shape-title bounce-animate">
                    <h2>UX</h2>
                </div>
                <div class="shape-icon bounce-animate">
                    <img src="img/slider/shape-icon.png" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slide-content">
                                <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                    Chair Upholstered</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="shop.html" data-animation="fadeInLeft"
                                       data-delay=".7s">shop now</a>
                                    <a class="btn white-btn" href="shop.html" data-animation="fadeInRight"
                                       data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pos-relative">
                            <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img
                                    src="img/slider/shape3.png" alt=""></div>
                            <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.1s"><img
                                    src="img/slider/shape4.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area end -->

    <!-- banner area start -->
    <section class="banner-area pt-30 pl-15 pr-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="shop.html"><img src="img/banner/banner-1/banner1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="shop.html"><img src="img/banner/banner-1/banner2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="shop.html"><img src="img/banner/banner-1/banner3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- product-area start -->
    <section class="product-area box-90 pt-70 pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="area-title mb-50">
                        <h2>Brand New Products</h2>
                        <p>Browse the huge variety of our products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row row-cols-4">
                                    @foreach($produks as $produk)
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/produk/{{ $produk->id }}">
                                                    <img src="{{ '/storage/'.$produk->foto_produk }}" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-bs-toggle="tooltip" data-placement="right"
                                                       title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4>
                                                    <a href="product-details.html">{{ $produk->nama_produk }}</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>{{ \App\Helpers\RupiahHelper::formatRupiah($produk->harga_produk) }}</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-area end -->
@endsection
