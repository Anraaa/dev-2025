<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Scholar')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Fonts and CSS --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    @livewireStyles
    @stack('styles')
</head>

<body>

    {{-- Preloader --}}
    {{-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots"><span></span><span></span><span></span></div>
        </div>
    </div> --}}

    {{-- Global header (optional) --}}
    @include('components.partial.header')

    {{-- Page content --}}
    {{-- @yield('content') --}}
    {{ $slot }}

    {{-- Global footer (optional) --}}
    @include('components.partial.footer')

    {{-- Scripts --}}
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('front/assets/js/counter.js') }}"></script>
    <script src="{{ asset('front/assets/js/custom.js') }}"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
