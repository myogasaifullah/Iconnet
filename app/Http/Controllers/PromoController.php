<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function index(Request $request)
    {
        $promos = Promo::all();
        $editPromo = null;

        // Jika ada parameter 'edit' dalam request, kita ambil data promo yang dimaksud
        if ($request->has('edit')) {
            $editPromo = Promo::find($request->edit);
        }

        return view('admin_page.produk_promo', compact('promos', 'editPromo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Menyimpan gambar ke folder public
        $path = $request->file('gambar')->store('promo', 'public');
        $validated['gambar'] = $path;

        Promo::create($validated);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Cek jika gambar baru diupload
        if ($request->hasFile('gambar')) {
            if ($promo->gambar) {
                Storage::disk('public')->delete($promo->gambar);
            }
            $path = $request->file('gambar')->store('promo', 'public');
            $validated['gambar'] = $path;
        }

        $promo->update($validated);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui.');
    }

    public function destroy(Promo $promo)
    {
        if ($promo->gambar) {
            Storage::disk('public')->delete($promo->gambar);
        }

        $promo->delete();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}
