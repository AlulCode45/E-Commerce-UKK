<div class="layer"></div><!-- Mobile menu overlay mask -->
<div class="main_header">
    <div class="container">
        <div class="row small-gutters">
            <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                <div id="logo">
                    <a href="/"><img src="{{asset('img/logo.svg') }}" alt=""
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
                    <a href="/login" class="btn btn-transparent border border-white text-white rounded-pill">
                        Sign-In
                    </a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>
<!-- /main_header -->
