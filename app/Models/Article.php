<?php

namespace App\Models;

use Parsedown;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class, 'article_category', 'article_id', 'category_id');
    }

    // helpers

    public function toHtml()
    {
        return Parsedown::instance()->text($this->content);
    }
}
