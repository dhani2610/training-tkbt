<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('sort_order', 'asc')->get();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:300',
            'answer' => 'required|string',
            'category' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['category'] = $validated['category'] ?? 'general';
        $validated['sort_order'] = $request->input('sort_order', 0);
        $validated['is_active'] = $request->has('is_active');

        Faq::create($validated);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ baru berhasil ditambahkan!');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:300',
            'answer' => 'required|string',
            'category' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['category'] = $validated['category'] ?? 'general';
        $validated['sort_order'] = $request->input('sort_order', 0);
        $validated['is_active'] = $request->has('is_active');

        $faq->update($validated);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ berhasil diperbarui!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ berhasil dihapus.');
    }
}
