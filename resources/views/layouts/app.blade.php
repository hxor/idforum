<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IDStack Forum Tutorial">
    <meta name="keywords" content="idstack, online, course">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-32x32.png') }}">


    <title>@yield('title', 'IDForum') - Digital Forum</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
</head>

<body class="home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
    ================================= -->
    <!-- start menu-area -->
    @include('layouts.partials._menu')
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
    =================================-->

    @yield('content')

    <!--================================
        Start Footer
    =================================-->
    <footer class="footer-area footer--light">
        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2018
                                <a href="#">IDForum</a>. All rights reserved. Created by
                                <a href="https://idstack.net">IDStack</a>
                            </p>
                        </div>

                        <div class="go_top">
                            <span class="icon-arrow-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
        End Footer
    =================================-->

    <!-- inject:js -->
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <!-- endinject -->
</body>
</html>
