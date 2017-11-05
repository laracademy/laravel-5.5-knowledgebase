<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'markdown', 'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class, 'article_category', 'article_id', 'category_id');
    }
}
