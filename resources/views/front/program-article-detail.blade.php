@extends('layouts.front')

@section('title', $article->title . ' | Sertifikasi K3 Ruang Terbatas')
@section('meta_description', Str::limit($article->excerpt, 160))

@section('content')

    <!-- HERO ARTICLE DETAIL -->
    <section class="hero-section" style="padding: 46px 0 42px; text-align: left;">
        <div class="container">
            <!-- Breadcrumb -->
            <div style="font-size: 0.82rem; color: #a7f3d0; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $province['slug']) }}" style="color: #cbd5e1;">Provinsi {{ $province['name'] }}</a>
                @if(isset($kabkotSlug) && isset($kabkotName))
                    <span>/</span>
                    <a href="{{ route('wilayah.kabkot', [$province['slug'], $kabkotSlug]) }}" style="color: #cbd5e1;">{{ $kabkotName }}</a>
                @endif
                @if(isset($kecamatanName))
                    <span>/</span>
                    <span style="color: #cbd5e1;">Kecamatan {{ $kecamatanName }}</span>
                @endif
                <span>/</span>
                <a href="{{ isset($kabkotSlug) ? route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $program['slug']]) : route('wilayah.provinsi.program', [$province['slug'], $program['slug']]) }}" style="color: #cbd5e1;">
                    {{ $program['level_name'] ?? 'Program Pelatihan' }}
                </a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ Str::limit($article->title, 42) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-tag-fill"></i> {{ $program['level_name'] ?? 'K3 Ruang Terbatas' }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(52, 211, 153, 0.2); border-color: #34d399; color: #a7f3d0;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $regionName }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.2); border-color: #f59e0b; color: #fde68a;">
                    <i class="bi bi-shield-check"></i> Modul Terverifikasi Kemnaker RI
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; line-height: 1.28; margin-bottom: 14px;">
                {{ $article->title }}
            </h1>

            <div style="display: flex; align-items: center; gap: 16px; font-size: 0.82rem; color: #cbd5e1; flex-wrap: wrap;">
                <span><i class="bi bi-person-fill" style="color: #34d399;"></i> {{ $article->author ?? 'Instruktur Kemnaker RI' }}</span>
                <span>•</span>
                <span><i class="bi bi-clock-history" style="color: #34d399;"></i> Waktu Baca: 35-45 Menit (Panduan Komprehensif)</span>
                <span>•</span>
                <span><i class="bi bi-eye-fill" style="color: #34d399;"></i> {{ number_format($article->views_count ?? 450) }} x dibaca</span>
                <span>•</span>
                <span style="color: #6ee7b7; font-weight: 700;"><i class="bi bi-patch-check-fill"></i> Standar Resmi Kemnaker RI & BNSP</span>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid">
                
                <!-- Main Article Column -->
                <div>
                    <div class="article-content-card">
                        
                        <!-- Back to 200 list link -->
                        @php
                            $programUrl = isset($kabkotSlug)
                                ? route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $program['slug']])
                                : route('wilayah.provinsi.program', [$province['slug'], $program['slug']]);
                        @endphp
                        <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 8px; padding: 12px 18px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <div style="font-size: 0.84rem; color: #065f46; font-weight: 600;">
                                <i class="bi bi-info-circle-fill" style="color: #10b981;"></i> Modul resmi: <strong>{{ $program['title'] }} — {{ $regionName }}</strong>
                            </div>
                            <a href="{{ $programUrl }}#daftar-200-artikel" style="font-size: 0.82rem; font-weight: 700; color: #059669; display: inline-flex; align-items: center; gap: 6px;">
                                <i class="bi bi-arrow-left"></i> Kembali ke 200 Modul Artikel
                            </a>
                        </div>

                        <!-- Highlight Excerpt -->
                        <div style="font-size: 1.02rem; font-weight: 600; color: #0f172a; background: #f0fdf4; border-left: 4px solid #10b981; padding: 16px 20px; border-radius: 8px; margin-bottom: 28px;">
                            <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.8px; color: #059669; margin-bottom: 6px; font-weight: 800;">
                                <i class="bi bi-bookmark-check-fill"></i> Ringkasan Eksekutif Kurikulum
                            </div>
                            {{ $article->excerpt }}
                        </div>

                        <!-- 4 WHATSAPP HOTLINES CARD (INSIDE ARTICLE READER) -->
                        <div class="wa-hotlines-box" style="margin: 0 0 32px 0;">
                            <div class="wa-hotlines-header">
                                <h3><i class="bi bi-headset" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor Kontak WhatsApp Pendaftaran & Konsultasi</h3>
                                <p>Butuh penjelasan materi teknis, jadwal batch, atau sertifikasi Kemnaker RI? Hubungi konsultan kami:</p>
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

                        <!-- FULL 6,000 - 9,000 WORD CONTENT (RENDER 28 CHAPTERS) -->
                        <div class="article-rich-text" style="color: #1e293b; font-size: 0.95rem; line-height: 1.85;">
                            @php
                                $paragraphs = explode("\n\n", $article->content);
                            @endphp

                            @foreach($paragraphs as $para)
                                @if(str_starts_with(trim($para), 'BAB '))
                                    <div style="margin-top: 36px; margin-bottom: 16px; border-top: 2px solid #ecfdf5; padding-top: 24px;">
                                        @php
                                            $lines = explode("\n", trim($para));
                                            $header = array_shift($lines);
                                            $body = implode("\n", $lines);
                                        @endphp
                                        <h2 style="font-size: 1.25rem; font-weight: 800; color: #064e3b; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                                            <i class="bi bi-journal-text" style="color: #10b981;"></i> {{ $header }}
                                        </h2>
                                        @if(!empty($body))
                                            <p style="white-space: pre-line; margin-bottom: 16px; color: #334155;">{{ $body }}</p>
                                        @endif
                                    </div>
                                @else
                                    <p style="white-space: pre-line; margin-bottom: 18px; color: #334155;">{{ trim($para) }}</p>
                                @endif
                            @endforeach
                        </div>

                        <!-- Article End CTA Banner -->
                        <div style="background: linear-gradient(135deg, #06241b 0%, #0c3327 100%); border-radius: 12px; padding: 28px; color: #ffffff; margin-top: 40px; text-align: center;">
                            <div style="font-size: 0.8rem; color: #34d399; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                                Pendaftaran & Uji Sertifikasi Resmi
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 12px;">
                                Siap Mengikuti Pelatihan {{ $program['title'] }} di {{ $regionName }}?
                            </h3>
                            <p style="font-size: 0.88rem; color: #a7f3d0; max-width: 600px; margin: 0 auto 20px; line-height: 1.6;">
                                Dapatkan silabus teknis lengkap, jadwal batch terdekat, dan konfirmasi kuota peserta dengan menghubungi WhatsApp kami:
                            </p>
                            <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="font-size: 0.95rem; padding: 12px 28px; display: inline-flex;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp: 081399810272
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div>
                    <!-- Sticky Sidebar -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 26px; box-shadow: 0 4px 16px rgba(0,0,0,0.03); position: sticky; top: 96px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 18px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px;">
                            Informasi Pendaftaran
                        </h3>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                            <i class="bi bi-whatsapp"></i> Chat Hotline Utama WA
                        </a>

                        <div style="font-size: 0.82rem; color: #64748b; line-height: 1.6; margin-bottom: 20px;">
                            Layanan konsultasi resmi K3 Ruang Terbatas untuk wilayah <strong>{{ $regionName }}</strong>.
                        </div>

                        <!-- Modul Terkait di Wilayah Ini -->
                        <div style="border-top: 1px solid #f1f5f9; padding-top: 18px; margin-top: 16px;">
                            <h4 style="font-size: 0.95rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">
                                Topik Modul Lainnya (200 Tersedia):
                            </h4>
                            <div style="display: flex; flex-direction: column; gap: 8px; max-height: 320px; overflow-y: auto;">
                                @foreach(array_slice($allArticles, 0, 8) as $otherArt)
                                    @php
                                        if (isset($kecamatanSlug) && isset($kabkotSlug)) {
                                            $otherUrl = route('wilayah.kecamatan.program.article', [$province['slug'], $kabkotSlug, $kecamatanSlug, $program['slug'], $otherArt->slug]);
                                        } elseif (isset($kabkotSlug)) {
                                            $otherUrl = route('wilayah.kabkot.program.article', [$province['slug'], $kabkotSlug, $program['slug'], $otherArt->slug]);
                                        } else {
                                            $otherUrl = route('wilayah.provinsi.program.article', [$province['slug'], $program['slug'], $otherArt->slug]);
                                        }
                                    @endphp
                                    <a href="{{ $otherUrl }}" style="font-size: 0.8rem; color: #334155; line-height: 1.4; padding: 6px 8px; border-radius: 6px; background: #f8fafc; border: 1px solid #e2e8f0; text-decoration: none; display: block;">
                                        <div style="font-size: 0.68rem; font-weight: 700; color: #059669;">Modul {{ $otherArt->index }}</div>
                                        <div style="font-weight: 600;">{{ Str::limit($otherArt->title, 55) }}</div>
                                    </a>
                                @endforeach
                            </div>

                            <a href="{{ $programUrl }}#daftar-200-artikel" style="font-size: 0.82rem; font-weight: 700; color: #10b981; margin-top: 12px; display: inline-flex; align-items: center; gap: 4px;">
                                Buka Seluruh 200 Topik <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>

                        <!-- Google Maps Embed -->
                        <div style="margin-top: 24px; border-top: 1px solid #f1f5f9; padding-top: 18px;">
                            <h4 style="font-size: 0.95rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">
                                Peta Lokasi {{ $regionName }}:
                            </h4>
                            <div style="border-radius: 8px; overflow: hidden; height: 180px; border: 1px solid #e2e8f0;">
                                <iframe src="{{ $mapsUrl ?? 'https://maps.google.com/maps?q=' . urlencode($regionName . ', Indonesia') . '&t=&z=11&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
