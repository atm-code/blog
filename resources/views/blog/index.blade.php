@extends('layouts.app')

@section('content')
    <div class="sketchy-box mb-10 p-6 text-2xl font-neucha border-2 border-gray-500 bg-gray-300 border-sketchy-sm shadow-lg">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>

    {{--<div class="mb-10 p-6 text-2xl font-neucha border-2 border-gray-500 bg-gray-300 border-sketchy-sm">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>--}}

    <div>
        @foreach($posts as $post)
            <div class="border-2 border-gray-500 border-sketchy-lg p-4 mb-10 shadow-lg bg-white">
                <div class="text-gray-700 text-4xl mb-5 text-red-800 hover:text-red-600 border-b pb-3">
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
    </div>
    <br>
    {{ $posts->links() }}
@endsection
