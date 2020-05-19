<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=IBM+Plex+Mono:ital,wght@1,300&family=Neucha&display=swap" rel="stylesheet">

</head>
<body class="font-sketch h-screen antialiased leading-none sm:px-6">

<div id="app">

    @include('layouts.nav')

    <div class="w-full sm:w-1/3 md:w-full lg:w-full xl:w-2/3 mx-auto px-5
    {{--border border-red-500 sm:border-yellow-500 md:border-pink-500 lg:border-blue-500 xl:border-green-500--}}
                ">
        @yield('content')

        <div class="border-t mt-8 mb-4"></div>
    </div>

    <div class="mt-16 mb-10 text-center text-md leading-loose font-neucha">
        Copyright {{ date('Y') }} - <a class="text-blue-700 font-bold" href="https://atm-code.com/" target="_blank">atm-code</a>
        <br>
        made with ❤️ by
        <a class="text-blue-700 font-bold" href="https://wink.themsaid.com/" target="_blank">Wink</a>
        and
        <a class="text-blue-700 font-bold" href="https://tailwindcss.com" target="_blank">tailwindcss</a>
    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
@if(!app()->environment('local'))
    <script id="dsq-count-scr" src="//wh-em.disqus.com/count.js" async></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
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
