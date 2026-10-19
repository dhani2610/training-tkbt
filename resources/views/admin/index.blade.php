@extends('layouts.admin')

@section('title', 'CMS Artikel & Panduan')
@section('header_title', 'Manajemen Artikel & Edukasi Fumigasi')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div>
                <h3 class="admin-card-title">Daftar Artikel & Panduan Teknis</h3>
                <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                    Kelola artikel edukasi, regulasi ekspor, dan panduan keselamatan fumigasi.
                </p>
            </div>
            <a href="{{ route('admin.articles.create') }}" class="btn-admin-gold">
                <i class="bi bi-plus-lg"></i> Tulis Artikel Baru
            </a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Judul Artikel</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Waktu Baca</th>
                        <th>Dilihat</th>
                        <th>Tanggal Terbit</th>
                        <th style="width: 120px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($articles as $art)
                        <tr>
                            <td>
                                <strong style="font-size: 0.92rem; color: #0f172a;">{{ $art->title }}</strong>
                                <div style="font-size: 0.72rem; color: #64748b; margin-top: 2px;">
                                    {{ Str::limit($art->excerpt, 60) }}
                                </div>
                            </td>
                            <td>
                                <span class="badge-status badge-active">{{ $art->category }}</span>
                            </td>
                            <td>{{ $art->author ?? '-' }}</td>
                            <td>{{ $art->reading_time }}</td>
                            <td>{{ $art->views }}x</td>
                            <td style="font-size: 0.78rem; color: #64748b;">
                                {{ $art->published_at ? $art->published_at->format('d/m/Y') : '-' }}
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                    <a href="{{ route('article.detail', $art->slug) }}" target="_blank" class="btn-admin-primary" style="padding: 6px 10px; font-size: 0.75rem;">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', $art->id) }}" class="btn-admin-gold" style="padding: 6px 10px; font-size: 0.75rem;">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.articles.destroy', $art->id) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-admin-danger" style="padding: 6px 10px; font-size: 0.75rem;">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center; color: #94a3b8; padding: 30px;">
                                Belum ada artikel.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top: 20px;">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
