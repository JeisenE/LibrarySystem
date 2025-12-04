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
        Borrow::create([
            'user_id' => auth()->id(),
            'book_id' => $request->book_id,
            'borrow_date' => now(),
            'return_date' => null,
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
        ]);

        return redirect()->back()->with('success', 'Book returned successfully!');
    }
}
