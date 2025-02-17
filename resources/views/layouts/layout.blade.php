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
        @include('components.main-header')
        @include('components.main-navbar')
    </header>

    @yield('content')

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
