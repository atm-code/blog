<div>
    <?php
    $excerpt = explode('===', $post->excerpt);
    $caption = ( $excerpt[0] ) ?? '';
    $finalExcerpt = ( $excerpt[1] ) ?? '';
    $allOldMeta = ( $excerpt[2] ) ?? '';

    $image = null;
    if (!$post->attachment->isEmpty() && $post->attachment->first() !== null) {
        $caption = $caption ?? $post->attachment->first()->post_excerpt;
        $image   = $post->attachment->first()->guid;
    } elseif ($post->thumbnail !== null) {
        $image = $post->thumbnail->size(Corcel\Model\Meta\ThumbnailMeta::SIZE_LARGE)['url'];
    }
    ?>

    <div class="border-2 border-silver-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white">
        @if($image !== null)
            <a href="/blog/{{ $post->slug }}">
                <img alt="{{ $post->title }}" class="border-sketchy-lg hover:border-sketchy-md object-cover h-50 w-full" src="{{ $image }}">
            </a>
            <p class="pt-1 text-gray-700 font-neucha italic text-center text-sm prose-light-blue">{!! $caption !!}</p>
        @endif

        <div class="my-6 mx-4 border-b pb-3">
            <a class="text-3xl text-red-800 hover:text-red-600 text-gray-700 transition ease-in-out duration-150" href="/blog/{{ $post->slug }}">
                {{ $post->title }}
            </a>

            <div class="my-3 text-1 text-silver-500">
                On:
                {{ $post->post_date->format('Y/m/d - h:i a') }}
            </div>

            <div class="mt-4 text-xl font-neucha italic text-silver-800">
                {!! nl2br($finalExcerpt) !!}
            </div>
        </div>
    </div>
</div>
