@extends('layouts.admin')

@section('title', 'Pengaturan Umum')
@section('header_title', 'Pengaturan Umum Situs')

@section('content')

    <div style="max-width: 800px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Identitas Situs & Kontak Resmi</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        Ubah judul website, deskripsi, alamat training center, dan kontak email resmi.
                    </p>
                </div>
            </div>

            <form action="{{ route('admin.settings.general.update') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Nama Website / Brand *</label>
                    <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $settings['site_name']) }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Tagline / Subtitle Situs</label>
                    <input type="text" name="site_subtitle" class="form-control" value="{{ old('site_subtitle', $settings['site_subtitle']) }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Email Kontak Resmi</label>
                        <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $settings['contact_email']) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Telepon Kantor</label>
                        <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $settings['contact_phone']) }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Gedung / Training Center</label>
                    <textarea name="contact_address" rows="3" class="form-control">{{ old('contact_address', $settings['contact_address']) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Catatan Notice Alert (Kuning di Atas Halaman)</label>
                    <textarea name="notice_text" rows="3" class="form-control">{{ old('notice_text', $settings['notice_text']) }}</textarea>
                    <span class="form-hint">Teks ini tampil di kotak kuning di bawah banner hero setiap halaman daerah dan beranda.</span>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.92rem; padding: 11px 22px; margin-top: 10px;">
                    <i class="bi bi-save2"></i> Simpan Pengaturan
                </button>
            </form>
        </div>
    </div>

@endsection
