<x-more :link="url('/cat/dev-talk')" :title="'Dev Talks'"/>
<div class="grid sm:grid-cols-4 grid-cols-1 sm:gap-4 gap-0 items-stretch sm:p-4 p-2">
    @foreach($devPosts as $post)
        <x-post :post="$post"/>
    @endforeach
</div>

<x-more :link="url('/cat/life-update')" :title="'Life Updates'"/>
<div class="grid sm:grid-cols-4 grid-cols-1 sm:gap-4 gap-0 items-stretch sm:p-4 p-2">
    @foreach($lifePosts as $post)
        <x-post :post="$post"/>
    @endforeach
</div>
