<div>
    <div class="border-2 border-silver-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out p-4 mb-10 shadow-lg bg-white">
        <a href="/blog/{{ $post->slug }}">
            <img alt="{{ $post->title }}" class="border-sketchy-lg hover:border-sketchy-md object-cover h-50 w-full" src="{{ $post->image_url }}">
        </a>
        <p class="pt-1 text-gray-700 font-neucha italic text-center text-sm prose-light-blue">{!! $post->image_alt !!}</p>

        <div class="my-6 mx-4 border-b pb-3">
            <a class="text-3xl text-red-800 hover:text-red-600 text-gray-700 transition ease-in-out duration-150" href="/blog/{{ $post->slug }}">
                {{ $post->title }}
            </a>

            <div class="my-3 text-1 text-silver-500">
                On:
                {{ $post->post_date->format('Y/m/d - h:i a') }}
            </div>

            <div class="mt-4 text-xl font-neucha italic text-silver-800">
                {!! nl2br($post->final_excerpt) !!}
            </div>
        </div>
    </div>
</div>
