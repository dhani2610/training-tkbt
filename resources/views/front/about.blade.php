@extends('layouts.front')

@section('title', 'Tentang Kami | Sejarah, Visi, Misi & Legalitas Training TKBT')
@section('meta_description', 'Profil lengkap, sejarah pendirian, visi, misi, dan legalitas pembinaan K3 TKBT (Ketinggian) (Bangunan Tinggi / Ketinggian) resmi berstandar Kemnaker RI dan BNSP.')

@section('content')

    <!-- HERO ABOUT -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-building-check"></i>
                Profil Lembaga Pelatihan K3 Resmi
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Membangun Budaya Keselamatan <span>Bangunan Tinggi / Ketinggian</span> di Seluruh Indonesia
            </h1>

            <p class="hero-lead" style="max-width: 780px;">
                Mendedikasikan diri untuk melindungi keselamatan jiwa tenaga kerja di area berisiko tinggi melalui pembinaan kompetensi teknis, sertifikasi resmi Kemnaker RI & BNSP, serta penyediaan standar operasional prosedur yang teruji di industri.
            </p>
        </div>
    </section>

    <!-- SEJARAH, VISI & MISI SECTION -->
    <section class="section-py">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; margin-bottom: 56px; align-items: center;">
                <div>
                    <span class="section-tag">Sejarah Kami</span>
                    <h2 class="section-title" style="font-size: 1.85rem; margin-bottom: 18px;">
                        Berawal dari Komitmen Menekan Angka Fatalitas di Ruang Tertutup
                    </h2>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                        Ruang terbatas (confined space) seperti tangki penyimpanan BBM, silo industri pangan, bejana tekan petrokimia, gorong-gorong bawah tanah, dan palka kapal merupakan lingkungan kerja dengan bahaya atmosferik mematikan yang tidak kasat mata. Tingginya angka kecelakaan kerja fatal akibat keracunan gas H2S, defisiensi oksigen, ledakan gas metana, dan kegagalan upaya penyelamatan darurat (emergency rescue) melatarbelakangi berdirinya lembaga kami.
                    </p>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                        Didirikan oleh para praktisi senior Keselamatan dan Kesehatan Kerja (K3) bersama instruktur tersertifikasi Kemnaker RI, lembaga <strong>Training TKBT</strong> tumbuh menjadi pusat pembinaan terdepan di Indonesia yang mengintegrasikan teori hukum ketenagakerjaan, simulasi perizinan izin masuk (entry permit & LOTO), serta fasilitas praktikum Alat Pelindung Jatuh (PFAS) dan Full Body Harness & Lanyard berstandar internasional.
                    </p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap;">
                        <div style="background: #ecfdf5; border-left: 4px solid #10b981; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #065f46;">100%</div>
                            <div style="font-size: 0.78rem; color: #047857; font-weight: 600;">Sertifikasi Sah & Terdaftar</div>
                        </div>
                        <div style="background: #ecfdf5; border-left: 4px solid #10b981; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #065f46;">38</div>
                            <div style="font-size: 0.78rem; color: #047857; font-weight: 600;">Wilayah Provinsi Jangkauan</div>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; box-shadow: 0 8px 24px rgba(0,0,0,0.04);">
                    <div style="margin-bottom: 28px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; color: #059669; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Visi Lembaga</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin: 0;">
                            Menjadi lembaga pembinaan dan uji kompetensi K3 Bangunan Tinggi / Ketinggian (TKBT (Ketinggian)) nomor satu di Indonesia yang diakui secara nasional dan internasional, mewujudkan ekosistem industri nir-kecelakaan (Zero Accident) di mana setiap pekerja terlindungi dan pulang dengan selamat.
                        </p>
                    </div>

                    <div style="border-top: 1px solid #f1f5f9; padding-top: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; color: #059669; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">Misi Utama</h3>
                        </div>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569; padding: 0;">
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; margin-top: 2px;"></i>
                                <span>Menyelenggarakan pelatihan berbasis kompetensi berpedoman pada Kepdirjen Binwasnaker No. 113/2006 dan standar SKKNI.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; margin-top: 2px;"></i>
                                <span>Membekali peserta dengan keterampilan praktikum nyata: Alat Pelindung Jatuh (PFAS) 4 gas, Full Body Harness & Lanyard 300 bar, blower ventilasi, dan tripod rescue.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; margin-top: 2px;"></i>
                                <span>Mendukung perusahaan dan industri strategis dalam penerapan izin masuk (entry permit) dan audit keselamatan confined space.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; margin-top: 2px;"></i>
                                <span>Menyediakan layanan konsultasi respon cepat dan kemitraan in-house training yang fleksibel di seluruh Indonesia.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 4 HOTLINE WHATSAPP -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-whatsapp" style="color: var(--accent-mint); margin-right: 8px;"></i> Kontak WhatsApp Resmi Lembaga Training TKBT</h3>
                    <p>Silakan berkonsultasi langsung dengan konsultan kami mengenai jadwal pelatihan, modul silabus, atau proposal penawaran perusahaan:</p>
                </div>

                <div class="wa-hotlines-grid">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span class="wa-hotline-badge">{{ $hotline['badge'] }}</span>
                            </div>
                            <div class="wa-hotline-title">{{ $hotline['title'] }}</div>
                            <div class="wa-hotline-desc">{{ $hotline['desc'] }}</div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
