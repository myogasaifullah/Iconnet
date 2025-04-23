<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Paket;
use App\Helpers\LogActivity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all();
        $editBanner = null;

        if ($request->has('edit')) {
            $editBanner = Banner::find($request->edit);
        }

        // Log view activity
        // LogActivity::addToLog('Melihat daftar banner');

        return view('admin_page.banner', compact('banners', 'editBanner'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $request->file('gambar')->store('banners', 'public');

        Banner::create(['gambar' => $path]);

        // Log create activity
        LogActivity::addToLog('Menambahkan banner baru: ' . $path);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        
        // Log edit activity
        LogActivity::addToLog('Membuka form edit banner ID: ' . $id);

        return view('admin_page.edit_banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $oldImage = $banner->gambar;
            Storage::disk('public')->delete($oldImage);

            $path = $request->file('gambar')->store('banners', 'public');
            $banner->update(['gambar' => $path]);

            // Log update activity with image change
            LogActivity::addToLog('Memperbarui banner ID: ' . $id . '. Gambar diubah dari ' . $oldImage . ' ke ' . $path);
        } else {
            // Log update activity without image change
            LogActivity::addToLog('Memperbarui banner ID: ' . $id . ' (tanpa perubahan gambar)');
        }

        return redirect()->route('banner.index')->with('success', 'Banner berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $imagePath = $banner->gambar;
        
        Storage::disk('public')->delete($imagePath);
        $banner->delete();

        // Log delete activity
        LogActivity::addToLog('Menghapus banner ID: ' . $id . ' dengan gambar: ' . $imagePath);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil dihapus.');
    }

    public function showCarousel()
    {
        $banners = Banner::all();
        
        // Log view activity on landing page
        // LogActivity::addToLog('Melihat banner carousel di landing page');

        return view('landing_page.index', compact('banners'));
    }
}