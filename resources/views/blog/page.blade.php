@extends('layouts.app')

@section('title')
    {{ $page->title ?? '' }}
@endsection

@section('content')
    <div class="bg-white p-4 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out shadow">
        <div class="flow-root mb-5">
            <div class="leading-loose font-semibold float-left text-gray-700 text-4xl">
                {{ $page->title ?? '' }}
            </div>
            <div class="leading-loose float-right pt-2 text-gray-700">
                {!! $page->reading_time_desc !!} reading
                <span class="text-base">&nbsp;~&nbsp;</span>
                {{ views($page)->count() }} visits
                <br>
                On: {{ $page->created_at->format('Y/m/d - h:i a') }}
            </div>
        </div>

        <div class="border-t -mt-4 mb-4"></div>

        @if($post->thumbnail !== null)
            <div class="border-sketchy-md mb-10 relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url('{{ $post->image_url }}');">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b via-transparent from-transparent to-silver-800"></div>
                <div class="absolute bottom-2.5 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <p class="bottom-0 relative left-0 pt-3 text-mint text-lg font-neucha italic ml-4 prose prose-mint">{!! $post->image_alt !!}</p>
                </div>
            </div>
        @endif

        <div class="pl-5 mb-8 font-neucha prose prose-2xl text-3xl leading-relaxed tracking-wide prose-light-blue">
            {!! $page->post_content !!}
        </div>
    </div>
@endsection
