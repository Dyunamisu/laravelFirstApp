<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:20'
        ]);
        $user=User::create($attributes);
        // session()->flash('success','Your Account have been created.');

        auth()->login($user);

        return redirect('/')->with('success','Your Account have been created.');
    }
}
