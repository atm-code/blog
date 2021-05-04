@extends('layouts.app')

@section('title')
    {{ $post->title ?? '' }}
@endsection

@section('content')
    <?php
    $excerpt = explode('===',$post->excerpt);
    $caption = ($excerpt[0]) ?? '';
    $finalExcerpt = ($excerpt[1]) ?? '';
    $allOldMeta = ($excerpt[2]) ?? '';

    $image = null;
    if (!$post->attachment->isEmpty() && $post->attachment->first() !== null) {
        $caption = $caption ?? $post->attachment->first()->post_excerpt;
        $image   = $post->attachment->first()->guid;
    } elseif ($post->thumbnail !== null) {
        $image = $post->thumbnail->size(Corcel\Model\Meta\ThumbnailMeta::SIZE_LARGE)['url'];
    }
    ?>

    <div class="bg-white p-4 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out shadow">
        <div class="flow-root mb-5">
            <div class="leading-loose font-semibold float-left text-gray-700 text-4xl">
                {{ $post->title ?? '' }}
                @foreach($post->taxonomies as $taxonomies)
                    <a href="{{ url('/cat/'.$taxonomies->term->slug) }}"
                       class="cursor-pointer brush inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium text-silver-900 hover:text-light-blue-900 transition duration-700 ease-in-out">
                        {{ $taxonomies->term->name ?? '' }}
                    </a>
                @endforeach
            </div>
            <div class="leading-loose float-right pt-2 text-gray-700">
                {!! $post->reading_time_desc !!} reading
                <span class="text-base">&nbsp;~&nbsp;</span>
                {{ views($post)->count() }} visits
                <br>
                On: {{ $post->post_date->format('Y/m/d - h:i a') }}
            </div>
        </div>

        <div class="border-t -mt-4 mb-4"></div>

        @if($image !== null)
            <div class="border-sketchy-md mb-10 relative h-96 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url('{{ $image }}');">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b via-transparent from-transparent to-silver-800"></div>
                <div class="absolute bottom-2.5 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <p class="bottom-0 relative left-0 pt-3 text-mint text-lg font-neucha italic ml-4 prose prose-mint">{!! $caption !!}</p>
                </div>
            </div>
        @endif

        <div class="pl-5 mb-8 font-neucha text-3xl leading-relaxed tracking-wide {{--prose prose-2xl prose-light-blue--}}">
            {!! $post->post_content !!}
        </div>

        @if(!app()->environment('local'))
            <br>
            <div class="border-t mt-8 mb-4"></div>
            <br>
        @endif
    </div>
@endsection
