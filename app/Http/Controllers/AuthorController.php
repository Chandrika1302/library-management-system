<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAuthors(Request $req)
    {
        $user = session('user');
        $authors = Author::all()->where('user', $user);
        return view('authors', ['authors' => $authors]);

    }

    public function createAuthor_get(Request $req)
    {
        return view('author-form');
    }

    public function createAuthor_post(Request $req)
    {
        $user = session('user');
        $name = $req->input('name');
        $description = $req->input('description');
        $id = uniqid();

        $author = new Author;
        $author->id = $id;
        $author->name = $name;
        $author->description = $description;
        $author->user = $user;

        $author->save();

        return redirect("/author?id=$id");

    }

    public function getAuthor(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');
        $author = Author::all()->where('user', $user)->where('id', $id)->first();
        if (is_null($author)) {
            return view('error404');
        }
        $books=Book::all()->where('user', $user)->where('author', $author->name);
        return view('author', ['author' => $author,'books'=>$books]);
    }
    public function updateAuthor_get(Request $req)
    {
        $id = $req->input('id');
        $author = Author::all()->where('id', $id)->first();
        return view('author-form', ['author' => $author]);
    }
    public function updateAuthor_post(Request $req)
    {
        $name = $req->input('name');
        $description = $req->input('description');
        $id = $req->input('id');

        $author = Author::all()->where('id', $id)->first();
        $author->name = $name;
        $author->description = $description;
        $author->save();

        return redirect("/author?id=$id");

    }
    public function deleteAuthor_post(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');

        $author = Author::all()->where('id', $id)->where('user', $user)->first();

        $books=Book::all()->where('user', $user)->where('author', $author->name);
        if(count($books)>0){
            return view('author', ['author' => $author,'books'=>$books, 'error'=>"Please delete the following books first:"]);
        }
        $author->delete();
        return redirect('/authors');
    }
}
