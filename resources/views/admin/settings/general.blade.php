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

    {{-- XML Sitemap Card --}}
    <div class="admin-card" style="margin-top: 24px;">
        <div class="admin-card-header">
            <h3><i class="bi bi-diagram-3"></i> XML Sitemap Generator (Google Search Console)</h3>
        </div>
        <div class="admin-card-body">
            <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 20px;">
                <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
                    <i class="bi bi-filetype-xml"></i>
                </div>
                <div>
                    <h4 style="margin: 0 0 6px 0; font-size: 1rem; color: #1e293b; font-weight: 700;">Generate XML Sitemap untuk Mesin Pencari</h4>
                    <p style="margin: 0; color: #64748b; font-size: 0.88rem; line-height: 1.5;">
                        Fitur pembuatan file <code>public/sitemap.xml</code> otomatis untuk di-submit ke Google Search Console agar seluruh halaman website terindeks di Google.
                    </p>
                </div>
            </div>

            @php
                $sitemapPath = public_path('sitemap.xml');
                $exists = file_exists($sitemapPath);
            @endphp

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 16px; margin-bottom: 20px;">
                <div style="display: grid; grid-template-columns: auto 1fr; gap: 8px 16px; font-size: 0.86rem;">
                    <strong style="color: #334155;">Status Sitemap:</strong>
                    <div>
                        @if($exists)
                            <span style="color: #059669; font-weight: 700; background: #ecfdf5; padding: 2px 10px; border-radius: 12px; border: 1px solid #a7f3d0;">
                                <i class="bi bi-check-circle-fill"></i> File Tersedia (public/sitemap.xml)
                            </span>
                        @else
                            <span style="color: #dc2626; font-weight: 700; background: #fef2f2; padding: 2px 10px; border-radius: 12px; border: 1px solid #fecaca;">
                                <i class="bi bi-x-circle-fill"></i> Belum Digenerate
                            </span>
                        @endif
                    </div>

                    @if($exists)
                        <strong style="color: #334155;">Terakhir Diperbarui:</strong>
                        <div style="color: #64748b;">{{ date('d M Y H:i:s', filemtime($sitemapPath)) }} WIB</div>

                        <strong style="color: #334155;">Ukuran File:</strong>
                        <div style="color: #64748b;">{{ round(filesize($sitemapPath) / 1024, 2) }} KB</div>

                        <strong style="color: #334155;">URL Sitemap:</strong>
                        <div>
                            <a href="{{ url('/sitemap.xml') }}" target="_blank" style="color: #059669; font-weight: 600; text-decoration: none;">
                                {{ url('/sitemap.xml') }} <i class="bi bi-box-arrow-up-right" style="font-size: 0.75rem;"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <form action="{{ route('admin.sitemap.generate') }}" method="POST">
                @csrf
                <button type="submit" class="btn-admin-gold" style="font-size: 0.9rem; padding: 10px 20px;">
                    <i class="bi bi-arrow-repeat"></i> {{ $exists ? 'Generate Ulang XML Sitemap' : 'Generate XML Sitemap Sekarang' }}
                </button>
            </form>
        </div>
    </div>

@endsection
