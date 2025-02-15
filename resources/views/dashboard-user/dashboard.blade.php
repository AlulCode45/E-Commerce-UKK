@extends('layouts.dashboard-layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0 text-muted">Menunggu</p>
                            <h2 class="m-b-0">10</h2>
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
                            <h2 class="m-b-0">7</h2>
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
                            <h2 class="m-b-0">25</h2>
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
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#5331</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-1.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                    </div>
                                </div>
                            </td>
                            <td>8 May 2019</td>
                            <td>$137.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span>Approved</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5375</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-2.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Darryl Day</h6>
                                    </div>
                                </div>
                            </td>
                            <td>6 May 2019</td>
                            <td>$322.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span>Approved</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5762</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Marshall Nichols</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1 May 2019</td>
                            <td>$543.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span>Approved</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5865</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-4.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Virgil Gonzales</h6>
                                    </div>
                                </div>
                            </td>
                            <td>28 April 2019</td>
                            <td>$876.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-primary badge-dot m-r-10"></span>
                                    <span>Pending</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5213</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-5.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Nicole Wyne</h6>
                                    </div>
                                </div>
                            </td>
                            <td>28 April 2019</td>
                            <td>$241.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span>Approved</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#5211</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-image"
                                             style="height: 30px; min-width: 30px; max-width:30px">
                                            <img src="dashboard/images/avatars/thumb-6.jpg" alt="">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Riley Newman</h6>
                                    </div>
                                </div>
                            </td>
                            <td>28 April 2019</td>
                            <td>$872.00</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-danger badge-dot m-r-10"></span>
                                    <span>Rejected</span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
