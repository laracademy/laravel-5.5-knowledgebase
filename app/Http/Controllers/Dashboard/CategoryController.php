<?php

namespace App\Http\Controllers\Dashboard;

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
}
