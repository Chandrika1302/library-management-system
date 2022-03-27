<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBooks(Request $req)
    {
        $user = session('user');
        $books = Book::all()->where('user', $user);
        return view('books', ['books' => $books]);

    }

    public function createbook_get(Request $req)
    {
        $user = session('user');
        $authors = Author::all()->where('user', $user);
        if(count($authors)<=0){
            return view('error404',["error"=>"Please add authors first"]);
        }
        return view('book-form',["authors"=>$authors]);
    }

    public function createbook_post(Request $req)
    {
        $user = session('user');
        $name = $req->input('name');
        $description = $req->input('description');
        $author = $req->input('author');
        $year = $req->input('year');
        $id = uniqid();

        $book = new book;
        $book->id = $id;
        $book->name = $name;
        $book->description = $description;
        $book->user = $user;
        $book->author = $author;
        $book->year = $year;

        $book->save();

        return redirect("/book?id=$id");

    }

    

    public function getbook(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');
        $book = book::all()->where('user', $user)->where('id', $id)->first();
        if (is_null($book)) {
            return view('error404');
        }
        return view('book', ['book' => $book]);
    }
    
    public function updatebook_get(Request $req)
    {
        $user = session('user');
        $authors = Author::all()->where('user', $user);
        $id = $req->input('id');
        $book = book::all()->where('id', $id)->first();
        return view('book-form', ['book' => $book,"authors"=>$authors]);
    }
    public function updatebook_post(Request $req)
    {
        $name = $req->input('name');
        $description = $req->input('description');
        $id = $req->input('id');
        $author = $req->input('author');
        $year = $req->input('year');

        $book = book::all()->where('id', $id)->first();
        $book->name = $name;
        $book->description = $description;
        $book->author = $author;
        $book->year = $year;
        $book->save();

        return redirect("/book?id=$id");

    }
    public function deletebook_post(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');

        $book = book::all()->where('id', $id)->where('user', $user)->first();

        $book->delete();
        return redirect('/books');
    }
    
}
