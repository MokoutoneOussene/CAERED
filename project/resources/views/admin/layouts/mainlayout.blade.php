<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layouts.style')

</head>

<body>

    <!-- ======= Header ======= -->
        @include('admin.require.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.require.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('maincontent')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.require.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.layouts.script')

</body>

</html>
