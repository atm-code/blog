@extends('layouts.app')

@section('content')
    <div class="lg:sketchy-box leading-loose mb-10 p-6 text-2xl font-neucha border-2 border-gray-500 bg-gray-300 border-sketchy-sm shadow-lg">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>

    <div class="grid sm:grid-cols-3 gap-1 sm:gap-4">
        <div class="col-span-2">
            @foreach($posts as $post)
                <div class="border-2 border-gray-500 border-sketchy-lg p-4 mb-10 shadow-lg bg-white">
                    <div class="text-2xl sm:text-2xl text-gray-700 mb-5 text-red-800 hover:text-red-600 border-b pb-3">
                        <a href="/blog/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </div>
                    <div class="mb-5">
                <span class="text-1">
                    <span class="text-gray-700">
                        Publication Date:
                    </span>
                    {{ $post->publish_date->format('Y/m/d - h:i a') }}
                </span>
                    </div>

                    @if($post->featured_image)
                        <div class="w-full mb-10">
                            <a href="/blog/{{ $post->slug }}">
                                <img class="object-cover h-48 w-full" src="{{ $post->featured_image ?? '' }}">
                                <p class="pt-3 text-gray-700 font-neucha italic ml-4">{!! $post->featured_image_caption !!}</p>
                            </a>
                        </div>
                    @endif

                    <div class="pl-5 mb-5 text-xl font-neucha italic">
                        {!! nl2br($post->excerpt) !!}
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
            <br>
        </div>

        <div class="col-span-1">
            <div class="border-2 border-gray-500 border-sketchy-lg p-4 mb-10 shadow-lg bg-white pt-8">
                <h3 class="text-orange-800 text-lg mb-6">
                    <a href="https://www.instagram.com/atmonshi/" target="_blank">
                        My Instagram feed:
                    </a>
                </h3>
                <div class="grid grid-cols-2 gap-2 sm:gap-4">
                    @foreach($instagram as $feed)
                        <div>
                            <a target="_blank" href="{{ $feed->link ?? '' }}" title="{{ $ffed->caption ?? '' }}">
                                <img alt="{{ $ffed->caption ?? '' }}" class="border-2 border-gray-500 border-sketchy-lg rounded-lg shadow-md" src="{{ $feed->thumbnailSrc ?? '' }}">
                                <div class="absolute -mt-8 ml-2">
                                    <p class="text-sm rounded shadow bg-gray-400 p-1">
                                        <svg class="w-4 h-4 text-red-600 inline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                        {{ $feed->likes ?? 0 }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <p class="mt-6 text-red-800 text-center">
                    <a class="text-center" href="https://www.instagram.com/atmonshi/" target="_blank">
                        See More ...
                    </a>
                </p>

            </div>

            <div class="border-2 border-gray-500 border-sketchy-lg p-4 mb-10 shadow-lg bg-white pt-8">
                <a class="twitter-timeline" data-lang="en" data-height="500" href="https://twitter.com/ATmonshi?ref_src=twsrc%5Etfw">Tweets by ATmonshi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>

    </div>
@endsection
