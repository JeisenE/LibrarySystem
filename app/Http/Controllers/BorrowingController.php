<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display borrowing list.
     */
    public function index()
    {
         $borrowings = Borrowing::with(['book', 'user'])
            ->where('user_id', auth()->id())
            ->get();

        return view('borrowings.index', compact('borrowings'));
    }
}
