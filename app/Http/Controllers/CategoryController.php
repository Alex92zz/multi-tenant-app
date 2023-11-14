<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        $category = Category::where('slug', $category)->firstOrFail();
        $categoryPosts = $category->posts()->latest()->paginate(10);

        return view('category.show', compact('categoryPosts', 'category'));
    }
}
