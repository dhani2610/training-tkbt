@extends('layouts.admin')

@section('title', 'Setting WhatsApp & 4 Hotline')
@section('header_title', 'Konfigurasi Nomor WhatsApp & Hotline Detail')

@section('content')

    <div style="max-width: 900px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Konfigurasi WhatsApp Utama & 4 Hotline Detail</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        Kelola nomor WhatsApp utama (tombol floating) dan 4 nomor kontak WhatsApp hotline yang tampil pada kartu detail program & artikel daerah.
                    </p>
                </div>
            </div>

            <form action="{{ route('admin.settings.whatsapp.update') }}" method="POST">
                @csrf

                <!-- MAIN FLOATING WA -->
                <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #166534; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <i class="bi bi-whatsapp"></i> 1. Nomor WhatsApp Utama (Floating & Quick Action)
                    </h4>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Nomor WhatsApp Utama *</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); font-weight: 700; color: #64748b; font-size: 0.9rem;">+</span>
                            <input type="text" name="whatsapp_number" id="whatsapp_number" class="form-control" style="padding-left: 30px; font-weight: 600;" value="{{ old('whatsapp_number', $whatsappNumber) }}" required placeholder="Contoh: 081399810272">
                        </div>
                        <span class="form-hint">Nomor ini aktif pada floating button WhatsApp di pojok kanan bawah seluruh halaman website.</span>
                    </div>
                </div>

                <!-- 4 HOTLINE DETAIL NUMBERS -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                        <i class="bi bi-telephone-inbound-fill" style="color: #10b981;"></i> 2. Empat (4) Hotline WhatsApp Resmi (Tampil di Halaman Detail Program & Artikel)
                    </h4>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                        <div class="form-group">
                            <label class="form-label">Hotline WA 1 (Customer Service 1) *</label>
                            <input type="text" name="whatsapp_detail_1" class="form-control" value="{{ old('whatsapp_detail_1', $whatsappDetail1) }}" required placeholder="08118500177">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hotline WA 2 (Customer Service 2) *</label>
                            <input type="text" name="whatsapp_detail_2" class="form-control" value="{{ old('whatsapp_detail_2', $whatsappDetail2) }}" required placeholder="081399810272">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hotline WA 3 (Customer Service 3) *</label>
                            <input type="text" name="whatsapp_detail_3" class="form-control" value="{{ old('whatsapp_detail_3', $whatsappDetail3) }}" required placeholder="087894580806">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hotline WA 4 (Customer Service 4) *</label>
                            <input type="text" name="whatsapp_detail_4" class="form-control" value="{{ old('whatsapp_detail_4', $whatsappDetail4) }}" required placeholder="087894580649">
                        </div>
                    </div>
                    <span class="form-hint">Keempat nomor ini otomatis menjadi 4 tombol hotline konsultasi resmi di seluruh halaman detail.</span>
                </div>

                <!-- TEMPLATE MESSAGE -->
                <div class="form-group">
                    <label class="form-label">Template Pesan Otomatis Pengunjung *</label>
                    <textarea name="whatsapp_template" id="whatsapp_template" rows="4" class="form-control" required placeholder="Halo Admin Training Confined Space...">{{ old('whatsapp_template', $whatsappTemplate) }}</textarea>
                    
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 14px; margin-top: 10px; font-size: 0.78rem; color: #475569;">
                        <strong>Tag Dinamis Tersedia:</strong>
                        <ul style="margin-left: 18px; margin-top: 4px; line-height: 1.6;">
                            <li><code>{region}</code> : Akan otomatis diganti dengan nama Provinsi atau Kab/Kota yang sedang dilihat pengunjung (misal: <em>Provinsi Jawa Barat</em> atau <em>Kota Bandung</em>).</li>
                            <li><code>{program}</code> : Akan otomatis diganti dengan judul program yang dipilih pengunjung (misal: <em>Training Confined Space Madya</em>).</li>
                        </ul>
                    </div>
                </div>

                <!-- PREVIEW BOX -->
                <div class="form-group">
                    <label class="form-label">Pratinjau Pesan yang Diterima di WhatsApp:</label>
                    <div style="background: #e5ddd5; border-radius: 12px; padding: 20px; max-width: 540px;">
                        <div style="background: #ffffff; border-radius: 8px 8px 8px 0; padding: 12px 16px; font-size: 0.86rem; color: #111827; box-shadow: 0 1px 2px rgba(0,0,0,0.1); position: relative;" id="livePreview">
                            Halo Admin Training TKBT, saya ingin informasi dan konsultasi pendaftaran pelatihan K3 Tenaga Kerja Bangunan Tinggi untuk wilayah <strong>Kota Surabaya</strong>. Mohon info jadwal terbaru dan persyaratannya.
                            <div style="text-align: right; font-size: 0.65rem; color: #9ca3af; margin-top: 6px;">{{ date('H:i') }} <i class="bi bi-check2-all" style="color: #3b82f6;"></i></div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 14px; margin-top: 30px; flex-wrap: wrap;">
                    <button type="submit" class="btn-admin-gold" style="font-size: 0.92rem; padding: 11px 24px; background: #0284c7; color: white;">
                        <i class="bi bi-save2"></i> Simpan Pengaturan WhatsApp
                    </button>

                    <a href="https://api.whatsapp.com/send?phone={{ $whatsappNumber }}&text={{ urlencode(str_replace(['{region}', '{program}'], ['DKI Jakarta', 'TKBT Tingkat 1'], $whatsappTemplate)) }}" target="_blank" class="btn-admin-primary" style="background: #0369a1; font-size: 0.92rem; padding: 11px 20px;">
                        <i class="bi bi-whatsapp"></i> Uji Coba Chat WA Utama
                    </a>
                </div>

            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    const templateInput = document.getElementById('whatsapp_template');
    const livePreview = document.getElementById('livePreview');

    if (templateInput && livePreview) {
        templateInput.addEventListener('input', () => {
            let val = templateInput.value;
            val = val.replace('{region}', '<strong>Kota Surabaya</strong>');
            val = val.replace('{program}', '<strong>Training Confined Space Madya</strong>');
            livePreview.innerHTML = val.replace(/\n/g, '<br>') + 
                '<div style="text-align: right; font-size: 0.65rem; color: #9ca3af; margin-top: 6px;">{{ date("H:i") }} <i class="bi bi-check2-all" style="color: #3b82f6;"></i></div>';
        });
    }
</script>
@endpush
