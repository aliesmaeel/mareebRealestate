<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Meerab Properties  | @yield('title')</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/logo.ico') }}">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fixed-sticky/0.1.7/fixedsticky.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css">

    <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/respo.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/aos.css?v={{ time() }}">

</head>

<body>

    @yield('header')
    @yield('content')
    @yield('footer')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fixed-sticky/0.1.7/fixedsticky.min.js"></script> --}}
    <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
 
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

   
    {{-- <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script> --}}
    <script src="https://gist.github.com/DmytroLisitsyn/1c31186e5b66f1d6c52da6b5c70b12ad.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('js/app.js?v=0.8')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
