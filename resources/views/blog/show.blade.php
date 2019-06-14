@extends('layouts.app')

@section('content')
    <div class="clearfix mb-5">
        <div class="leading-loose font-semibold float-left text-gray-700 text-4xl">
            {{ $post->title }}
        </div>
        <div class="leading-loose float-right pt-2 text-gray-700">
            {!! $post->reading_time_desc !!} reading
            <span class="text-base">&nbsp;~&nbsp;</span>
            {{ views($post)->count() }} visits
            <br>
            <span class="text-1">
                <span class="text-gray-700">
                    Publication Date:
                </span>
                {{ $post->publish_date->format('Y/m/d - h:i a') }}
            </span>
        </div>
    </div>

    <div class="border-t -mt-4 mb-4"></div>

    @if($post->featured_image)
        <div class="w-full mb-10">
            <img class="object-cover h-48 w-full" src="{{ $post->featured_image ?? '' }}">
            <p class="pt-3 text-gray-700 font-neucha italic ml-4">{!! $post->featured_image_caption !!}</p>
        </div>
    @endif

    <div class="pl-5 mb-5 text-2xl leading-relaxed font-neucha">
        {!! nl2br($post->body) !!}
    </div>

    @if(!app()->environment('local'))

        <br>
        <div class="border-t mt-8 mb-4"></div>
        <br>

      
    @endif
    
@endsection
