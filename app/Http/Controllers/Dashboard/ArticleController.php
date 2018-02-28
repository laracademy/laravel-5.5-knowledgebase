<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Category $category)
    {

        $category->load('articles');

        return view('dashboard.articles.index', compact('category'));
    }
}
