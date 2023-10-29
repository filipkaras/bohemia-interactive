<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3', 'max:100'],
            'last_name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6', 'max:100'] // hashed in mutator
        ]);

        $attributes['slug'] = Str::slug($attributes['first_name'] . ' ' . $attributes['last_name']);

        $user = User::create($attributes);

        // login
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
