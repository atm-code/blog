@extends('layouts.app')

@section('content')
    <div class="my-24 p-6 text-xl font-semibold text-blue-700">
        Welcome to my new blog , it's just a beginning, I hope I keep blogging .
    </div>

    <div>
        @foreach($posts as $post)
            <div class="border-2 border-gray-600 border-sketchy-lg p-4 mb-10">
                <div class="text-gray-700 text-4xl mb-5 text-red-800 hover:text-red-600">
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

                <div class="w-full mb-10">
                    <a href="/blog/{{ $post->slug }}">
                        <img class="object-cover h-48 w-full" src="{{ $post->featured_image ?? 'ssss' }}">
                        <p class="pt-3 text-gray-700">{!! $post->featured_image_caption !!}</p>
                    </a>
                </div>
                <div class="pl-5 mb-5 text-2xl">
                    {!! nl2br($post->excerpt) !!}
                </div>
            </div>
        @endforeach
    </div>
    <br>
    {{ $posts->links() }}
@endsection
