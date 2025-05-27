<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin_page.pesan', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('pesan.index')->with('success', 'Pesan berhasil dihapus');
    }
}
