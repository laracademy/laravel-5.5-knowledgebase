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
}
