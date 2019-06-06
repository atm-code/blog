<?php

namespace App\Http\Controllers;

use App\AtmPost;

class HomeController extends Controller {

    public function index()
    {
        $posts = AtmPost::with('tags')
            ->live()
            ->orderBy('publish_date' , 'DESC')
            ->simplePaginate(12);

        return view('blog.index' , [
            'posts' => $posts ,
        ]);
    }

    public function show($slug)
    {
        $post = AtmPost::where('slug' , $slug)->first();

        views($post)
            ->delayInSession($post->reading_time)
            ->record()
        ;

        return view('blog.show' , [
            'post' => $post ,
        ]);
    }
}
