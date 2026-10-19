@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header_title', 'Ringkasan Dashboard')

@section('content')

    <!-- STATS GRID -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 28px;">
        
        <!-- Total Program -->
        <div class="admin-card" style="margin-bottom: 0; display: flex; align-items: center; gap: 16px;">
            <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <div>
                <div style="font-size: 0.75rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Program Pelatihan</div>
                <div style="font-size: 1.5rem; font-weight: 800; color: #0f172a;">{{ $totalPrograms }}</div>
            </div>
        </div>

        <!-- Setting WA -->
        <div class="admin-card" style="margin-bottom: 0; display: flex; align-items: center; gap: 16px;">
            <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(37, 211, 102, 0.15); color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">
                <i class="bi bi-whatsapp"></i>
            </div>
            <div>
                <div style="font-size: 0.75rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Nomor WA Terhubung</div>
                <div style="font-size: 1.1rem; font-weight: 800; color: #0f172a;">+{{ $whatsappNumber }}</div>
            </div>
        </div>

        <!-- Artikel -->
        <div class="admin-card" style="margin-bottom: 0; display: flex; align-items: center; gap: 16px;">
            <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(2, 132, 199, 0.15); color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">
                <i class="bi bi-file-earmark-text-fill"></i>
            </div>
            <div>
                <div style="font-size: 0.75rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Artikel & Panduan</div>
                <div style="font-size: 1.5rem; font-weight: 800; color: #0f172a;">{{ $totalArticles }}</div>
            </div>
        </div>

        <!-- Pesan Masuk -->
        <div class="admin-card" style="margin-bottom: 0; display: flex; align-items: center; gap: 16px;">
            <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(168, 85, 247, 0.15); color: #9333ea; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; flex-shrink: 0;">
                <i class="bi bi-inbox-fill"></i>
            </div>
            <div>
                <div style="font-size: 0.75rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Pesan / Inquiries</div>
                <div style="font-size: 1.5rem; font-weight: 800; color: #0f172a;">
                    {{ $totalMessages }}
                    @if($unreadMessages > 0)
                        <span style="font-size: 0.65rem; background: #ef4444; color: #fff; padding: 2px 6px; border-radius: 10px; vertical-align: middle;">{{ $unreadMessages }} baru</span>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <!-- QUICK SHORTCUTS -->
    <div class="admin-card" style="background: linear-gradient(135deg, #06241b 0%, #0c3327 100%); color: #ffffff; border: 1px solid rgba(16, 185, 129, 0.25);">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div>
                <h3 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 4px; color: #ffffff;">Pusat Kontrol Cepat</h3>
                <p style="font-size: 0.82rem; color: #a7f3d0;">Kelola nomor WhatsApp utama, 4 hotline detail, serta kurikulum 4 program K3 Confined Space.</p>
            </div>
            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="{{ route('admin.settings.whatsapp') }}" class="btn-admin-gold" style="background: #10b981; color: white;">
                    <i class="bi bi-whatsapp"></i> Setting WhatsApp & Hotline
                </a>
                <a href="{{ route('admin.programs.create') }}" class="btn-admin-primary" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
                    <i class="bi bi-plus-circle"></i> Tambah Program Baru
                </a>
            </div>
        </div>
    </div>

    <!-- RECENT PROGRAMS & INQUIRIES -->
    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 24px;">
        
        <!-- Programs Table -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Program Pelatihan Aktif</h3>
                <a href="{{ route('admin.programs.index') }}" style="font-size: 0.78rem; font-weight: 700; color: #0284c7;">Lihat Semua <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Program</th>
                            <th>Jenjang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentPrograms as $p)
                            <tr>
                                <td>
                                    <strong>{{ $p->title }}</strong>
                                    <div style="font-size: 0.72rem; color: #64748b;">{{ $p->duration ?? '-' }}</div>
                                </td>
                                <td><span class="badge-status badge-active">{{ $p->level_code ?? 'Level' }}</span></td>
                                <td>
                                    @if($p->is_active)
                                        <span class="badge-status badge-active">Aktif</span>
                                    @else
                                        <span class="badge-status badge-inactive">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.programs.edit', $p->id) }}" style="color: #0284c7; font-weight: 700; font-size: 0.8rem; margin-right: 8px;">Edit</a>
                                    <a href="{{ route('program.detail', $p->slug) }}" target="_blank" style="color: #64748b; font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Inquiries -->
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Pesan & Permohonan Masuk</h3>
                <a href="{{ route('admin.contacts.index') }}" style="font-size: 0.78rem; font-weight: 700; color: #0284c7;">Lihat Semua <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Wilayah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentMessages as $msg)
                            <tr>
                                <td>
                                    <strong>{{ $msg->name }}</strong>
                                    <div style="font-size: 0.72rem; color: #64748b;">{{ $msg->phone }}</div>
                                </td>
                                <td>{{ $msg->region ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.show', $msg->id) }}" style="color: #0284c7; font-weight: 700; font-size: 0.8rem;">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align: center; color: #94a3b8; padding: 24px;">Belum ada pesan masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
