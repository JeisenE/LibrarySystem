<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\User;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::with(['authors','categories'])->get();
        if ($request->route()->getName() === 'admin-page') {
            return view('admin.manage', compact('books'));
        }

        return view('home', compact('books'));
    }

    // View All Books
    public function viewAll()
    {
        $categories = Category::with(['books.authors', 'books.categories'])->get();
        return view('viewAll', compact('categories'));
    }

    // Show Borrowed Books
    public function borrowed()
    {
        $userId = session('user_id');

        $borrowedBooks = Borrow::where('user_id', $userId)->with('book')->get();

        return view('user.borrowList', compact('borrowedBooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('admin.addBook', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function search(Request $request)
    {   
        $locale = app()->getLocale();

        $query = $request->input('query');
        $books = Book::where(function ($q) use ($query, $locale) {
            if ($locale === 'en') {
                $q->where('title', 'like', "%{$query}%")
                ->orWhere('description_en', 'like', "%{$query}%");
        }   else {
            $q->where('title', 'like', "%{$query}%")
              ->orWhere('description_id', 'like', "%{$query}%");
        }
    })
        ->with(['authors', 'categories'])
        ->get();

        return view('books.search', compact('books', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {   
        $user_id = session('user_id');
        $validateBorrow = true;

        $countCheck = Borrow::where('user_id', $user_id)->whereNull('return_date')->count();
        if($countCheck >= 3){
            $validateBorrow = false;
        }
        $book->load(['authors', 'categories']);
        return view('books.show', compact('book', 'validateBorrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('admin.editBook', compact('book', 'authors', 'categories'));
    }


 
}
