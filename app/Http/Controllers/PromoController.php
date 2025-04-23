<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Banner;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    // Halaman Admin Promo
    public function index(Request $request)
    {
        $promos = Promo::all();
        $editPromo = null;

        // Jika ada parameter 'edit' dalam request
        if ($request->has('edit')) {
            $editPromo = Promo::find($request->edit);
            LogActivity::addToLog('Membuka form edit promo ID: ' . $editPromo->id);
        }

        // Log view activity
        // LogActivity::addToLog('Melihat daftar promo');

        return view('admin_page.produk_promo', compact('promos', 'editPromo'));
    }

    // Menyimpan Promo
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan gambar
        $path = $request->file('gambar')->store('promo', 'public');
        $validated['gambar'] = $path;

        $promo = Promo::create($validated);

        // Log create activity
        LogActivity::addToLog('Menambahkan promo baru: ' . $promo->judul . 
                            ' (Gambar: ' . $path . ')');

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    // Update Promo
    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $oldData = $promo->toArray();
        $changes = [];

        // Jika gambar baru diupload
        if ($request->hasFile('gambar')) {
            $oldImage = $promo->gambar;
            if ($oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
            $path = $request->file('gambar')->store('promo', 'public');
            $validated['gambar'] = $path;
            $changes[] = "gambar: diubah";
        }

        // Check for other changes
        foreach (['judul', 'deskripsi'] as $field) {
            if ($oldData[$field] != $validated[$field]) {
                $changes[] = "$field: '{$oldData[$field]}' → '{$validated[$field]}'";
            }
        }

        $promo->update($validated);

        // Log update activity
        if (!empty($changes)) {
            LogActivity::addToLog('Memperbarui promo ID: ' . $promo->id . ' (' . implode(', ', $changes) . ')');
        } else {
            LogActivity::addToLog('Memperbarui promo ID: ' . $promo->id . ' (tidak ada perubahan)');
        }

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui.');
    }

    // Hapus Promo
    public function destroy(Promo $promo)
    {
        $promoData = $promo->toArray();
        
        if ($promo->gambar) {
            Storage::disk('public')->delete($promo->gambar);
        }

        $promo->delete();

        // Log delete activity
        LogActivity::addToLog('Menghapus promo: ' . $promoData['judul'] . 
                            ' (ID: ' . $promoData['id'] . 
                            ', Gambar: ' . ($promoData['gambar'] ?? 'tidak ada') . ')');

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}