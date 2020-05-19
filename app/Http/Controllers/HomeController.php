<?php

namespace App\Http\Controllers;

use App\AtmPost;

class HomeController extends Controller
{
    public function index()
    {
        $posts = AtmPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $post = AtmPost::where('slug', $slug)->firstOrFail();

        views($post)
            ->delayInSession(now()->addHours(2))
            ->record();

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
