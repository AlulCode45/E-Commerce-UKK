<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/allaia/listing-row-3-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2025 14:12:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Jual Beli Online Terpercaya">
    <meta name="author" content="AlulCode">
    <title>AShop | Platform Jual Beli Barang Mudah dan Menyenangkan</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap"
          as="fetch" crossorigin="anonymous">
    <script>
        !function (e, n, t) {
            "use strict";
            var o = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap",
                r = "__3perf_googleFonts_c2536";

            function c(e) {
                (n.head || n.body).appendChild(e)
            }

            function a() {
                var e = n.createElement("link");
                e.href = o, e.rel = "stylesheet", c(e)
            }

            function f(e) {
                if (!n.getElementById(r)) {
                    var t = n.createElement("style");
                    t.id = r, c(t)
                }
                n.getElementById(r).innerHTML = e
            }

            e.FontFace && e.FontFace.prototype.hasOwnProperty("display") ? (t[r] && f(t[r]), fetch(o).then(function (e) {
                return e.text()
            }).then(function (e) {
                return e.replace(/@font-face {/g, "@font-face{font-display:swap;")
            }).then(function (e) {
                return t[r] = e
            }).then(f).catch(a)) : a()
        }(window, document, localStorage);
    </script>

    <!-- BASE CSS -->
    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('css/listing.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div id="page" class="theia-exception">

    <header class="version_1">
        @include('components.main-header')
        @include('components.main-navbar')
    </header>
    <!-- /header -->

    <main>
        <div class="container margin_30">
            <div class="row">
                <aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                        <div class="filter_type version_2">
                            <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">Men <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Women <small>24</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Running <small>23</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Training <small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                        <div class="filter_type version_2">
                            <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
                            <div class="collapse show" id="filter_4">
                                <ul>
                                    <li>
                                        <label class="container_check">$0 — $50<small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$50 — $100<small>08</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$100 — $150<small>05</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">$150 — $200<small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /filter_type -->
                        <div class="buttons">
                            <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
                        </div>
                    </div>
                </aside>
                <!-- /col -->
                <div class="col-lg-9">
                    <div class="top_banner">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div class="container pl-lg-5">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Category</a></li>
                                        <li>Page active</li>
                                    </ul>
                                </div>
                                <h1>Shoes - Grid listing</h1>
                            </div>
                        </div>
                        <img src="{{asset('img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <!-- /top_banner -->
                    <div class="row row_item">
                        <div class="col-sm-4">
                            <figure>
                                <span class="ribbon off">-30%</span>
                                <a href="{{ asset('product-detail-1.html') }}">
                                    <img class="img-fluid lazy"
                                         src="{{asset('img/products/product_placeholder_square_medium.jpg') }}"
                                         data-src="{{asset('img/products/shoes/1.jpg') }}" alt="">
                                </a>
                                <div data-countdown="2019/05/15" class="countdown"></div>
                            </figure>
                        </div>
                        <div class="col-sm-8">
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="{{ asset('product-detail-1.html') }}">
                                <h3>Armor Air x Fear</h3>
                            </a>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                            <div class="price_box">
                                <span class="new_price">$48.00</span>
                                <span class="old_price">$60.00</span>
                            </div>
                            <ul>
                                <li><a href="#0" class="btn_1">Add to cart</a></li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                                </li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row_item -->
                    <div class="row row_item">
                        <div class="col-sm-4">
                            <figure>
                                <span class="ribbon new">New</span>
                                <a href="{{ asset('product-detail-1.html') }}">
                                    <img class="img-fluid lazy"
                                         src="{{asset('img/products/product_placeholder_square_medium.jpg') }}"
                                         data-src="{{asset('img/products/shoes/4.jpg') }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col-sm-8">
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="{{ asset('product-detail-1.html') }}">
                                <h3>Armor ACG React Terra</h3>
                            </a>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                            <div class="price_box">
                                <span class="new_price">$110.00</span>
                            </div>
                            <ul>
                                <li><a href="#0" class="btn_1">Add to cart</a></li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                                </li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row_item -->
                    <div class="row row_item">
                        <div class="col-sm-4">
                            <figure>
                                <span class="ribbon hot">Hot</span>
                                <a href="{{ asset('product-detail-1.html') }}">
                                    <img class="img-fluid lazy"
                                         src="{{asset('img/products/product_placeholder_square_medium.jpg') }}"
                                         data-src="{{asset('img/products/shoes/7.jpg') }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col-sm-8">
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                            </div>
                            <a href="{{ asset('product-detail-1.html') }}">
                                <h3>Armor Air 98</h3>
                            </a>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
                            <div class="price_box">
                                <span class="new_price">$115.00</span>
                            </div>
                            <ul>
                                <li><a href="#0" class="btn_1">Add to cart</a></li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                                </li>
                                <li><a href="#0" class="btn_1 gray tooltip-1" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row_item -->
                    <div class="pagination__wrapper">
                        <ul class="pagination">
                            <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                            <li>
                                <a href="#0" class="active">1</a>
                            </li>
                            <li>
                                <a href="#0">2</a>
                            </li>
                            <li>
                                <a href="#0">3</a>
                            </li>
                            <li>
                                <a href="#0">4</a>
                            </li>
                            <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    @include('components.footer')
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->


<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="ti-email"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="ti-lock"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-start">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width">
                Don’t have an account? <a href="account.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="ti-email"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred
                    one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->
<!-- COMMON SCRIPTS -->
<script src="{{ asset('js/common_scripts.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('js/sticky_sidebar.min.js') }}"></script>
<script src="{{ asset('js/specific_listing.js') }}"></script>

</body>

<!-- Mirrored from www.ansonika.com/allaia/listing-row-3-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2025 14:12:35 GMT -->
</html>
