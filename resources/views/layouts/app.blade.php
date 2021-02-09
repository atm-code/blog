<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<body class="font-sketch h-screen antialiased leading-none">
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
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-376141-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-376141-13');
        </script>
    @endif

</body>
</html>
