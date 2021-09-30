<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>PROGRAMME-U - @yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Programme-U" name="Virgile Dimon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.css') }}" rel="stylesheet" type="text/css"  />
        
        <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet">


        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

        @yield('style')

    </head>
<body>

   <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Programme-U </a>-->
                        <a href="index.html" class="logo">
                            <div class="navbar-brand text-light">PROGRAMME-U</div> 
                        </a>
                    </div>
                </div>

                 @include('partials.sidebar')
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    @include('partials.topbar')

                    @yield('content')

                </div> <!-- content -->

                <footer class="footer">
                    © 2021 - Programme-U.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
      <!-- jQuery  -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        
    <script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> 
         
    <script src="{{ asset('assets/pages/dashborad.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $('div.alert').not('.alert-important').delay(6000).fadeOut(350);
    </script>


    @yield('script')
   
</body>
</html>
