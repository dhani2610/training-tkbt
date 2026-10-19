<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::with('program')->latest()->paginate(15);
        return view('admin.contacts.index', compact('messages'));
    }

    public function show(ContactMessage $contact)
    {
        if ($contact->status === 'unread') {
            $contact->update(['status' => 'read']);
        }
        return view('admin.contacts.show', compact('contact'));
    }

    public function markAsReplied(ContactMessage $contact)
    {
        $contact->update(['status' => 'replied']);
        return redirect()->back()->with('success', 'Status pesan diperbarui menjadi Telah Dibalas.');
    }

    public function destroy(ContactMessage $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
