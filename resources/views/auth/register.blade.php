<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/allaia/listing-row-3-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2025 14:12:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Jual Beli Online Terpercaya">
    <meta name="author" content="AlulCode">
    <title>AlseraStore | Platform Jual Beli Barang Mudah dan Menyenangkan</title>

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
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <div class="main_header">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                        <div id="logo">
                            <a href="{{ asset('index-2.html') }}"><img src="{{asset('img/logo.svg') }}" alt=""
                                                                       width="100" height="35"></a>
                        </div>
                    </div>
                    <nav class="col-xl-6 col-lg-7">
                        <a class="open_close" href="javascript:void(0);">
                            <div class="hamburger hamburger--spin">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="main-menu">
                            <div id="header_menu">
                                <a href="{{ asset('index-2.html') }}"><img src="{{asset('img/logo_black.svg') }}" alt=""
                                                                           width="100" height="35"></a>
                                <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                            </div>
                        </div>
                        <!--/main-menu -->
                    </nav>
                    <div class="col-xl-3 col-lg-2 d-lg-flex justify-content-end py-3">
                        <div class="main-menu">
                            <ul>
                                <li>
                                    <button class="btn btn-transparent border border-white text-white rounded-pill">
                                        Register
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /main_header -->

        <div class="main_nav inner">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            <li><span><a href="#0">Collections</a></span>
                                                <ul>
                                                    <li><a href="{{ asset('listing-grid-1-full.html') }}">Trending</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-grid-2-full.html') }}">Life style</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-grid-3.html') }}">Running</a></li>
                                                    <li><a href="{{ asset('listing-grid-4-sidebar-left.html') }}">Training</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-grid-5-sidebar-right.html') }}">View
                                                            all Collections</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Men</a></span>
                                                <ul>
                                                    <li>
                                                        <a href="{{ asset('listing-grid-6-sidebar-left.html') }}">Offers</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('listing-grid-7-sidebar-right.html') }}">Shoes</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-row-1-sidebar-left.html') }}">Clothing</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-row-3-sidebar-left.html') }}">Accessories</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-row-4-sidebar-extended.html') }}">Equipment</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Women</a></span>
                                                <ul>
                                                    <li><a href="{{ asset('listing-grid-1-full.html') }}">Best
                                                            Sellers</a></li>
                                                    <li><a href="{{ asset('listing-grid-2-full.html') }}">Clothing</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-grid-3.html') }}">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('listing-grid-4-sidebar-left.html') }}">Shoes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Boys</a></span>
                                                <ul>
                                                    <li><a href="{{ asset('listing-grid-6-sidebar-left.html') }}">Easy
                                                            On Shoes</a></li>
                                                    <li><a href="{{ asset('listing-grid-7-sidebar-right.html') }}">Clothing</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-row-3-sidebar-left.html') }}">Must
                                                            Have</a></li>
                                                    <li><a href="{{ asset('listing-row-4-sidebar-extended.html') }}">All
                                                            Boys</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Girls</a></span>
                                                <ul>
                                                    <li><a href="{{ asset('listing-grid-1-full.html') }}">New
                                                            Releases</a></li>
                                                    <li><a href="{{ asset('listing-grid-2-full.html') }}">Clothing</a>
                                                    </li>
                                                    <li><a href="{{ asset('listing-grid-3.html') }}">Sale</a></li>
                                                    <li><a href="{{ asset('listing-grid-4-sidebar-left.html') }}">Best
                                                            Sellers</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Customize</a></span>
                                                <ul>
                                                    <li><a href="{{ asset('listing-row-1-sidebar-left.html') }}">For
                                                            Men</a></li>
                                                    <li><a href="{{ asset('listing-row-2-sidebar-right.html') }}">For
                                                            Women</a></li>
                                                    <li><a href="{{ asset('listing-row-4-sidebar-extended.html') }}">For
                                                            Boys</a></li>
                                                    <li><a href="{{ asset('listing-grid-1-full.html') }}">For Girls</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <input type="text" placeholder="Search over 10.000 products">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="access_link"><span>Account</span></a>
                                    <div class="dropdown-menu">
                                        <a href="#sign-in-dialog" class="btn_1">Sign In or Sign Up</a>
                                        <ul>
                                            <li>
                                                <a href="{{ asset('track-order.html') }}"><i class="ti-truck"></i>Track
                                                    your Order</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('my-orders.html') }}"><i class="ti-package"></i>My
                                                    Orders</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('profile-page.html') }}"><i class="ti-user"></i>My
                                                    Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{ asset('help.html') }}"><i class="ti-help-alt"></i>Help and
                                                    Faq</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /dropdown-access-->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Search over 10.000 products">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        <div class="container">
            <form class="my-5">
                <div class="sign-in-wrapper">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
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
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h3 data-bs-target="#collapse_1">AlseraStore </h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea harum hic
                            minus nam nesciunt quisquam saepe suscipit. Ab accusamus, autem delectus eius error, id
                            laborum nesciunt obcaecati placeat quis reprehenderit?</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="{{ asset('listing-grid-1-full.html') }}">Clothes</a></li>
                            <li><a href="{{ asset('listing-grid-2-full.html') }}">Electronics</a></li>
                            <li><a href="{{ asset('listing-grid-1-full.html') }}">Furniture</a></li>
                            <li><a href="{{ asset('listing-grid-3.html') }}">Glasses</a></li>
                            <li><a href="{{ asset('listing-grid-1-full.html') }}">Shoes</a></li>
                            <li><a href="{{ asset('listing-grid-1-full.html') }}">Watches</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                            <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li><img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                data-src="{{asset('img/cards_all.svg') }}" alt="" width="198" height="30" class="lazy">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© 2024 Allaia</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('js/common_scripts.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('js/sticky_sidebar.min.js') }}"></script>
<script src="{{ asset('js/specific_listing.js') }}"></script>

</body>

<!-- Mirrored from www.ansonika.com/allaia/listing-row-3-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2025 14:12:35 GMT -->
</html>
