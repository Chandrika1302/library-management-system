<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

//root
Route::get('/', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }

    return view('welcome');
});

//register
Route::get('/register', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }

    return view('user-form',["title"=>"New Registeration"]);
});
Route::post('/register', [RegisterController::class, "register"]);

//login
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('user-form',["title"=>"Login"]);
});
Route::post('/login', [LoginController::class, "login"]);

//logout
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('/login');
});

//profile
Route::get('profile', [ProfileController::class, "index"]);

//about
Route::get('/about', function () {
   return view('about');
});

//authors
Route::get('/authors', [AuthorController::class, "getAuthors"]);

//author C
Route::get('/author/create', [AuthorController::class, "createAuthor_get"]);
Route::post('/author/create', [AuthorController::class, "createAuthor_post"]);

//author R
Route::get('/author', [AuthorController::class, "getAuthor"]);

//author U
Route::get('/author/update', [AuthorController::class, "updateAuthor_get"]);
Route::post('/author/update', [AuthorController::class, "updateAuthor_post"]);

//author D
Route::post('/author/delete', [AuthorController::class, "deleteAuthor_post"]);

//books all
Route::get('/books', [BookController::class, "getBooks"]);

//book C
Route::get('/book/create', [BookController::class, "createbook_get"]);
Route::post('/book/create', [BookController::class, "createbook_post"]);

//book R
Route::get('/book', [BookController::class, "getbook"]);

//book U
Route::get('/book/update', [BookController::class, "updatebook_get"]);
Route::post('/book/update', [bookController::class, "updatebook_post"]);

//book D
Route::post('/book/delete', [bookController::class, "deletebook_post"]);
