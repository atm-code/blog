<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class HomeController extends Controller {

    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date' , 'DESC')
            ->simplePaginate(12);

        return view('blog.index' , [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        return view('blog.show', [
            'post' => WinkPost::where('slug', $slug)->first()
        ]);
    }

    function readingTime($post) {
        $word = str_word_count(strip_tags($post));
        $m = floor($word / 200);
        $est = $m . ' minute' . ($m == 1 ? '' : 's');
        return $est;
    }
}
