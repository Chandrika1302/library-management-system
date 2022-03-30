<?php

namespace App\Http\Controllers;
use  App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $req){


        $username = $req->input('username');
        $password = $req->input('password');
        
        $usersInDB= User::all()->where('username',$username);
        if(count($usersInDB)){
            return view('user-form',['error'=>"username already taken", "title"=>"New Registration"]);
        };

        $this->insert($username,$password);
        $req->session()->put('user', $username);

        return redirect('/profile');

    }

    private function insert($username,$password) {
        $user = new User;
        $user->username =$username;
        $user->password =$password;
    
        $user->save();
    
    }
}