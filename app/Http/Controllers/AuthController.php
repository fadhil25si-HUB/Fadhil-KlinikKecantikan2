<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/admin')
                ->with('success', 'Login berhasil. Selamat datang!');
        }

        return back()
            ->with('error', 'Email atau password salah.')
            ->withInput($request->only('username'));
    }
}
