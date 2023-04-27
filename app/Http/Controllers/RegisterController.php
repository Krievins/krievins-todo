<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create () {
        
        return view('register.register');

    }

    public function store () {

        // Create The User

        // return request()->all();

        $attributes = request()->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'password' => ['required'],
            'email' => ['required']
        ]);

        $user = User::create($attributes);

        // Log the user in

        auth()->login($user);

        return redirect('/home');
    }
}
