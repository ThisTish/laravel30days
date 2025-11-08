<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $validatedData = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email','max:254'],
            // laravel docs validation for more password necessities
            'password' => ['required', Password::min(6)] //confirmed (password_confirmation)
        ]);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/jobs');

    }
}
