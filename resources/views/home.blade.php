@extends('layouts.layout')

@section('content')
    <!-- /header -->

    <main>
        <div class="container margin_30">
            <div class="row">
                <aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                        <div class="filter_type version_2">
                            <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">Men <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Women <small>24</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Running <small>23</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Training <small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
                            <div class="collapse show" id="filter_4">
                                <ul>
                                    <li>
                                        <label class="container_check">$0 — $50<small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$50 — $100<small>08</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$100 — $150<small>05</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$150 — $200<small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
                        <div class="buttons">
                            <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                        </div>
                    </div>
                </aside>
                <!-- /col -->
                <div class="col-lg-9">
                    <div class="top_banner">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div class="container pl-lg-5">
                                <h1>Selamat Datang di Toko AShop</h1>
                                <p class="text-white">Penuhi keseharianmu bersama AShop</p>
                            </div>
                        </div>
                        <img src="{{asset('img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
                    </div>
                    @foreach($produks as $produk)
                        <!-- /top_banner -->
                        <div class="row row_item mt-4">
                            <div class="col-sm-4">
                                <figure>
                                    <span class="ribbon off">-30%</span>
                                    <a href="/produk/{{$produk->id}}">
                                        <img class="img-fluid lazy"
                                             src="{{asset('img/products/product_placeholder_square_medium.jpg') }}"
                                             data-src="{{asset('/storage/'.$produk->foto_produk) }}" alt="">
                                    </a>
                                    <div data-countdown="2019/05/15" class="countdown"></div>
                            </div>
                                </figure>
                            <div class="col-sm-8">
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star"></i>
                                </div>
                                <a href="/produk/{{$produk->id}}">
                                    <h3>{{ $produk->nama_produk }}</h3>
                                </a>
                                <p>
                                    {{ substr($produk->deskripsi,0,100) }}
                                </p>
                                <div class="price_box">
                                    <span class="new_price">Rp. {{ $produk->harga_produk }}</span>
                                </div>
                                <ul>
                                    <li><a href="#0" class="btn_1">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    <!-- /row_item -->
                    <div class="pagination__wrapper">
                        <ul class="pagination">
                            <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                            <li>
                                <a href="#0" class="active">1</a>
                            </li>
                            <li>
                                <a href="#0">2</a>
                            </li>
                            <li>
                                <a href="#0">3</a>
                            </li>
                            <li>
                                <a href="#0">4</a>
                            </li>
                            <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection
