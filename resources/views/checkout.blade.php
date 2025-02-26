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
                        <form action="/checkout-process" method="post" enctype="multipart/form-data">
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
                                                    <input type="radio" name="pengiriman" value="diambil" checked>
                                                    <label>Diambil ( Gratis )</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="pengiriman" value="dikirim">
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
                                @csrf
                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                <input type="hidden" name="total" value="">
                                @if($voucher)
                                    <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">
                                @endif
                                <input type="hidden" name="qty" value="{{ $qty }}">
                                <span>Bukti Pembayaran</span>
                                <input type="file" name="bukti_pembayaran" class="form-control mb-3">
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="btn theme-btn">Place order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Ambil elemen radio pengiriman
            const radioButtons = document.querySelectorAll('input[name="pengiriman"]');
            const totalElement = document.querySelector('.order-total .amount');
            const inputTotal = document.querySelector('input[name="total"]');

            // Ambil harga produk, jumlah, dan diskon dari PHP
            let hargaProduk = {{ $produk->harga_produk }};
            let qty = {{ $qty }};
            let diskon = {{ $diskon }};
            let biayaPengiriman = 0;

            // Fungsi untuk memperbarui total
            function updateTotal() {
                let total = (hargaProduk * qty) - diskon + biayaPengiriman;

                // Format angka ke dalam Rupiah
                let formattedTotal = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(total);

                // Update tampilan total di halaman
                totalElement.textContent = formattedTotal;

                // Update nilai total dalam input hidden untuk dikirim ke server
                inputTotal.value = total;
            }

            // Tambahkan event listener pada setiap radio button
            radioButtons.forEach(button => {
                button.addEventListener('change', function () {
                    // Tentukan biaya pengiriman berdasarkan pilihan pengguna
                    biayaPengiriman = this.value === "dikirim" ? 30000 : 0;
                    updateTotal();
                });
            });

            // Panggil updateTotal saat halaman pertama kali dimuat
            updateTotal();
        });
    </script>

@endsection
