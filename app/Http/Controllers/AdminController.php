<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.index', compact('books'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'publish_year' => $request->publish_year,
            'publisher' => $request->publisher,
            'status' => 'available'
        ]);

        return redirect()->route('admin.index');
    }

    public function edit(Book $book)
    {
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->only([
            'title',
            'description',
            'publish_year',
            'publisher'
        ]));

        return redirect()->route('admin.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.index');
    }
}
