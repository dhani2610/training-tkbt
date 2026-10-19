@extends('layouts.front')

@section('title', 'Training TKBT ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ' | Sertifikasi K3 Ketinggian')
@section('meta_description', 'Layanan resmi pelatihan dan sertifikasi kompetensi K3 TKBT (Tenaga Kerja Bangunan Tinggi) di Kecamatan ' . $kecamatanData['name'] . ', ' . $kecamatanData['kabkot']['name'] . ', ' . $kecamatanData['province']['name'] . '. Hubungi WhatsApp 081399810272.')

@section('content')

    <!-- HERO KECAMATAN -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #a7f3d0; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $kecamatanData['province']['slug']) }}" style="color: #cbd5e1;">Provinsi {{ $kecamatanData['province']['name'] }}</a>
                <span>/</span>
                <a href="{{ route('wilayah.kabkot', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug']]) }}" style="color: #cbd5e1;">{{ $kecamatanData['kabkot']['name'] }}</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">Kecamatan {{ $kecamatanData['name'] }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> Kecamatan {{ $kecamatanData['name'] }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(52, 211, 153, 0.2); border-color: #34d399; color: #a7f3d0;">
                    <i class="bi bi-buildings"></i> {{ $kecamatanData['kabkot']['name'] }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.2); border-color: #f59e0b; color: #fde68a;">
                    <i class="bi bi-shield-check"></i> Permenaker No. 9 Tahun 2016
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; line-height: 1.25; margin-bottom: 14px;">
                Training TKBT <span>Kecamatan {{ $kecamatanData['name'] }}</span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan pelatihan kompetensi K3 Tenaga Kerja Bangunan Tinggi (TKBT Tingkat 1 & Tingkat 2) di Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}, Provinsi {{ $kecamatanData['province']['name'] }}. Menguasai teknik 100% Tie-Off, inspeksi Full Body Harness EN 361, Lanyard EN 355, perancah, dan keselamatan tower.
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah {{ $kecamatanData['name'] }}
                </a>
                <a href="#daftar-artikel" class="btn-outline-white">
                    <i class="bi bi-journal-text"></i>
                    Lihat 200 Artikel Panduan
                </a>
            </div>
        </div>
    </section>

    <!-- 2 PROGRAM PELATIHAN -->
    <section class="section-py">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">2 Program Resmi di {{ $kecamatanData['name'] }}</span>
                <h2 class="section-title">Program Sertifikasi TKBT Kemnaker RI</h2>
                <p class="section-desc">
                    Tersedia 2 program pelatihan resmi yang masing-masing memiliki 200 artikel materi dan silabus kurikulum di Kecamatan {{ $kecamatanData['name'] }}:
                </p>
            </div>

            <div class="programs-grid" style="margin-bottom: 48px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.kecamatan.program', [$kecamatanData['province']['slug'], $kecamatanData['kabkot']['slug'], $kecamatanData['slug'], $progObj->slug]);
                    @endphp
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $progObj->image ?? 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $progObj->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $progObj->badge ?? 'Kemnaker RI' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $progObj->level_name ?? 'K3 Ketinggian' }}</div>
                            <h3 class="program-title">{{ $progObj->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-geo-alt" style="color: #10b981;"></i> {{ $kecamatanData['name'] }}</div>
                                <div><i class="bi bi-journal-check" style="color: #10b981;"></i> 200 Modul Artikel</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka 200 Artikel {{ $kecamatanData['name'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="margin-bottom: 48px;">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan di {{ $kecamatanData['name'] }}</h3>
                    <p>Silakan hubungi kontak resmi kami untuk konsultasi jadwal batch, silabus materi, dan pendaftaran mandiri maupun in-house corporate:</p>
                </div>

                <div class="wa-cards-grid">
                    @foreach($waNumbers as $wa)
                        <div class="wa-hotline-card {{ !empty($wa['is_primary']) ? 'primary-hotline-card' : '' }}">
                            <div class="wa-card-top">
                                <div class="wa-card-icon">
                                    <i class="bi {{ $wa['icon'] }}"></i>
                                </div>
                                <span class="wa-card-badge">{{ $wa['badge'] }}</span>
                            </div>
                            <h4 class="wa-card-title">{{ $wa['title'] }}</h4>
                            <p class="wa-card-desc">{{ $wa['desc'] }}</p>
                            <a href="{{ $wa['url'] }}" target="_blank" class="btn-wa-card">
                                <i class="bi bi-whatsapp"></i> Chat {{ $wa['number'] }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- 200 ARTIKEL PANDUAN KECAMATAN -->
            <div id="daftar-artikel" class="section-header" style="margin-top: 48px; text-align: left;">
                <span class="section-tag">200 Artikel K3 TKBT</span>
                <h2 class="section-title">Daftar 200 Artikel Panduan K3 TKBT di Kecamatan {{ $kecamatanData['name'] }}</h2>
                <p class="section-desc" style="margin-left: 0;">
                    Kumpulan 200 artikel mendalam (6000 - 9000 kata per topik) mencakup standar Permenaker No. 9 Tahun 2016, teknik proteksi jatuh, inspeksi APD, dan penyelamatan darurat di Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}:
                </p>
            </div>

            <div class="articles-grid">
                @foreach($regionalArticles as $art)
                    @php
                        $artObj = (object)$art;
                        $artUrl = route('article.detail', $artObj->slug);
                    @endphp
                    <div class="article-card">
                        <div class="article-badge">
                            <i class="bi bi-bookmark-fill me-1"></i> Modul #{{ $loop->iteration }}
                        </div>
                        <h3 class="article-title">
                            <a href="{{ $artUrl }}">{{ $artObj->title }}</a>
                        </h3>
                        <p class="article-excerpt">
                            Panduan teknis dan standar operasional K3 Tenaga Kerja Bangunan Tinggi (TKBT) di Kecamatan {{ $kecamatanData['name'] }}. Mengulas regulasi, kalkulasi jarak jatuh, mitigasi trauma suspensi, dan sertifikasi Kemnaker RI.
                        </p>
                        <div class="article-footer">
                            <span><i class="bi bi-clock me-1"></i> {{ $artObj->read_time ?? 35 }} Menit Baca (6000-9000 Kata)</span>
                            <a href="{{ $artUrl }}" class="btn-link" style="color: #059669; font-weight: 700;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 64px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-map-fill text-success"></i> Peta Lokasi Wilayah Kecamatan {{ $kecamatanData['name'] }}, {{ $kecamatanData['kabkot']['name'] }}
                </h3>
                <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                    Kami melayani pelatihan K3 TKBT baik secara publik maupun in-house training langsung ke fasilitas perusahaan Anda di area Kecamatan {{ $kecamatanData['name'] }} dan sekitarnya.
                </p>
                <div style="width: 100%; height: 350px; border-radius: 12px; overflow: hidden; border: 1px solid #cbd5e1;">
                    <iframe src="{{ $mapUrl }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
