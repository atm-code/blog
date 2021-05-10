<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">

    <title>
        @if(trim($__env->yieldContent('title')))
            @yield('title') -
        @endif
        {{ config('app.name', 'Laravel') }}
    </title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=IBM+Plex+Mono:ital,wght@1,300&family=Neucha&display=swap" rel="stylesheet">
</head>
<body class="font-sketch h-screen antialiased leading-none pt-10 px-0 mx-0 bg-mint-400"
      style="background-image: url('{{ asset('images/bgBody.png') }} '); background-repeat: no-repeat; background-position: center -200px">
    <div id="app" class="sm:px-6">
        @include('layouts.nav')

        @include('cookieConsent::index')

        <div class="w-full sm:w-1/3 md:w-full lg:w-full xl:w-2/3 mx-auto px-5">
            @yield('content')
            <div class="border-t mt-8 mb-4"></div>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    @if(!app()->environment('local'))
        <script async defer data-website-id="b8d3d8af-b87a-40ce-94f4-a95eb1cc5e2b" src="https://stats.atm-code.com/umami.js"></script>
    @endif
</body>
</html>
