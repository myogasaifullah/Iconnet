<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt(['email' => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // redirect ke halaman setelah login
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
