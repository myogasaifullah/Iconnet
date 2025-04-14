<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Halaman admin
    public function index()
    {
        $pakets = Paket::all();
        return view('admin_page.produk_paket', compact('pakets'));
    }

    // Halaman landing page
    public function landingPage()
    {
        $pakets = Paket::all();
        return view('landing_page.paket', compact('pakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'kecepatan' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        Paket::create($request->all());
        return redirect()->route('produk_paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'kecepatan' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        $paket = Paket::findOrFail($id);
        $paket->update($request->all());
        return redirect()->route('produk_paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Paket::destroy($id);
        return redirect()->route('produk_paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
