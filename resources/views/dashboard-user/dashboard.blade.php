@extends('layouts.dashboard-layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0 text-muted">Menunggu</p>
                            <h2 class="m-b-0">{{ $menunggu }}</h2>
                        </div>
                        <span class="badge badge-pill badge-cyan font-size-12">
                                                    <i class="anticon anticon-arrow-up"></i>
                                                    <span
                                                        class="font-weight-semibold m-l-5">Menunggu Konfirmasi Admin</span>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0 text-muted">Diproses</p>
                            <h2 class="m-b-0">{{ $diproses }}</h2>
                        </div>
                        <span class="badge badge-pill badge-cyan font-size-12">
                                                    <i class="anticon anticon-arrow-up"></i>
                                                    <span
                                                        class="font-weight-semibold m-l-5">Pesanan Diproses</span>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0 text-muted">Selesai</p>
                            <h2 class="m-b-0">{{ $selesai }}</h2>
                        </div>
                        <span class="badge badge-pill badge-cyan font-size-12">
                                                    <i class="anticon anticon-arrow-up"></i>
                                                    <span
                                                        class="font-weight-semibold m-l-5">Pesanan Selesai Diterima</span>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>Recent Orders</h5>
                <div>
                    <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                </div>
            </div>
            <div class="m-t-30">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Date</th>
                            <th>Voucher</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pembelians as $pembelian)
                            <tr>
                                <td>#{{ $pembelian->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <h6 class="m-l-10 m-b-0">{{ $pembelian->produk->nama_produk }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $pembelian->qty }}</td>
                                <td>{{ $pembelian->created_at }}</td>
                                <td>{{ $pembelian->voucher->nama ?? '-' }}</td>

                                @php
                                    $diskon = 0;
                                @endphp
                                @if($pembelian->voucher)
                                    @php
                                        $diskon = ((($pembelian->produk->harga_produk * $pembelian->qty) * $pembelian->voucher->persen) / 100);
                                    @endphp
                                @endif
                                <td>{{ ($pembelian->produk->harga_produk * $pembelian->qty) - $diskon }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                        <span>{{ $pembelian->status }}</span>
                                    </div>
                                </td>
                                @if($pembelian->status == 'diproses')
                                    <td>
                                        <a href="konfirmasi-barang/{{ $pembelian->id }}" class="btn btn-success">Diterima</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
