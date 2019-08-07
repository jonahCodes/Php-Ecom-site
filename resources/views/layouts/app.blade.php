<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>Selling &mdash; </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

        <link rel="stylesheet" href="{{asset('css/aos.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        </head>
<body>
    <div id="app">

        @include('inc.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- jquery --}}
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>


    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
