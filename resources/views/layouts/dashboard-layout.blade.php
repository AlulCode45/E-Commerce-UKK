<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/index-e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 15:36:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}">

    <!-- page css -->
    <link href="{{ asset('dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Core css -->
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="layout">
        @include('components.dashboard.header')

        @include('components.dashboard.sidebar')

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
               @yield('content')
            </div>
            <!-- Content Wrapper END -->

            @include('components.dashboard.footer')

        </div>
        <!-- Page Container END -->
        
    </div>
</div>


<!-- Core Vendors JS -->
<script src="{{ asset('dashboard/js/vendors.min.js') }}"></script>

<!-- page js -->
<script src="{{ asset('dashboard/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('dashboard/js/pages/dashboard-e-commerce.js') }}"></script>

<!-- Core JS -->
<script src="{{ asset('dashboard/js/app.min.js') }}"></script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/index-e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 15:36:17 GMT -->
</html>
