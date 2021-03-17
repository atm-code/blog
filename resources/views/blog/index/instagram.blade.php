<h3 class="text-orange-800 text-lg leading-normal mb-6">
    <a href="https://www.instagram.com/atmonshi/" target="_blank">
        My Instagram feed:
    </a>
</h3>
<div class="grid grid-cols-2 gap-2 sm:gap-4">
    @foreach($instagram as $feed)
        <div>
            <a target="_blank" href="{{ $feed->getLink() ?? '' }}" title="{{ $feed->getCaption() ?? '' }}">
                <img alt="{{ $feed->getCaption() ?? '' }}" class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out rounded-lg shadow-md" src="{{ $feed->getThumbnailSrc() ?? '' }}">
                <div class="absolute -mt-8 ml-2">
                    <p class="text-sm rounded shadow bg-gray-400 p-1">
                        <svg class="w-4 h-4 text-red-600 inline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        {{ $feed->getLikes() ?? 0 }}
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
<p class="mt-6 text-red-800 text-center">
    <a class="text-center" href="https://www.instagram.com/atmonshi/" target="_blank">
        See More ...
    </a>
</p>
