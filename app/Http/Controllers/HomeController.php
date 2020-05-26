<?php

namespace App\Http\Controllers;

use App\Models\AtmPage;
use App\Models\AtmPost;
use Instagram\Api;
use Instagram\Storage\CacheManager;

class HomeController extends Controller
{
    public function index()
    {
        $posts = AtmPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

        $cache = new CacheManager(storage_path('app/Instagram'));
        $api   = new Api($cache);
        $api->setUserName(config('app.instagram'));
        $instagram = $api->getFeed();

        return view('blog.index', [
            'posts'     => $posts,
            'instagram' => array_slice($instagram->medias,0,6),
        ]);
    }

    public function show($slug)
    {
        $post = AtmPost::where('slug', $slug)->firstOrFail();

        views($post)
            ->cooldown(now()->addHours(2))
            ->record();

        return view('blog.show', [
            'post' => $post,
        ]);
    }

    public function page($slug)
    {
        return view('page.index', [
            'page'     => AtmPage::whereSlug($slug)->firstOrFail(),
        ]);
    }
}
