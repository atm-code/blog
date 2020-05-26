<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Wink\WinkPage;

class AtmPage extends WinkPage implements Viewable
{
    use InteractsWithViews, readable;

    protected $removeViewsOnDelete = true;
}
