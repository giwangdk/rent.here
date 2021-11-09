<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>
    @include('admin.includes.styles')

     <!-- CSS Page -->
    @stack('style')
    <!-- END CSS Page -->
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

    <script src="{{ asset('dashboard/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js') }}"></script>

    <!-- ========== HEADER ========== -->
    @include('admin.includes.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->

    @include('admin.includes.aside')



    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main pointer-event">
        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Footer -->
        @include('admin.includes.footer')
        <!-- End Footer -->
    </main>


    @include('admin.includes.script')
    <!-- JS Global Compulsory  -->
    @stack('script')
</body>

</html>