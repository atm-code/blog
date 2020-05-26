<?php

namespace App\Models;

trait readable
{
    public function getReadingTimeAttribute()
    {
        return $this->readingTime($this);
    }

    public function getReadingTimeDescAttribute()
    {
        return $this->readingTime($this, true);
    }

    public function readingTime($post, $fullText = false)
    {
        $word = str_word_count(strip_tags($post));
        $m = floor($word / 200);

        if (! $fullText) {
            return (int) $m;
        }

        return $m.' minute'.($m == 1 ? '' : 's');
    }
}
