<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Corcel\Model\Post as Corcel;

class AtmPost extends Corcel implements Viewable
{
    use InteractsWithViews, readable;
    protected $connection = 'wordpress';
    protected $casts = [
        'post_date'=>'datetime',
    ];

    protected $removeViewsOnDelete = true;
}
