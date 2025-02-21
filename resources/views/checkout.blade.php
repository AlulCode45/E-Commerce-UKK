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
                                    <th>Diskon ({{ $voucher?->nama  . ' - '. $voucher?->persen }}%)</th>
                                    <td><span
                                            class="amount">{{ \App\Helpers\RupiahHelper::formatRupiah($diskon) }}</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Jenis Pengiriman</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" name="pengiriman" checked>
                                                <label>Dijemput ( Gratis )</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="pengiriman">
                                                <label>Diantar ( Rp 30.000 )</label>
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
@endsection
