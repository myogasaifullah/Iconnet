<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Helpers\LogActivity;
use App\Models\Visit;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Halaman admin
    public function index()
    {
        $pakets = Paket::all();

        // Log view activity
        // LogActivity::addToLog('Melihat daftar paket');

        return view('admin_page.produk_paket', compact('pakets'));
    }

    // Halaman landing page
    public function landingPage(Request $request)
    {
        // Ambil semua nama_paket unik untuk dropdown
        $namaPakets = Paket::select('nama_paket')->distinct()->pluck('nama_paket');

        // Query data paket dengan filter jika ada
        $query = Paket::query();

        if ($request->filled('nama_paket')) {
            $query->where('nama_paket', $request->nama_paket);
        }

        $pakets = $query->get();

        // Catat kunjungan
        Visit::create([
            'page' => 'paket-internet',
            'visited_at' => now()
        ]);

        // JANGAN menimpa $pakets di sini lagi
        return view('landing_page.paket', compact('pakets', 'namaPakets'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'kecepatan' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        $paket = Paket::create($request->all());

        // Log create activity
        LogActivity::addToLog('Menambahkan paket baru: ' . $paket->nama_paket .
            ' (Kecepatan: ' . $paket->kecepatan .
            ', Harga: Rp ' . number_format($paket->harga, 0, ',', '.') . ')');

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
        $oldData = $paket->toArray();
        $paket->update($request->all());

        // Prepare changed fields
        $changes = [];
        foreach ($request->all() as $key => $value) {
            if (array_key_exists($key, $oldData) && $oldData[$key] != $value) {
                $changes[] = "$key: {$oldData[$key]} → $value";
            }
        }

        // Log update activity
        if (!empty($changes)) {
            LogActivity::addToLog('Memperbarui paket ID: ' . $id . ' (' . implode(', ', $changes) . ')');
        } else {
            LogActivity::addToLog('Memperbarui paket ID: ' . $id . ' (tidak ada perubahan)');
        }

        return redirect()->route('produk_paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paketName = $paket->nama_paket;
        Paket::destroy($id);

        // Log delete activity
        LogActivity::addToLog('Menghapus paket: ' . $paketName . ' (ID: ' . $id . ')');

        return redirect()->route('produk_paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
