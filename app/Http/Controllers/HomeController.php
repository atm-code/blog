<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\AtmPage;
use App\Models\AtmPost;
use Illuminate\Support\Facades\Log;
use Instagram\Api;
use Instagram\Exception\InstagramException;
use Psr\Cache\CacheException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class HomeController extends Controller
{
    public function index()
    {
        // Posts
        $posts = AtmPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

        // Instagram
        $instagram = array_slice($this->instagram(), 0, 6);

        // youtube
        $youtube = Youtube::listChannelVideos(config('app.youtubeChannelID'), 6, 'date');

        return view('blog.index', [
            'posts'     => $posts,
            'youtube'   => $youtube,
            'instagram' => $instagram,
        ]);
    }

    public function instagram()
    {
        $cachePool = new FilesystemAdapter('Instagram', 43200, storage_path('app'));
        try {
            $api = new Api($cachePool);
            $api->login(config('app.instagramUsername'), config('app.instagramPassword'));
            $profile   = $api->getProfile(config('app.instagramAccount'));
            $instagram = $profile->getMedias();
        } catch (InstagramException $e) {
            logger()->error('Unknown foo returned from the example service', [
                'foo' => 'bar',
                'user_id' => 1
            ]);
            Log::emergency($e->getMessage());
            $instagram = [];
        } catch (CacheException $e) {
            logger()->error('Unknown foo returned from the example service', [
                'foo' => 'bar',
                'user_id' => 1
            ]);
            Log::emergency($e->getMessage());
            $instagram = [];
        }

        return $instagram;
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
            'page' => AtmPage::whereSlug($slug)->firstOrFail(),
        ]);
    }
}
