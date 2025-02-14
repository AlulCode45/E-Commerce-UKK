@extends('layouts.layout')

@section('content')
    <main class="bg_gray">
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Produk</a></li>
                        <li>{{ $produk->nama_produk }}</li>
                    </ul>
                </div>
                <h1>{{ $produk->nama_produk }}</h1>
            </div>
            <!-- /page_header -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme prod_pics magnific-gallery">
                        <div class="item">
                            <a href="{{ asset('storage/'.$produk->foto_produk) }}" title="Photo title"
                               data-effect="mfp-zoom-in"><img src="{{ asset('storage/'.$produk->foto_produk) }}" alt=""></a>
                        </div>
                    </div>
                    <!-- /carousel -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="bg_white">
            <div class="container margin_60_35">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="prod_info version_2">
                            @markdown($produk->deskripsi)
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="prod_options version_2">
                            <div class="d-flex align-items-center mt-2">
                                <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                                        <div class="inc button_inc">+</div>
                                        <div class="dec button_inc">-</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Voucher</strong></label>
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <input type="text" name="" id="" class="form-control" placeholder="Kode Voucher">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-7 col-md-6">
                                    <div class="price_main"><span class="new_price">$148.00</span><span class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="btn_add_to_cart"><a href="#0" class="btn_1">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /bg_white -->

    </main>
    <!-- /main -->
@endsection
