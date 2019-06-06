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

</head>
<body class="font-sketch h-screen antialiased leading-none sm:px-6">

<div id="app">
    <nav class="mb-12 my-5 italic p-3 border-2 border-gray-800 border-sketchy-nav">
        <div class="w-2/3 mx-auto px-6 md:px-0">
            <div class="flex items-center justify-center">
                <div class="flex items-center flex-shrink-0 mr-6 sm:mr-0">
                    <a href="{{ url('/') }}">
                        <svg class="fill-current text-red-900 sm:h-8 sm:w-8 lg:h-auto lg:w-10 mr-2 " version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400.000000 400.000000">
                            <g transform="translate(0.000000,400.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2387 3959 c-69 -10 -111 -33 -127 -68 -20 -45 -31 -201 -25 -351 7-142 6 -146 -17 -180 -13 -19 -35 -40 -49 -47 -23 -11 -253 -14 -984 -11 -55 0 -206 -4 -335 -10 -183 -8 -245 -14 -280 -28 -112 -44 -298 -192 -326 -259 -30 -72 -38 -200 -38 -580 0 -1036 21 -1975 45 -2093 8 -40 22 -66 60 -110 63 -71 154 -150 195 -168 77 -33 638 -58 1110 -50 493 8 546 16 588 87 23 38 75 67 87 47 5 -7 9 -18 9 -25 0 -29 52 -72 98 -82 132 -28 429 -20 505 13 55 24 191 164 226 233 44 87 50 124 66 400 11 194 12 274 3 377 -13 155 -12 426 3 621 8 104 8 211 -2 417 -9 214 -10 280 0 291 9 12 55 16 209 20 174 4 204 8 262 28 101 37 104 47 108 305 5 273 -4 314 -84 395 -101 102 -211 151 -373 165 -57 5 -84 12 -107 30 l-31 23 -5 210 c-5 196 -7 213 -31 264 -27 60 -47 77 -129 110 -45 18 -75 21 -208 23 -85 1 -202 4 -260 7 -58 3 -131 1 -163 -4z m261 -144 c18 -2 74 1 125 5 79 7 101 5 155 -13 54 -17 66 -26 87 -61 24 -41 24 -46 23 -269 -1 -251 1 -258 65 -297 25 -16 50 -20 119 -20 48 0 111 -5 140 -11 71 -15 159 -62 202 -109 19 -21 45 -45 57 -54 21 -14 22 -24 26 -173 2 -87 1 -177 -2 -201 l-6 -42 -102 7 c-120 9 -147 9 -291 -2 -108 -8 -110 -9 -145 -44 -34 -34 -37 -42 -48 -133 -7 -66 -8 -111 -1 -140 5 -24 10 -153 11 -288 l2 -245 -33 -95 c-39 -111 -104 -254 -126 -276 -9 -8 -16 -22 -16 -30 0 -8 -5 -14 -12 -14 -6 0 -8 -3 -5 -6 9 -9 -99 -164 -192 -276 -232 -277 -588 -542 -996 -739 -229 -111 -323 -147 -358 -138 -16 4 -40 4 -54 -2 -32 -12 -135 -12 -167 1 -16 6 -35 6 -55 -1 -20 -7 -42 -7 -70 1 -22 6 -117 12 -210 15 l-169 3 -52 49 c-28 26 -71 66 -93 89 -23 23 -49 44 -59 47 -12 4 -18 23 -22 79 -3 40 -6 84 -5 98 1 14 -2 61 -6 105 -8 98 -8 121 4 143 5 10 3 42 -6 82 -17 78 -19 165 -4 202 6 18 7 38 0 60 -18 61 -22 201 -9 308 15 125 15 109 5 290 -9 168 3 252 61 428 174 532 541 865 1078 978 155 32 431 43 611 24 159 -18 181 -17 212 6 63 47 89 123 71 207 -5 23 -11 133 -15 243 l-6 201 29 12 c26 10 124 8 252 -4z"/>
                                <path d="M1340 2608 c-114 -24 -166 -41 -205 -68 -48 -33 -101 -107 -114 -159 -5 -20 -12 -272 -15 -561 -3 -289 -10 -556 -15 -595 -6 -46 -6 -84 0 -109 6 -22 14 -93 17 -159 l7 -121 84 -74 84 -75 101 9 c55 5 279 9 496 9 382 1 396 2 435 22 45 23 115 95 138 139 36 72 56 160 49 210 -5 27 -5 81 -1 119 3 39 2 94 -3 123 -9 52 -8 54 36 121 59 89 162 302 175 362 8 38 7 56 -8 98 -10 28 -20 53 -23 56 -3 3 -44 14 -92 24 -48 11 -91 22 -94 26 -4 4 -9 104 -12 223 -6 205 -7 220 -30 266 -20 38 -38 57 -85 85 l-60 37 -125 -2 c-69 -2 -156 -7 -195 -13 -124 -19 -336 -13 -479 13 -11 2 -41 0 -66 -6z m350 -153 c80 0 202 4 271 9 69 5 142 6 162 2 50 -9 94 -50 107 -96 14 -52 22 -1299 9 -1362 -12 -53 -55 -118 -96 -145 -25 -16 -58 -18 -378 -18 -192 0 -384 -4 -426 -9 l-76 -9 -42 38 c-65 59 -73 80 -61 172 7 47 10 319 9 683 -2 671 -5 642 63 693 59 44 120 56 233 48 44 -3 145 -6 225 -6z"/>
                            </g>
                        </svg>
                    </a>
                    <a href="{{ url('/') }}" class="no-underline sm:text-2xl lg:text-3xl">
                        Ashraf Monshi <span class="sm:text-2xl lg:text-3xl tracking-tighter">Blog</span>
                    </a>
                </div>

                <div class="block hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow "></div>
                    <div></div>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-2/3 mx-auto px-5 lg:max-w-screen">
        @yield('content')

        <div class="border-t mt-8 mb-4"></div>
    </div>


    <div class="mt-16 mb-10 text-center text-md leading-loose font-neucha">
        Copyright {{ date('Y') }} - ATM
        <br>
        made with ❤️ by
        <a class="text-blue-700 font-bold" href="https://wink.themsaid.com/" target="_blank">Wink</a>
        and
        <a class="text-blue-700 font-bold" href="https://tailwindcss.com" target="_blank">tailwindcss</a>
    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>

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
