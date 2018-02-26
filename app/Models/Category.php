<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function articles()
    {
        return $this->belongsToMany(\App\Models\Article::class, 'article_category', 'category_id', 'article_id');
    }

    // events
    static public function boot()
    {
        Category::deleting(function ($category) {
            $category->articles()->detach();
        });
    }
}
