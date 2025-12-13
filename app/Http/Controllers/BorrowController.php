<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Borrow a book. 
     */
    public function store(Request $request)
    {
        $book = Book::findOrFail($request->book_id);
        if (!$book->isAvailable()) {
            return redirect()->back()->with('error', 'Book is already borrowed');
        }

        Borrow::create([
            'user_id' => auth()->id(),
            'book_id' => $request->book_id,
            'borrow_date' => now(),
            'return_date' => null,
        ]);

        $book->update([
            'status' => 'borrowed'
        ]);

        return redirect()->back()->with('success', 'Book borrowed successfully!');
    }

    /**
     * Return a book.
     */
    public function returnBook($id)
    {
        $borrow = Borrow::findOrFail($id);

        $borrow->update([
            'return_date' => now(),
            'status' => 'returned'
        ]);

        $borrow->book->update([
        'status' => 'available'
        ]);

        return redirect()->back()->with('success', 'Book returned successfully!');
    }
}
