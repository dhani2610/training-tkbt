@extends('layouts.admin')

@section('title', 'Edit Program Pelatihan')
@section('header_title', 'Edit Program Pelatihan: ' . $program->title)

@section('content')

    <div style="max-width: 900px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Edit Program: {{ $program->title }}</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        Perbarui detail program, silabus materi, durasi, dan status aktif.
                    </p>
                </div>
                <a href="{{ route('admin.programs.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <form action="{{ route('admin.programs.update', $program->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label">Judul Program Pelatihan *</label>
                    <input type="text" name="title" class="form-control" required value="{{ old('title', $program->title) }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Kategori / Nama Jenjang *</label>
                        <input type="text" name="level_name" class="form-control" required value="{{ old('level_name', $program->level_name) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kode / Singkatan Jenjang</label>
                        <input type="text" name="level_code" class="form-control" value="{{ old('level_code', $program->level_code) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Badge Label Card</label>
                        <input type="text" name="badge" class="form-control" value="{{ old('badge', $program->badge) }}">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Durasi Pelatihan</label>
                        <input type="text" name="duration" class="form-control" value="{{ old('duration', $program->duration) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Metode Pembelajaran</label>
                        <input type="text" name="method" class="form-control" value="{{ old('method', $program->method) }}">
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Sertifikat / Lisensi</label>
                        <input type="text" name="certification" class="form-control" value="{{ old('certification', $program->certification) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Keterangan Biaya / Investasi</label>
                        <input type="text" name="price_note" class="form-control" value="{{ old('price_note', $program->price_note) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Deskripsi Singkat (Tampil di Card Beranda) *</label>
                    <textarea name="short_description" rows="3" class="form-control" required>{{ old('short_description', $program->short_description) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Deskripsi Lengkap (Tampil di Halaman Detail)</label>
                    <textarea name="full_description" rows="5" class="form-control">{{ old('full_description', $program->full_description) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Sasaran Peserta (Target Audience)</label>
                    <input type="text" name="target_audience" class="form-control" value="{{ old('target_audience', $program->target_audience) }}">
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
                        @forelse($program->curriculum ?? [] as $index => $modul)
                            <div class="curriculum-item" style="display: flex; gap: 10px;">
                                <input type="text" name="curriculum[]" class="form-control" value="{{ $modul }}" placeholder="Modul {{ $index + 1 }}: Materi...">
                                <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
                            </div>
                        @empty
                            <div class="curriculum-item" style="display: flex; gap: 10px;">
                                <input type="text" name="curriculum[]" class="form-control" placeholder="Modul 1: Materi...">
                                <button type="button" class="btn-admin-danger btnRemoveModule" style="padding: 0 12px;"><i class="bi bi-trash"></i></button>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 24px;">
                    <div>
                        <label class="form-label">Urutan Tampil</label>
                        <input type="number" name="sort_order" class="form-control" style="width: 100px;" value="{{ old('sort_order', $program->sort_order) }}">
                    </div>

                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 24px;">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ $program->is_active ? 'checked' : '' }} style="width: 18px; height: 18px;">
                        <label for="is_active" style="font-size: 0.88rem; font-weight: 700; color: #1e293b; cursor: pointer;">Status Program Aktif</label>
                    </div>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.95rem; padding: 12px 24px;">
                    <i class="bi bi-check-lg"></i> Perbarui Program Pelatihan
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
