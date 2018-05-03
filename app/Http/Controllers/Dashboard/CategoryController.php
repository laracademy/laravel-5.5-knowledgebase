<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        $category = new Category;

        return view('dashboard.category.create', compact('category'));
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
        ];

        // perform validation
        $this->validate(request(), $rules);

        // passed validation
        Category::create(request()->only('name'));

        return redirect()->route('dashboard');
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $rules = [
            'name' => 'required',
        ];

        // perform validation
        $this->validate(request(), $rules);

        // update category
        $category->fill(request()->only('name'));
        $category->save();

        return redirect()->route('dashboard');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('dashboard');
    }

    public function attach(Category $category)
    {
        $articles = Article::orderBy('title')->get();

        return view('dashboard.category.attach', compact('articles', 'category'));
    }

    public function attachArticle(Category $category)
    {
        $category->articles()->attach(request('article'));

        return redirect()->route('dashboard.articles.index', $category);
    }
}
