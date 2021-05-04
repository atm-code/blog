<div class="relative">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-silver-300"></div>
    </div>
    <div class="relative flex items-center justify-between">
        <div class="sm:brush brush my-4 w-full sm:w-1/4 p-8 ">
            <p class="text-5xl sm:pl-10 pl-2">{{ $title }}</p>
        </div>

        @if(isset($link))
            <a href="{{ $link }}" type="button" class="inline-flex items-center shadow-sm px-4 py-1.5 border border-silver-300 text-sm leading-5 font-medium font-neucha rounded-full text-silver-900 bg-white hover:bg-silver-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-700 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1.5 mr-1 h-5 w-5 text-silver-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
                <span class="whitespace-nowrap">Read More...</span>
            </a>
        @endif
    </div>
</div>
