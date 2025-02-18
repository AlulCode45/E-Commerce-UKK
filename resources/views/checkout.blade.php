@extends('layouts.layout')

@section('content')
    <section class="checkout-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @php
                        $diskon = 0;
                    @endphp
                    @if($voucher)
                        @php
                            $diskon = ((($produk->harga_produk * $qty) * $voucher->persen) / 100);
                        @endphp
                    @endif
                    <div class="your-order mb-30 ">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{ $produk->nama_produk }} <strong class="product-quantity">
                                            × {{ $qty }}</strong>
                                    </td>
                                    <td class="product-total">
                                            <span
                                                class="amount">{{ \App\Helpers\RupiahHelper::formatRupiah($produk->harga_produk) }}</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Diskon</th>
                                    <td><span
                                            class="amount">{{ \App\Helpers\RupiahHelper::formatRupiah($diskon) }}</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Biaya Antar</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" checked>
                                                <label>Gratis</label>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td>
                                        <strong><span
                                                class="amount">{{ \App\Helpers\RupiahHelper::formatRupiah(($produk->harga_produk * $qty) - $diskon) }}</span></strong>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn-link" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Bank Transfer
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Silahkan ikuti intruksi informasi penerima di bawah
                                            </p>
                                            <ul>
                                                <li>No rekening : 118683683491</li>
                                                <li>Atas Nama : Muhammad Khoyron Ahlaqul Firdaus</li>
                                                <li>Jenis : Bank BCA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/checkout-process" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                @if($voucher)
                                    <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">
                                @endif
                                <input type="hidden" name="qty" value="{{ $qty }}">
                                <span>Bukti Pembayaran</span>
                                <input type="file" name="bukti_pembayaran" class="form-control mb-3">
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="btn theme-btn">Place order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <link href="css/checkout.css" rel="stylesheet">--}}

    {{--    <main class="bg_gray">--}}
    {{--        <div class="container margin_30">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <div class="step middle payments">--}}
    {{--                        <h3>1. Pembayaran dan Bukti Pembayaran</h3>--}}
    {{--                        <h6 class="pb-2">Metode Pembayaran</h6>--}}
    {{--                        <ul>--}}
    {{--                            <li>--}}
    {{--                                <label class="container_radio">Bank Transfer<a href="#0" class="info"--}}
    {{--                                                                               data-bs-toggle="modal"--}}
    {{--                                                                               data-bs-target="#payments_method"></a>--}}
    {{--                                    <input type="radio" name="payment" value="transfer" checked>--}}
    {{--                                    <span class="checkmark"></span>--}}
    {{--                                </label>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}

    {{--                        <h6 class="pb-2">Metode Pengiriman</h6>--}}

    {{--                        <ul>--}}
    {{--                            <li>--}}
    {{--                                <label class="container_radio">Pengiriman Kurir Toko</a>--}}
    {{--                                    <input type="radio" name="pengiriman" value="kurir" checked>--}}
    {{--                                    <span class="checkmark"></span>--}}
    {{--                                </label>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}

    {{--                    </div>--}}
    {{--                    <!-- /step -->--}}

    {{--                </div>--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <div class="step last">--}}
    {{--                        <h3>2. Konfirmasi Checkout</h3>--}}
    {{--                        <div class="box_general summary">--}}
    {{--                            <ul>--}}
    {{--                                @for($i = 0; $i < $qty; $i++)--}}
    {{--                                    <li class="clearfix"><em>{{ $produk->nama_produk }}</em>--}}
    {{--                                        <span>{{ \App\Helpers\RupiahHelper::formatRupiah($produk->harga_produk) }}</span></li>--}}
    {{--                                @endfor--}}
    {{--                            </ul>--}}
    {{--                            <ul>--}}
    {{--                                <li class="clearfix"><em><strong>Subtotal</strong></em>--}}
    {{--                                    <span>{{ \App\Helpers\RupiahHelper::formatRupiah($produk->harga_produk * $qty) }}</span></li>--}}


    {{--                                @php--}}
    {{--                                    $diskon = 0;--}}
    {{--                                @endphp--}}
    {{--                                @if($voucher)--}}
    {{--                                    @php--}}
    {{--                                        $diskon = ((($produk->harga_produk * $qty) * $voucher->persen) / 100);--}}
    {{--                                    @endphp--}}
    {{--                                    <li class="clearfix"><em><strong>Voucher ( <b>{{ $voucher->nama }}--}}
    {{--                                                    - {{ $voucher->persen }}%</b> )</strong></em>--}}
    {{--                                        <span>{{ \App\Helpers\RupiahHelper::formatRupiah($diskon) }}</span>--}}
    {{--                                    </li>--}}
    {{--                                @endif--}}

    {{--                            </ul>--}}
    {{--                            <form action="/checkout-process" method="post" enctype="multipart/form-data">--}}
    {{--                                @csrf--}}
    {{--                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">--}}
    {{--                                @if($voucher)--}}
    {{--                                    <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">--}}
    {{--                                @endif--}}
    {{--                                <input type="hidden" name="qty" value="{{ $qty }}">--}}
    {{--                                <div class="total clearfix">TOTAL <span>{{ \App\Helpers\RupiahHelper::formatRupiah(($produk->harga_produk * $qty) - $diskon) }}</span></div>--}}
    {{--                                <span>Bukti Pembayaran</span>--}}
    {{--                                <input type="file" name="bukti_pembayaran" class="form-control mb-3">--}}
    {{--                                <button type="submit" class="btn_1 full-width">Confirm and Pay</button>--}}

    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                        <!-- /box_general -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /step -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- /row -->--}}
    {{--        </div>--}}
    {{--        <!-- /container -->--}}
    {{--    </main>--}}

    {{--    <!-- Modal Payments Method-->--}}
    {{--    <div class="modal fade" id="payments_method" tabindex="-1" role="dialog" aria-labelledby="payments_method_title"--}}
    {{--         aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="payments_method_title">Informasi Rekening Penerima</h5>--}}
    {{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <p>--}}
    {{--                        Silahkan ikuti intruksi informasi penerima di bawah--}}
    {{--                    </p>--}}
    {{--                    <ul>--}}
    {{--                        <li>No rekening : 118683683491</li>--}}
    {{--                        <li>Atas Nama : Muhammad Khoyron Ahlaqul Firdaus</li>--}}
    {{--                        <li>Jenis : Bank BCA</li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
