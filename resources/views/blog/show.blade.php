@extends('layouts.app')

@section('content')
    <div class="clearfix mb-5">
        <div class="leading-loose float-left text-gray-700 text-5xl">
            {{ $post->title }}
        </div>
        <div class="leading-loose float-right pt-2 text-gray-700">
            {!! (new \App\Http\Controllers\HomeController)->readingTime($post->body) !!} reading <br>
            <span class="text-1">
                <span class="text-gray-700">
                    Publication Date:
                </span>
                {{ $post->publish_date->format('Y/m/d - h:i a') }}
            </span>
        </div>
    </div>

    <div class="mb-5">

    </div>

    <div class="w-full mb-10">
        <img class="object-cover h-48 w-full" src="{{ $post->featured_image ?? 'ssss' }}">
        <p class="pt-3 text-gray-700">{!! $post->featured_image_caption !!}</p>
    </div>

    <div class="pl-5 mb-5 text-2xl leading-relaxed font-sans" style="font-family: 'Georgia, Cambria', 'Times New Roman', Times, serif !important;">
        {!! nl2br($post->body) !!}
    </div>

@endsection
