<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\AtmPost;
use Corcel\Model\Taxonomy;

class HomeController extends Controller
{
    public function index()
    {
        $devPosts = AtmPost::newest()
            ->taxonomy('category', 'dev-talk')
            ->type('post')->newest()
            ->published()->take(4)->get();

        $lifePosts = AtmPost::newest()
            ->taxonomy('category', 'life-update')
            ->type('post')
            ->published()->take(4)->get();

        $youtube = ( app()->isLocal() ) ? collect() : Youtube::listChannelVideos(config('app.youtubeChannelID'), 6, 'date');

        return view('blog.index', [
            'devPosts'  => $devPosts,
            'lifePosts' => $lifePosts,
            'youtube'   => $youtube,
        ]);
    }

    public function show($slug)
    {
        $post = AtmPost::slug($slug)->with('taxonomies')->firstOrFail();

        views($post)->cooldown(now()->addHours(2))->record();

        return view('blog.show', [
            'post' => $post,
        ]);
    }

    public function page($slug)
    {
        $page = AtmPost::slug($slug)->firstOrFail();

        views($page)
            ->cooldown(now()->addHours(2))
            ->record();

        return view('blog.page', [
            'page' => $page,
        ]);
    }

    public function cat($cat)
    {
        return view('blog.cat', [
            'posts' => Taxonomy::category()->slug($cat)->with('posts')->first(),
        ]);
    }
}
