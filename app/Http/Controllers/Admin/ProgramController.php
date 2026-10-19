<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('sort_order', 'asc')->get();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'level_name' => 'required|string|max:100',
            'level_code' => 'nullable|string|max:50',
            'badge' => 'nullable|string|max:50',
            'short_description' => 'required|string|max:1000',
            'full_description' => 'nullable|string',
            'curriculum' => 'nullable|array',
            'curriculum.*' => 'nullable|string',
            'target_audience' => 'nullable|string|max:500',
            'duration' => 'nullable|string|max:100',
            'method' => 'nullable|string|max:100',
            'certification' => 'nullable|string|max:200',
            'price_note' => 'nullable|string|max:150',
            'sort_order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $request->input('sort_order', 0);

        // Filter empty curriculum items
        if (isset($validated['curriculum']) && is_array($validated['curriculum'])) {
            $validated['curriculum'] = array_values(array_filter($validated['curriculum'], fn($v) => !empty(trim($v))));
        }

        Program::create($validated);

        return redirect()->route('admin.programs.index')->with('success', 'Program pelatihan baru berhasil ditambahkan!');
    }

    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'level_name' => 'required|string|max:100',
            'level_code' => 'nullable|string|max:50',
            'badge' => 'nullable|string|max:50',
            'short_description' => 'required|string|max:1000',
            'full_description' => 'nullable|string',
            'curriculum' => 'nullable|array',
            'curriculum.*' => 'nullable|string',
            'target_audience' => 'nullable|string|max:500',
            'duration' => 'nullable|string|max:100',
            'method' => 'nullable|string|max:100',
            'certification' => 'nullable|string|max:200',
            'price_note' => 'nullable|string|max:150',
            'sort_order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $request->input('sort_order', 0);

        if (isset($validated['curriculum']) && is_array($validated['curriculum'])) {
            $validated['curriculum'] = array_values(array_filter($validated['curriculum'], fn($v) => !empty(trim($v))));
        }

        $program->update($validated);

        return redirect()->route('admin.programs.index')->with('success', 'Data program pelatihan berhasil diperbarui!');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs.index')->with('success', 'Program pelatihan berhasil dihapus.');
    }

    public function toggleStatus(Program $program)
    {
        $program->is_active = !$program->is_active;
        $program->save();

        return redirect()->back()->with('success', 'Status program berhasil diubah.');
    }
}
