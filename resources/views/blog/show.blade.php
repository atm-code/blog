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
            <a href="/blog/{{ $post->slug }}">
                <img class="object-cover h-48 w-full" src="{{ $post->featured_image ?? '' }}">
                <p class="pt-3 text-gray-700 font-neucha italic ml-4">{!! $post->featured_image_caption !!}</p>
            </a>
        </div>
    @endif

    <div class="pl-5 mb-5 text-2xl leading-relaxed font-neucha">
        {!! nl2br($post->body) !!}
    </div>

    @if(!app()->environment('local'))

        <br>
        <div class="border-t mt-8 mb-4"></div>
        <br>

        <div id="disqus_thread"></div>
        <script>
            var PAGE_IDENTIFIER = "{{ $post->slug }}";
            var PAGE_URL        = "{{ url('/blog/'.$post->slug) }}";

            var disqus_config = function () {
                this.page.url        = PAGE_URL;
                this.page.identifier = PAGE_IDENTIFIER;
            };

            (function () { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://wh-em.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the
            <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
        </noscript>
    @endif
    
@endsection
