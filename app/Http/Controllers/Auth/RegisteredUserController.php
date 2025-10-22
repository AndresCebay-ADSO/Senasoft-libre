<?php
// filepath: c:\laravel-project-senasoft\booking-plane\app\Http\Controllers\Auth\RegisteredUserController.php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'doc_type' => 'required|in:C.C,C.E,T.I',
            'identity' => 'required|string|max:20|unique:users,identity',
            'email' => 'required|string|email|max:70|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'nullable|in:admin,passenger',
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'doc_type' => $request->doc_type,
            'identity' => $request->identity,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'passenger',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/'); // ajusta a la ruta que uses después del login
    }
}