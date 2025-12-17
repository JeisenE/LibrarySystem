<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Show all categories.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show books inside category.
     */
    public function show($id)
    {
        $category = Category::with('books.authors', 'books.categories')->findOrFail($id);

        return view('categories.show', compact('category'));
    }
}
