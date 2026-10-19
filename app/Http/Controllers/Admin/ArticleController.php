<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:250',
            'category' => 'required|string|max:100',
            'region' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'reading_time' => 'nullable|string|max:50',
            'excerpt' => 'required|string|max:1000',
            'content' => 'required|string',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');
        $validated['published_at'] = now();

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:250',
            'category' => 'required|string|max:100',
            'region' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'reading_time' => 'nullable|string|max:50',
            'excerpt' => 'required|string|max:1000',
            'content' => 'required|string',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
