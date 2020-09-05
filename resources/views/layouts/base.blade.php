<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        {{-- Begin Scripts For Chart --}}
        <script src="{{ asset('js/core.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="{{ asset('js/charts.js', env('REDIRECT_HTTPS')) }}"></script>
        <script src="{{ asset('js/animated.js', env('REDIRECT_HTTPS')) }}"></script>
        {{-- End Scripts For Chart --}}

        <script src="{{ asset('js/scripts.js', env('REDIRECT_HTTPS')) }}"></script>
        @yield('scripts')

        <script type="text/javascript">
            /* curator-feed-default-feed-layout */
            (function(){
            var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
            i.src = "https://cdn.curator.io/published/665652c2-9507-4961-9372-637c95380d14.js";
            e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
            })();
        </script>
    </body>
</html>
