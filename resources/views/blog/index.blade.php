@extends('layouts.app')

@section('content')
    <div class="lg:sketchy-box leading-loose mb-10 p-6 text-3xl font-neucha border-2 border-gray-500 text-silver-800 bg-silver-100 border-sketchy-sm hover:border-sketchy-lg transition duration-700 ease-in-out shadow-lg">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>

    @include('blog.index.posts')

    <div class="w-full border-t border-gray-300 mb-10"></div>

    <x-more :title="'Social'"/>

    <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-4 gap-0">
        {{--<div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
            @include('blog.index.instagram')
        </div>--}}

        <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
            <a class="twitter-timeline" data-lang="en" data-height="500" data-width="100%" style="width: 100%;" href="https://twitter.com/ATmonshi?ref_src=twsrc%5Etfw">Tweets by ATmonshi</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
            @include('blog.index.youtube')
        </div>

        <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
            <iframe allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="100" style="width:100%; height: 100%; overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/my-fav-from-yt/pl.u-6xrLtZ6dNYj"></iframe>
        </div>

        <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
            @include('blog.index.show')
        </div>
    </div>
@endsection
