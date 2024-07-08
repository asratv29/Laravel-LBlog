<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create() {
        return view('register.create');
    }

    public function store()
    {

       $attribute =  request()->validate([
            'username' => 'required|min:2|max:25|unique:users,username',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users:email',
            'password' => 'required|min:8|max:32'
        ]);

       User::create($attribute);
       return redirect('/');
    }
}
