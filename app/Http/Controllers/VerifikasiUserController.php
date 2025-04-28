<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifikasiUserController extends Controller
{
    public function index()
    {
        $users = User::where('is_verified', false)->get();
        return view('admin_page.verifikasi', compact('users'));
    }

    public function verify($id)
    {
        $user = User::findOrFail($id);
        $user->is_verified = true;
        $user->save();

        return redirect()->back()->with('success', 'User berhasil diverifikasi!');
    }
}
