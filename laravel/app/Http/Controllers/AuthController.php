<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginAdmin(Request $request) {
        $validated = $request->validate(
            [
                "email"=>'required|string|exists:users,email',
                "password"=>'required|string',
            ]
        );
        if ($user = Auth::attempt($validated)) {
            if (Auth::user()->role = "admin") {
                return redirect()->route('courses.index');
            }
            Auth::logout();
            return redirect()
                ->route('loginshow')
                ->withErrors(['email'=>'Вы не являетесь администраторм']);
        }
        
        return redirect()
            ->route('loginshow')
            ->withErrors(['email'=>'Неверный логин или пароль']);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('loginshow');

    }

    public function loginShow() {
        return view('login.show');
    }
}
