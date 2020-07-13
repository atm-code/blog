@extends('layouts.app')

@section('title')
    {{ $page->title ?? '' }}
@endsection

@section('content')
    <div class="bg-white p-4 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out shadow">
        <div class="clearfix mb-5">
            <div class="leading-loose font-semibold float-left text-gray-700 text-4xl">
                {{ $page->title ?? '' }}
            </div>
            <div class="leading-loose float-right pt-2 text-gray-700">
                {!! $page->reading_time_desc !!} reading
                <span class="text-base">&nbsp;~&nbsp;</span>
                {{ views($page)->count() }} visits
                <br>
                <span class="text-1">
                    <span class="text-gray-700">
                        Publication Date:
                    </span>
                    {{ $page->created_at->format('Y/m/d - h:i a') }}
                </span>
            </div>
        </div>

        <div class="border-t -mt-4 mb-4"></div>

        @if($page->meta['twitter_image'])
            <div class="w-full mb-10">
                <img class="object-cover h-48 w-full" src="{{ asset($page->meta['twitter_image']) }}">
            </div>
        @endif

        <div class="pl-5 mb-5 text-2xl leading-relaxed font-neucha blog-content">
            {!! $page->body !!}
        </div>

        @if(!app()->environment('local'))
            <br>
            <div class="border-t mt-8 mb-4"></div>
            <br>

            <div id="disqus_thread"></div>
            <script>
                var PAGE_IDENTIFIER = "{{ $page->slug }}";
                var PAGE_URL        = "{{ url('/blog/'.$page->slug) }}";

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
    </div>
@endsection
