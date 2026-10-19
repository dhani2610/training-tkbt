@extends('layouts.front')

@section('title', 'Program Pelatihan & Sertifikasi K3 TKBT (Ketinggian) (Bangunan Tinggi / Ketinggian)')
@section('meta_description', 'Daftar 4 program resmi pembinaan K3 Bangunan Tinggi / Ketinggian: Tingkat Muda, Tingkat Madya, Tingkat Utama, dan Penyelamat (Rescue) TKBT (Ketinggian) berstandar Kemnaker RI.')

@section('content')

    <!-- HERO PROGRAMS -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-mortarboard-fill"></i>
                Skema Sertifikasi Kemnaker RI & BNSP
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Empat (4) Program Resmi <span>K3 TKBT (Ketinggian)</span>
            </h1>

            <p class="hero-lead" style="max-width: 800px;">
                Pilih jenjang pembinaan keselamatan ruang terbatas sesuai peran operasional Anda di lapangan. Seluruh program dilengkapi materi izin masuk (entry permit), pengujian Alat Pelindung Jatuh (PFAS), dan pemakaian unit Full Body Harness & Lanyard.
            </p>
        </div>
    </section>

    <!-- PROGRAM LIST -->
    <section class="section-py">
        <div class="container">
            <div class="programs-grid" style="margin-bottom: 50px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = is_array($prog) ? (object)$prog : $prog;
                        $slug = $progObj->slug ?? '';
                        $detailUrl = route('program.detail', $slug);
                        $directWa = "https://api.whatsapp.com/send?phone=6281399810272&text=" . urlencode("Halo Admin Training TKBT, saya ingin pendaftaran program {$progObj->title}.");
                    @endphp
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $progObj->image ?? 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $progObj->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $progObj->badge ?? 'Sertifikasi Resmi' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $progObj->level_name ?? 'K3 Bangunan Tinggi / Ketinggian' }}</div>
                            <h3 class="program-title">{{ $progObj->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-clock-history" style="color: #10b981;"></i> {{ $progObj->duration ?? '3 - 4 Hari' }}</div>
                                <div><i class="bi bi-award" style="color: #10b981;"></i> {{ $progObj->certification_body ?? 'Kemnaker RI & BNSP' }}</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $detailUrl }}" class="btn-card-detail">
                                    <i class="bi bi-info-circle"></i> Kurikulum & Daerah
                                </a>
                                <a href="{{ $directWa }}" target="_blank" class="btn-card-wa" title="Konsultasi WhatsApp">
                                    <i class="bi bi-whatsapp"></i> Chat WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-headset" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Hotline WhatsApp Layanan Konsultasi & Pendaftaran</h3>
                    <p>Hubungi petugas spesialis kami untuk konfirmasi ketersediaan kuota, silabus rinci, atau in-house training perusahaan:</p>
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

            <!-- 38 PROVINCES SELECTOR -->
            <div style="margin-top: 56px;">
                <div class="section-header" style="margin-bottom: 30px;">
                    <span class="section-tag">Direktori Wilayah</span>
                    <h2 class="section-title" style="font-size: 1.75rem;">Pilih Wilayah Pelatihan di 38 Provinsi</h2>
                    <p class="section-desc">
                        Setiap wilayah memiliki jadwal pelatihan, direktori kabupaten/kota, dan 200 artikel panduan teknis K3 TKBT (Ketinggian).
                    </p>
                </div>

                <div class="provinces-grid">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="province-chip">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-arrow-right-short" style="font-size: 1.2rem; color: #10b981;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
