<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Wink\WinkPost;

class AtmPost extends WinkPost implements Viewable
{
    use InteractsWithViews, readable;

    protected $removeViewsOnDelete = true;
}
