@extends('layouts.admin')

@section('title', 'Detail Permohonan Konsultasi')
@section('header_title', 'Detail Permohonan Konsultasi: ' . $contact->name)

@section('content')

    <div style="max-width: 800px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Pesan dari: {{ $contact->name }}</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        Diterima pada {{ $contact->created_at->format('d F Y, H:i') }} WIB
                    </p>
                </div>
                <a href="{{ route('admin.contacts.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Nama Lengkap</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">{{ $contact->name }}</div>
                </div>

                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">WhatsApp / Telepon</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">
                        <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $contact->phone) }}&text={{ urlencode('Halo Bapak/Ibu ' . $contact->name . ', terima kasih telah menghubungi kami mengenai Pelatihan Fumigasi...') }}" target="_blank" style="color: #16a34a; text-decoration: none;">
                            <i class="bi bi-whatsapp"></i> {{ $contact->phone }}
                        </a>
                    </div>
                </div>

                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Email</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">{{ $contact->email }}</div>
                </div>

                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Perusahaan / Instansi</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">{{ $contact->company ?? '-' }}</div>
                </div>

                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Wilayah Asal</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">{{ $contact->region ?? '-' }}</div>
                </div>

                <div>
                    <div style="font-size: 0.72rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Pilihan Program</div>
                    <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">{{ $contact->program->title ?? 'Umum / Belum Ditentukan' }}</div>
                </div>
            </div>

            <div style="margin-bottom: 30px;">
                <label class="form-label" style="font-size: 0.9rem;">Isi Pesan / Pertanyaan:</label>
                <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; padding: 20px; font-size: 0.95rem; color: #1e293b; line-height: 1.8;">
                    {!! nl2br(e($contact->message)) !!}
                </div>
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
                <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $contact->phone) }}&text={{ urlencode('Halo ' . $contact->name . ', terima kasih telah menghubungi kami mengenai permohonan bimbingan/pelatihan fumigasi...') }}" target="_blank" class="btn-admin-primary" style="background: #16a34a; font-size: 0.9rem; padding: 11px 20px;">
                    <i class="bi bi-whatsapp"></i> Balas Langsung ke WhatsApp Pengirim
                </a>

                @if($contact->status !== 'replied')
                    <form action="{{ route('admin.contacts.replied', $contact->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-admin-gold" style="font-size: 0.9rem;">
                            <i class="bi bi-check2-circle"></i> Tandai Sudah Dibalas
                        </button>
                    </form>
                @else
                    <span style="font-size: 0.82rem; color: #059669; font-weight: 700;">
                        <i class="bi bi-check-all"></i> Status: Telah Dibalas
                    </span>
                @endif
            </div>
        </div>
    </div>

@endsection
