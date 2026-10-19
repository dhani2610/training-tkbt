@extends('layouts.admin')

@section('title', 'Tambah FAQ Baru')
@section('header_title', 'Tambah FAQ Baru')

@section('content')

    <div style="max-width: 800px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Form FAQ Baru</h3>
                <a href="{{ route('admin.faqs.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Pertanyaan *</label>
                    <input type="text" name="question" class="form-control" required placeholder="Contoh: Apakah sertifikat pelatihan diakui oleh Barantin?" value="{{ old('question') }}">
                </div>

                <div class="form-group">
                    <label class="form-label">Jawaban *</label>
                    <textarea name="answer" rows="5" class="form-control" required placeholder="Tuliskan jawaban yang jelas dan informatif...">{{ old('answer') }}</textarea>
                </div>

                <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label class="form-label">Urutan Tampil</label>
                        <input type="number" name="sort_order" class="form-control" style="width: 100px;" value="{{ old('sort_order', 1) }}">
                    </div>

                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 24px;">
                        <input type="checkbox" name="is_active" id="is_active" value="1" checked style="width: 18px; height: 18px;">
                        <label for="is_active" style="font-size: 0.88rem; font-weight: 700; color: #1e293b; cursor: pointer;">Status FAQ Aktif</label>
                    </div>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.95rem; padding: 12px 24px;">
                    <i class="bi bi-check-lg"></i> Simpan FAQ
                </button>
            </form>
        </div>
    </div>

@endsection
