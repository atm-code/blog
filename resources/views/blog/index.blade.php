@extends('layouts.app')

@section('content')
    <div class="lg:sketchy-box leading-loose mb-10 p-6 text-2xl font-neucha border-2 border-gray-500 bg-gray-300 border-sketchy-sm hover:border-sketchy-lg transition duration-700 ease-in-out shadow-lg">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>

    <div class="grid sm:grid-cols-3 gap-1 sm:gap-4">
        <div class="col-span-2">
            @include('blog.index.posts')
        </div>

        <div class="sm-col-span-2 col-span-1">
            {{--<div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
                @include('blog.index.instagram')
            </div>--}}

            <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
                <a class="twitter-timeline" data-lang="en" data-height="500" href="https://twitter.com/ATmonshi?ref_src=twsrc%5Etfw">Tweets by ATmonshi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
                @include('blog.index.youtube')
            </div>

            <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
                <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/flying-high/pl.u-ABBaC7Gv9Mo"></iframe>
            </div>
        </div>

    </div>

    <div class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white pt-8">
        @include('blog.index.show')
    </div>

@endsection
