@extends('layouts.layout')

@section('content')


    <!-- shop-area start -->
    <section class="shop-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4">
                    <div class="product-details-img mb-10">
                        <div class="tab-content" id="myTabContentpro">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ '/storage/'.$produk->foto_produk }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="product-details mb-30 pl-30">
                        <div class="details-cat mb-20">
                            <a href="#">decor,</a>
                            <a href="#">furniture</a>
                        </div>
                        <h2 class="pro-details-title mb-15">{{ $produk->nama_produk }}</h2>
                        <div class="details-price mb-20">
                            <span>{{ \App\Helpers\RupiahHelper::formatRupiah($produk->harga_produk) }}</span>
                        </div>
                        <div class="product-variant">
                            <div class="product-action-details variant-item">
                                <div class="product-details-action">
                                    <form action="/checkout" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $produk->id }}" name="produk_id">
                                        <div class="d-flex">
                                            <select name="kode_voucher" class="form-control rounded-pill">
                                                @foreach($vouchers as $voucher)
                                                    <option value="{{ $voucher->kode_voucher }}">{{ $voucher->nama. "( $voucher->persen% )" }}</option>
                                                @endforeach
                                            </select>
                                            <div class="plus-minus">
                                                <div class="cart-plus-minus"><input type="text" value="1" name="qty" /></div>
                                            </div>
                                        </div>
                                        <div class="details-cart mt-40">
                                            <button class="btn theme-btn" type="submit">purchase now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-8 col-lg-8">
                    <div class="product-review">
                        <ul class="nav review-tab" id="myTabproduct" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab6" data-bs-toggle="tab" href="#home6" role="tab" aria-controls="home"
                                   aria-selected="true">Description </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">
                                <div class="desc-text">
                                    @markdown($produk->deskripsi)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="pro-details-banner">
                        <a href="shop.html"><img src="/img/banner/pro-details.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area end -->
@endsection
