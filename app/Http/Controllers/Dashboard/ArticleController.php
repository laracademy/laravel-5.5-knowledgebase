<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Category $category)
    {

        $category->load('articles');

        return view('dashboard.articles.index', compact('category'));
    }

    public function create(Category $category)
    {
        $article = new Article;

        return view('dashboard.articles.create', compact('article', 'category'));
    }

    public function store(Category $category)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];

        $article = Article::create($this->validate(request(), $rules));

        $category->articles()->save($article);

        return redirect()->route('dashboard.articles.index', $category);
    }

    public function edit(Article $article, Category $category)
    {
        return view('dashboard.articles.edit', compact('article', 'category'));
    }

    public function update(Article $article)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];

        $article->fill($this->validate(request(), $rules));
        $article->save();

        return redirect()->route('dashboard.articles.index', request('category'));
    }

    public function destroy(Article $article, Category $category)
    {
        $category->articles()->detach($article);

        return redirect()->route('dashboard.articles.index', $category);
    }
}
