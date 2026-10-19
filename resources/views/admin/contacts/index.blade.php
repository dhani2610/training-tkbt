@extends('layouts.admin')

@section('title', 'Pesan Masuk & Inquiries')
@section('header_title', 'Pesan Masuk & Permohonan Konsultasi')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div>
                <h3 class="admin-card-title">Daftar Permohonan & Pesan Pengunjung</h3>
                <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                    Data calon peserta yang mengisi formulir kontak atau permohonan bimbingan teknis.
                </p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nama Pengirim</th>
                        <th>WhatsApp / HP</th>
                        <th>Perusahaan / Instansi</th>
                        <th>Wilayah</th>
                        <th>Program</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th style="width: 130px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                        <tr>
                            <td>
                                <strong style="color: #0f172a; font-size: 0.92rem;">{{ $msg->name }}</strong>
                                <div style="font-size: 0.72rem; color: #64748b;">{{ $msg->email }}</div>
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $msg->phone) }}" target="_blank" style="color: #16a34a; font-weight: 700; text-decoration: none;">
                                    <i class="bi bi-whatsapp"></i> {{ $msg->phone }}
                                </a>
                            </td>
                            <td>{{ $msg->company ?? '-' }}</td>
                            <td>{{ $msg->region ?? '-' }}</td>
                            <td style="font-size: 0.82rem; font-weight: 600;">{{ $msg->program->title ?? 'Umum' }}</td>
                            <td>
                                @if($msg->status === 'unread')
                                    <span style="font-size: 0.7rem; font-weight: 700; background: #fee2e2; color: #dc2626; padding: 2px 8px; border-radius: 10px;">Baru</span>
                                @elseif($msg->status === 'replied')
                                    <span style="font-size: 0.7rem; font-weight: 700; background: #ecfdf5; color: #059669; padding: 2px 8px; border-radius: 10px;">Dibalas</span>
                                @else
                                    <span style="font-size: 0.7rem; font-weight: 700; background: #f1f5f9; color: #64748b; padding: 2px 8px; border-radius: 10px;">Dibaca</span>
                                @endif
                            </td>
                            <td style="font-size: 0.75rem; color: #64748b;">{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                    <a href="{{ route('admin.contacts.show', $msg->id) }}" class="btn-admin-gold" style="padding: 6px 10px; font-size: 0.75rem;" title="Detail Pesan">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form action="{{ route('admin.contacts.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
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
                            <td colspan="8" style="text-align: center; color: #94a3b8; padding: 30px;">
                                Belum ada permohonan masuk.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top: 20px;">
            {{ $messages->links() }}
        </div>
    </div>

@endsection
