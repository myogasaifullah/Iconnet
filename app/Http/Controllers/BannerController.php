<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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

        return view('admin_page.banner', compact('banners', 'editBanner'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $request->file('gambar')->store('banners', 'public');

        Banner::create(['gambar' => $path]);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin_page.edit_banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            Storage::disk('public')->delete($banner->gambar);

            $path = $request->file('gambar')->store('banners', 'public');
            $banner->update(['gambar' => $path]);
        }

        return redirect()->route('banner.index')->with('success', 'Banner berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::disk('public')->delete($banner->gambar);
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner berhasil dihapus.');
    }

    public function showCarousel()
    {
        $banners = Banner::all();
        return view('landing_page.index', compact('banners'));
    }
    
    public function landingPage()
    {
        $banners = \App\Models\Banner::all(); // Pastikan modelnya di-import atau pakai \App\Models\
        return view('landing_page.index', compact('banners'));
    }
}
