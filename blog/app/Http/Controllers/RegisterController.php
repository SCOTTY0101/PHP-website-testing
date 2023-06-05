<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
       // return request()->all();
        // create the user
        $attribute = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:12', 'max:255']
        ]);

       // $attribute['password'] = bcrypt($attribute['password']);
        ///dd('success validation succeeded'); //Views if Passes, else Fails.
        User::create($attribute);
        return redirect('/');
    }
}
