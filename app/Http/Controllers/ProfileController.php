<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $req)
    {
        $user = session('user');
        $authors = Author::all()->where('user', $user);
        $books = Book::all()->where('user', $user);

        $booksCount=count($books);
        $authorsCount=count($authors);
        return view('profile', ["booksCount" => $booksCount, "authorsCount" => $authorsCount]);
    }
}
