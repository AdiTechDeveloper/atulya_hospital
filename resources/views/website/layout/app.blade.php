<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
    @include('website.partials.css')

    <title>@yield('title', 'Home') | Atulya Hospital</title>

    @stack('styles')

</head>

<body>

    <!-- Header/Navbar -->
    @include('website.partials.header')

      <!-- <div id="preloader" class="preloader"> -->
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <!-- <div class="txt-loading">
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="Z" class="letters-loading">
                        Z
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                </div> -->
                <!-- <p class="text-center">Loading</p> -->
            </div>
            <!-- <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div> -->
        </div>

    <!-- Page Content -->
      <!-- Back To Top start -->
        <!-- <button id="back-top" class="back-to-top">
            <i class="fas fa-long-arrow-up"></i>
        </button> -->
    @yield('content')

    <!-- Footer -->
    @include('website.partials.footer')


    <!-- Javascript -->
    @include('website.partials.js')

    @stack('scripts')

</body>

</html>