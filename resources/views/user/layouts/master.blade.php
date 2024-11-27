<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from fabrex.websitelayout.net/home-corporate-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2024 15:36:32 GMT -->

<head>

    <!--header-->
    @includeif('user.layouts.header')
    @yield('meta')
    @yield('styles')

    <!--header-->
    <!--title-->
    <title>@yield('title')</title>

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header>

            {{-- @includeif('user.layouts.topbar') --}}

            @includeif('user.layouts.navbar')


        </header>

        {{-- content section --}}
        <main>
            @yield('content')
        </main>
        {{-- content section --}}



        <!-- FOOTER
        ================================================== -->
        @includeif('user.layouts.footer')

    </div>


    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!--scripts-->
    @includeif('user.layouts.scripts')

    @yield('script')
    <!--scripts-->

</body>


<!-- Mirrored from fabrex.websitelayout.net/home-corporate-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2024 15:36:38 GMT -->

</html>
