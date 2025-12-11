<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    /**
     * Display the homepage.
     */
    public function index()
    {   

        $books = \App\Models\Book::with('authors', 'categories')->take(7)->get();
        $featuredBook = $books->first();
        $books = $books->skip(1);

        //buat nampilin nama user di home
        $userId = session('user_id');
        
        //cari datanya di database by user
        if($userId){
            $user = User::find($userId);
        }else{
            $user = null;
        }

        return view('home', compact('books', 'featuredBook', 'user'));
    }
}
