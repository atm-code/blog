@extends('layouts.app')

@section('content')
    <div class="sm:brush brush my-4 w-full sm:w-1/4 p-8 ">
        <p class="text-5xl sm:pl-10 pl-2">{{ $posts->term->name ?? '' }}</p>
    </div>
    <div class="grid sm:grid-cols-4 grid-cols-1 sm:gap-4 gap-0 items-stretch sm:p-4 p-2">
        @foreach($posts->posts->sortByDesc('post_date') as $post)
            <x-post :post="$post"/>
        @endforeach
    </div>
@endsection
