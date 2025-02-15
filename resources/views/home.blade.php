@extends('layouts.layout')

@section('content')
    <!-- /header -->

    <main>
        <div class="container margin_30">
            <div class="row">
                <div class="col-lg-12">
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
                                    <a href="/produk/{{$produk->id}}">
                                        <img class="img-fluid lazy"
                                             src="{{asset('img/products/product_placeholder_square_medium.jpg') }}"
                                             data-src="{{asset('/storage/'.$produk->foto_produk) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-sm-8">
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
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection
