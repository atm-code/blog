<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;

class AtmPost extends Corcel implements Viewable
{
    use InteractsWithViews, readable;

    protected $connection = 'wordpress';
    protected $casts
        = [
            'post_date' => 'datetime',
        ];

    public function getImageUrlAttribute($value)
    {
        $image = asset('images/placeholder.png');
        if (!$this->attachment->isEmpty() && $this->attachment->first() !== null) {
            $caption = $caption ?? $this->attachment->first()->post_excerpt;
            $image   = $this->attachment->first()->guid;
        } elseif ($this->thumbnail !== null) {
            $image = $this->thumbnail->size(\Corcel\Model\Meta\ThumbnailMeta::SIZE_LARGE)['url'];
        }

        return $image;
    }

    public function getImageAltAttribute($value)
    {
        $excerpt = explode('===', $this->excerpt);
        $caption = ( $excerpt[0] ) ?? '';
        if (!$this->attachment->isEmpty() && $this->attachment->first() !== null) {
            $caption = $caption ?? $this->attachment->first()->post_excerpt;
        }

        return $caption;
    }

    public function getFinalExcerptAttribute($value)
    {
        $excerpt = explode('===', $this->excerpt);

        return ( $excerpt[1] ) ?? $post->excerpt;
    }

    protected $removeViewsOnDelete = true;
}
