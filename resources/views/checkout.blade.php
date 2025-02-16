@extends('layouts.layout')

@section('content')
    <link href="css/checkout.css" rel="stylesheet">

    <main class="bg_gray">
        <div class="container margin_30">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="step middle payments">
                        <h3>1. Pembayaran dan Bukti Pembayaran</h3>
                        <h6 class="pb-2">Metode Pembayaran</h6>
                        <ul>
                            <li>
                                <label class="container_radio">Bank Transfer<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                    <input type="radio" name="payment" value="transfer" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>

                        <h6 class="pb-2">Metode Pengiriman</h6>

                        <ul>
                            <li>
                                <label class="container_radio">Pengiriman Kurir Toko</a>
                                    <input type="radio" name="pengiriman" value="kurir" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>

                    </div>
                    <!-- /step -->

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="step last">
                        <h3>2. Konfirmasi Checkout</h3>
                        <div class="box_general summary">
                            <ul>
                                <li class="clearfix"><em>1x Armor Air X Fear</em>  <span>$145.00</span></li>
                                <li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li>
                            </ul>
                            <ul>
                                <li class="clearfix"><em><strong>Subtotal</strong></em>  <span>$450.00</span></li>
                                <li class="clearfix"><em><strong>Shipping</strong></em> <span>$0</span></li>

                            </ul>
                            <div class="total clearfix">TOTAL <span>$450.00</span></div>
                            <div class="form-group">
                                <label class="container_check">Register to the Newsletter.
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <a href="confirm.html" class="btn_1 full-width">Confirm and Pay</a>
                        </div>
                        <!-- /box_general -->
                    </div>
                    <!-- /step -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>

    <!-- Modal Payments Method-->
    <div class="modal fade" id="payments_method" tabindex="-1" role="dialog" aria-labelledby="payments_method_title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payments_method_title">Informasi Rekening Penerima</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
@endsection
