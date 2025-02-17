@extends('layouts.layout')

@section('content')
    <!-- /header -->

    <main>
        <div class="container margin_30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_banner">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div class="container  text-center pl-lg-5">
                                <h1>Selamat Datang di Toko AlseraStore</h1>
                                <h5 class="text-white">Penuhi keseharianmu bersama AlseraStore</h5>
                            </div>
                        </div>
                        <img src="{{asset('img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="row small-gutters">

                        @foreach($produks as $produk)
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="grid_item">
                                <figure>
                                    <a href="{{ '/produk/'.$produk->id }}">
                                        <img class="img-fluid lazy" src="{{ asset('img/products/product_placeholder_square_medium.jpg') }}" data-src="{{ asset('storage/'.$produk->foto_produk) }}" alt="">
                                    </a>
                                </figure>
                                <a href="{{ '/produk/'.$produk->id }}">
                                    <h3>{{ $produk->nama_produk }}</h3>
                                </a>
                                <div class="price_box">
                                    <span class="new_price">Rp. {{ $produk->harga_produk }}</span>
                                </div>
                            </div>
                            <!-- /grid_item -->
                        </div>
                        <!-- /col -->

                        @endforeach
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
