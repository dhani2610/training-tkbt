@extends('layouts.admin')

@section('title', 'CMS FAQ')
@section('header_title', 'Manajemen FAQ (Tanya Jawab)')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div>
                <h3 class="admin-card-title">Daftar Pertanyaan Umum (FAQ)</h3>
                <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                    Kelola pertanyaan yang sering diajukan dan jawaban resmi yang ditampilkan di website.
                </p>
            </div>
            <a href="{{ route('admin.faqs.create') }}" class="btn-admin-gold">
                <i class="bi bi-plus-lg"></i> Tambah FAQ Baru
            </a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">Urutan</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Status</th>
                        <th style="width: 100px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($faqs as $faq)
                        <tr>
                            <td style="font-weight: 700; color: #64748b; text-align: center;">{{ $faq->sort_order }}</td>
                            <td>
                                <strong style="color: #0f172a; font-size: 0.92rem;">{{ $faq->question }}</strong>
                            </td>
                            <td style="font-size: 0.82rem; color: #475569;">
                                {{ Str::limit($faq->answer, 100) }}
                            </td>
                            <td>
                                @if($faq->is_active)
                                    <span class="badge-status badge-active">Aktif</span>
                                @else
                                    <span class="badge-status badge-inactive">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                    <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn-admin-gold" style="padding: 6px 10px; font-size: 0.75rem;">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Hapus FAQ ini?')">
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
                            <td colspan="5" style="text-align: center; color: #94a3b8; padding: 30px;">
                                Belum ada FAQ.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
