<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('admin_page.register');
    }

    public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ], [
        'name.required' => 'Nama lengkap wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'email.unique' => 'Email sudah terdaftar',
        'password.required' => 'Password wajib diisi',
        'password.confirmed' => 'Konfirmasi password tidak cocok',
    ]);

    try {
        $user = User::create([
            'name' => $validated['name'],
            'email' => strtolower($validated['email']),
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($user));
        LogActivity::addToLog("Pendaftaran akun baru: " . $user->email);

        return redirect()->route('login')
            ->with('success', 'Pendaftaran berhasil! Silakan login untuk melanjutkan.');

    } catch (\Exception $e) {
        LogActivity::addToLog("Gagal mendaftar: " . $request->email . " - Error: " . $e->getMessage());
        return back()->with('error', 'Pendaftaran gagal: ' . $e->getMessage());
    }
}

}