@extends('layouts.admin')

@section('title', 'CMS Program Pelatihan')
@section('header_title', 'Manajemen Program Pelatihan Fumigasi')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div>
                <h3 class="admin-card-title">Daftar Program Pelatihan</h3>
                <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                    Kelola jenjang pelatihan fumigasi, silabus materi, durasi, target peserta, dan status aktif.
                </p>
            </div>
            <a href="{{ route('admin.programs.create') }}" class="btn-admin-gold">
                <i class="bi bi-plus-lg"></i> Tambah Program Baru
            </a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">Urutan</th>
                        <th>Program Pelatihan</th>
                        <th>Jenjang & Badge</th>
                        <th>Durasi & Metode</th>
                        <th>Status</th>
                        <th style="width: 140px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($programs as $prog)
                        <tr>
                            <td style="font-weight: 700; color: #64748b; text-align: center;">
                                {{ $prog->sort_order }}
                            </td>
                            <td>
                                <strong style="font-size: 0.95rem; color: #0f172a;">{{ $prog->title }}</strong>
                                <div style="font-size: 0.75rem; color: #64748b; margin-top: 2px;">
                                    {{ Str::limit($prog->short_description, 70) }}
                                </div>
                            </td>
                            <td>
                                <div style="font-weight: 600; font-size: 0.82rem; color: #1e293b;">{{ $prog->level_code ?? '-' }}</div>
                                @if($prog->badge)
                                    <span style="font-size: 0.68rem; background: #fef3c7; color: #d97706; padding: 2px 6px; border-radius: 4px; font-weight: 700; display: inline-block; margin-top: 4px;">
                                        {{ $prog->badge }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div style="font-size: 0.82rem; font-weight: 600;">{{ $prog->duration ?? '-' }}</div>
                                <div style="font-size: 0.72rem; color: #64748b;">{{ $prog->method ?? '-' }}</div>
                            </td>
                            <td>
                                <form action="{{ route('admin.programs.toggle-status', $prog->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; cursor: pointer;">
                                        @if($prog->is_active)
                                            <span class="badge-status badge-active" title="Klik untuk nonaktifkan">Aktif</span>
                                        @else
                                            <span class="badge-status badge-inactive" title="Klik untuk aktifkan">Nonaktif</span>
                                        @endif
                                    </button>
                                </form>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                    <a href="{{ route('program.detail', $prog->slug) }}" target="_blank" class="btn-admin-primary" style="padding: 6px 10px; font-size: 0.75rem;" title="Lihat di Web">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.programs.edit', $prog->id) }}" class="btn-admin-gold" style="padding: 6px 10px; font-size: 0.75rem;" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.programs.destroy', $prog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-admin-danger" style="padding: 6px 10px; font-size: 0.75rem;" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; color: #94a3b8; padding: 30px;">
                                Belum ada program pelatihan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
