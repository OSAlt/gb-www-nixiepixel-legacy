<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet"/>
</head>
@section('title', 'NixiePixel')
    <body class="container-fluid">
        <div>
            @include('layouts.header')

            <main>
                @yield('content')
            </main>
        </div>
        <script src="{{ asset('js/app.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="https://kit.fontawesome.com/4d9859e450.js"></script>
        <script src="{{ asset('js/smooth-scroll.min.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>

        {{-- Begin Scripts For Chart --}}
        <script src="{{ asset('js/core.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="{{ asset('js/charts.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="{{ asset('js/animated.js', env('REDIRECT_HTTPS')) }}"></script>
        {{-- End Scripts For Chart --}}

        <script src="{{ asset('js/scripts.js', env('REDIRECT_HTTPS')) }}"></script>
        @yield('scripts')
    </body>
</html>
