<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin_page.login');
    }

    public function login(Request $request)
    {
        // Throttle login attempts
        $throttleKey = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'email' => "Terlalu banyak percobaan login. Silakan coba lagi dalam {$seconds} detik.",
            ]);
        }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            RateLimiter::clear($throttleKey);

            LogActivity::addToLog("Login berhasil: " . $request->email);

            return redirect()->intended(route('dashboard'))
                ->with('success', 'Login berhasil! Selamat datang kembali');
        }

        // Increment failed attempts
        RateLimiter::hit($throttleKey);

        LogActivity::addToLog("Login gagal: " . $request->email);

        throw ValidationException::withMessages([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        $userEmail = Auth::user()->email ?? 'Unknown';
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        LogActivity::addToLog("Logout: " . $userEmail);

        return redirect()->route('login')
            ->with('status', 'Anda telah logout');
    }

    protected function throttleKey(Request $request): string
    {
        return mb_strtolower($request->input('email')) . '|' . $request->ip();
    }
}