<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $usersInDB = User::all()->where('username', $username)->where('password', $password);
        if (count($usersInDB) <= 0) {
            return view('user-form', ['error' => "No user with the provided details!", "title"=>"Login"]);
        };
        $req->session()->put('user', $username);
        return redirect('profile');
    }
}
