<h3 class="text-orange-800 text-lg leading-normal mb-6">
    <a href="https://www.instagram.com/atmonshi/" target="_blank">
        My Youtube Channel:
    </a>
</h3>
<div class="grid grid-cols-2 gap-2 sm:gap-4">
    @foreach($youtube as $you)
        <div>
            <a target="_blank" href="https://www.youtube.com/watch?v={{ $you->id->videoId }}" title="{{ $you->snippet->title ?? '' }}">
                <img alt="{{ $you->snippet->title ?? '' }}" class="border-2 border-gray-500 border-sketchy-lg hover:border-sketchy-md transition duration-700 ease-in-out rounded-lg shadow-md" src="{{ $you->snippet->thumbnails->medium->url ?? '' }}">
            </a>
        </div>
    @endforeach
</div>
<p class="mt-6 text-red-800 text-center">
    <a class="text-center" href="https://www.youtube.com/c/ashrafmonshi" target="_blank">
        See More ...
    </a>
</p>
