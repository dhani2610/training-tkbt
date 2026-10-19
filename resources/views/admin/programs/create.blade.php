@extends('layouts.admin')

@section('title', 'Tambah Program Pelatihan')
@section('header_title', 'Tambah Program Pelatihan Baru')

@section('content')

    <div style="max-width: 900px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Form Tambah Program Pelatihan</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        Lengkapi detail program pelatihan fumigasi, silabus materi, durasi, dan sertifikasi.
                    </p>
                </div>
                <a href="{{ route('admin.programs.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <form action="{{ route('admin.programs.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Judul Program Pelatihan *</label>
                    <input type="text" name="title" class="form-control" required placeholder="Contoh: Training Fumigasi Tingkat Muda (Operator Lapangan)" value="{{ old('title') }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Kategori / Nama Jenjang *</label>
                        <input type="text" name="level_name" class="form-control" required placeholder="Contoh: Tingkat Pertama / Operasional" value="{{ old('level_name') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kode / Singkatan Jenjang</label>
                        <input type="text" name="level_code" class="form-control" placeholder="Contoh: Fumigasi Muda" value="{{ old('level_code') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Badge Label Card</label>
                        <input type="text" name="badge" class="form-control" placeholder="Contoh: Paling Diminati / Populer" value="{{ old('badge') }}">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Durasi Pelatihan</label>
                        <input type="text" name="duration" class="form-control" placeholder="Contoh: 3 Hari (24 Jam Pelajaran)" value="{{ old('duration') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Metode Pembelajaran</label>
                        <input type="text" name="method" class="form-control" placeholder="Contoh: Tatap Muka & Praktikum Lapangan" value="{{ old('method') }}">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Sertifikat / Lisensi</label>
                        <input type="text" name="certification" class="form-control" placeholder="Contoh: Sertifikat Kompetensi Fumigator Muda Barantin" value="{{ old('certification') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Keterangan Biaya / Investasi</label>
                        <input type="text" name="price_note" class="form-control" placeholder="Contoh: Hubungi Tim Konsultan" value="{{ old('price_note') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Deskripsi Singkat (Tampil di Card Beranda) *</label>
                    <textarea name="short_description" rows="3" class="form-control" required placeholder="Penjelasan ringkas program untuk tampilan card...">{{ old('short_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Deskripsi Lengkap (Tampil di Halaman Detail)</label>
                    <textarea name="full_description" rows="5" class="form-control" placeholder="Penjelasan detail tujuan program, latar belakang teknis, regulasi yang dipenuhi...">{{ old('full_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Sasaran Peserta (Target Audience)</label>
                    <input type="text" name="target_audience" class="form-control" placeholder="Contoh: Teknisi PCO, Operator Gudang Pangan, Petugas K3" value="{{ old('target_audience') }}">
                </div>

                <!-- DYNAMIC CURRICULUM MODULES -->
                <div class="form-group" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                        <label class="form-label" style="margin-bottom: 0;">Silabus / Modul Materi Pelatihan</label>
                        <button type="button" class="btn-admin-primary" id="btnAddCurriculum" style="padding: 6px 12px; font-size: 0.75rem;">
                            <i class="bi bi-plus-lg"></i> Tambah Modul
                        </button>
                    </div>

                    <div id="curriculumList" style="display: flex; flex-direction: column; gap: 10px;">
                        <div class="curriculum-item" style="display: flex; gap: 10px;">
                            <input type="text" name="curriculum[]" class="form-control" placeholder="Modul 1: Prinsip Dasar Fumigasi & Hama Gudang">
                            <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
                        </div>
                        <div class="curriculum-item" style="display: flex; gap: 10px;">
                            <input type="text" name="curriculum[]" class="form-control" placeholder="Modul 2: Karakteristik & Bahaya Gas Fosfin dan Metil Bromida">
                            <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
                        </div>
                        <div class="curriculum-item" style="display: flex; gap: 10px;">
                            <input type="text" name="curriculum[]" class="form-control" placeholder="Modul 3: Standar APD, SCBA, & Uji Kedap Gas">
                            <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label class="form-label">Urutan Tampil</label>
                        <input type="number" name="sort_order" class="form-control" style="width: 100px;" value="{{ old('sort_order', 1) }}">
                    </div>

                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 24px;">
                        <input type="checkbox" name="is_active" id="is_active" value="1" checked style="width: 18px; height: 18px;">
                        <label for="is_active" style="font-size: 0.88rem; font-weight: 700; color: #1e293b; cursor: pointer;">Status Program Aktif</label>
                    </div>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.95rem; padding: 12px 24px;">
                    <i class="bi bi-check-lg"></i> Simpan Program Pelatihan
                </button>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    document.getElementById('btnAddCurriculum').addEventListener('click', () => {
        const container = document.getElementById('curriculumList');
        const count = container.children.length + 1;
        const row = document.createElement('div');
        row.className = 'curriculum-item';
        row.style.display = 'flex';
        row.style.gap = '10px';
        row.innerHTML = `
            <input type="text" name="curriculum[]" class="form-control" placeholder="Modul ${count}: Tuliskan topik materi...">
            <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
        `;
        container.appendChild(row);
    });

    document.getElementById('curriculumList').addEventListener('click', (e) => {
        if (e.target.closest('.btnRemoveModule')) {
            const row = e.target.closest('.curriculum-item');
            if (document.querySelectorAll('.curriculum-item').length > 1) {
                row.remove();
            } else {
                alert('Minimal harus ada 1 baris modul.');
            }
        }
    });
</script>
@endpush
