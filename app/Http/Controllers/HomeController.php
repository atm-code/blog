<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\AtmPage;
use App\Models\AtmPost;

class HomeController extends Controller
{
    public function index()
    {
        // Posts
        $posts = AtmPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

        // youtube
        $youtube = Youtube::listChannelVideos(config('app.youtubeChannelID'), 6, 'date');

        return view('blog.index', [
            'posts'   => $posts,
            'youtube' => $youtube,
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
        $page = AtmPage::whereSlug($slug)->firstOrFail();

        views($page)
            ->cooldown(now()->addHours(2))
            ->record();

        return view('page.index', [
            'page' => $page,
        ]);
    }
}
