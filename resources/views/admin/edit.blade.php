@extends('layouts.admin')

@section('title', 'Edit Artikel')
@section('header_title', 'Edit Artikel: ' . $article->title)

@section('content')

    <div style="max-width: 850px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Edit Artikel: {{ $article->title }}</h3>
                <a href="{{ route('admin.articles.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label">Judul Artikel *</label>
                    <input type="text" name="title" class="form-control" required value="{{ old('title', $article->title) }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Kategori *</label>
                        <input type="text" name="category" class="form-control" required value="{{ old('category', $article->category) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kota / Daerah Terkait (Opsional)</label>
                        <input type="text" name="region" class="form-control" placeholder="Contoh: Kabupaten Bengkulu Selatan atau Kota Banda Aceh" value="{{ old('region', $article->region) }}">
                        <span class="form-hint">Akan tampil sebagai badge daerah di kartu artikel</span>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Nama Penulis</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', $article->author) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estimasi Waktu Baca</label>
                        <input type="text" name="reading_time" class="form-control" value="{{ old('reading_time', $article->reading_time) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Ringkasan / Excerpt *</label>
                    <textarea name="excerpt" rows="3" class="form-control" required>{{ old('excerpt', $article->excerpt) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Isi Lengkap Artikel *</label>
                    <textarea name="content" rows="10" class="form-control" required>{{ old('content', $article->content) }}</textarea>
                </div>

                <div style="margin-bottom: 24px;">
                    <input type="checkbox" name="is_published" id="is_published" value="1" {{ $article->is_published ? 'checked' : '' }} style="width: 18px; height: 18px;">
                    <label for="is_published" style="font-size: 0.88rem; font-weight: 700; color: #1e293b; cursor: pointer;">Status Publikasi</label>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.95rem; padding: 12px 24px;">
                    <i class="bi bi-check-lg"></i> Perbarui Artikel
                </button>
            </form>
        </div>
    </div>

@endsection
