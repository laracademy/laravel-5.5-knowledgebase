<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view(Category $category)
    {
        return view('category.view', compact('category'));
    }
}
