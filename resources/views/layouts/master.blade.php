<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MeerabREALESTATE | @yield('title')</title>
    <link rel="icon" href="" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/respo.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/aos.css?v={{ time() }}">

</head>

<body>

    @yield('header')
    @yield('content')
    @yield('footer')
    <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('js/app.js?v=0.8')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>