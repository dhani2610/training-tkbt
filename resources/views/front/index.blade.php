@extends('layouts.front')

@section('title', 'Training TKBT (Tenaga Kerja Bangunan Tinggi) Indonesia | Kemnaker RI & BNSP')
@section('meta_description', 'Lembaga pelatihan resmi dan sertifikasi kompetensi K3 Bangunan Tinggi / Ketinggian (TKBT (Ketinggian)) Muda, Madya, Utama, dan Penyelamat (Rescue). Hubungi WhatsApp 081399810272.')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-shield-check"></i>
                Standar Resmi Kemnaker RI & Standar Internasional OSHA 1910.146
            </div>
            
            <h1 class="hero-title">
                Pusat Pelatihan & Sertifikasi <span>K3 TKBT (Ketinggian)</span> (Bangunan Tinggi / Ketinggian)
            </h1>

            <p class="hero-lead">
                Kuasai protokol keselamatan mutlak di ruang tertutup: verifikasi izin masuk (entry permit), pengoperasian Alat Pelindung Jatuh (PFAS) 4 gas, pemakaian unit Full Body Harness & Lanyard 300 Bar, ventilasi paksa, isolasi LOTO, serta simulasi evakuasi darurat non-entry rescue di seluruh wilayah Indonesia.
            </p>

            <div class="hero-cta">
                <a href="{{ $waLink ?? 'https://api.whatsapp.com/send?phone=6281399810272' }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Pendaftaran: 081399810272
                </a>
                <a href="#program" class="btn-outline-white">
                    <i class="bi bi-grid-fill"></i>
                    Lihat 2 Program Resmi
                </a>
            </div>

            <!-- DYNAMIC STATISTICS -->
            <div class="hero-stats">
                @if(isset($statistics) && $statistics->count() > 0)
                    @foreach($statistics as $stat)
                        <div class="stat-item">
                            <div class="stat-number">{{ $stat->value }}</div>
                            <div class="stat-label">{{ $stat->label }}</div>
                        </div>
                    @endforeach
                @else
                    <div class="stat-item">
                        <div class="stat-number">4 Skema</div>
                        <div class="stat-label">Muda, Madya, Utama, Rescue</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">38 Provinsi</div>
                        <div class="stat-label">Jangkauan Pelatihan Seluruh RI</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100% Hands-On</div>
                        <div class="stat-label">Praktikum Gas Detector & Full Body Harness & Lanyard</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7 Hotline</div>
                        <div class="stat-label">Konsultasi Respon Cepat WA</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- SECTION 1: 4 PROGRAM TRAINING CONFINED SPACE -->
    <section class="section-py" id="program">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Kurikulum & Sertifikasi</span>
                <h2 class="section-title">Empat (4) Program Resmi Pelatihan TKBT (Ketinggian)</h2>
                <p class="section-desc">
                    Program sertifikasi berjenjang sesuai amanat Permenaker No. 9 Tahun 2016 untuk teknisi masuk (entrant), petugas jaga (standby person), pengawas utama, dan tim penyelamat darurat.
                </p>
            </div>

            <div class="programs-grid">
                @foreach($programs as $prog)
                    @php
                        $progObj = is_array($prog) ? (object)$prog : $prog;
                        $slug = $progObj->slug ?? '';
                        $detailUrl = route('program.detail', $slug);
                        $directWa = "https://api.whatsapp.com/send?phone=6281399810272&text=" . urlencode("Halo Admin Training TKBT, saya ingin pendaftaran dan jadwal {$progObj->title}.");
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
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 125) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-clock-history" style="color: #10b981;"></i> {{ $progObj->duration ?? '3 - 4 Hari' }}</div>
                                <div><i class="bi bi-award" style="color: #10b981;"></i> {{ $progObj->certification_body ?? 'Kemnaker RI & BNSP' }}</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $detailUrl }}" class="btn-card-detail">
                                    <i class="bi bi-info-circle"></i> Detail & Wilayah
                                </a>
                                <a href="{{ $directWa }}" target="_blank" class="btn-card-wa" title="Konsultasi WhatsApp">
                                    <i class="bi bi-whatsapp"></i> Chat WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES COMPONENT -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> Empat (4) Hotline Resmi Layanan Konsultasi & Pendaftaran</h3>
                    <p>Hubungi petugas spesialis kami sesuai dengan kebutuhan informasi jadwal, modul teknis, atau pelatihan korporasi:</p>
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

    <!-- SECTION 2: KEUNGGULAN PEMBINAAN K3 RUANG TERBATAS -->
    <section class="section-py section-bg-light" id="keunggulan">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Mengapa Memilih Kami</span>
                <h2 class="section-title">Standar Keselamatan Tanpa Kompromi</h2>
                <p class="section-desc">
                    Bekerja di dalam confined space memiliki potensi bahaya fatal seketika (IDLH). Kami memastikan setiap peserta menguasai keterampilan riil mitigasi risiko.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <div style="width: 48px; height: 48px; background: #ecfdf5; color: #059669; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 16px;">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Multi-Gas Detector Hands-on</h3>
                    <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6;">
                        Praktik langsung uji fungsi (bump test), kalibrasi nol udara segar, dan pemantauan kontinu 4 gas maut (O2, LEL, CO, H2S) secara real-time.
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <div style="width: 48px; height: 48px; background: #ecfdf5; color: #059669; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 16px;">
                        <i class="bi bi-mask"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Unit Full Body Harness & Lanyard 300 Bar Bertekanan Positif</h3>
                    <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6;">
                        Simulasi pengoperasian tabung silinder komposit Full Body Harness & Lanyard, pengecekan tekanan low-pressure whistle alarm, dan uji kerapatan masker (fit testing).
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <div style="width: 48px; height: 48px; background: #ecfdf5; color: #059669; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 16px;">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Isolasi Energi LOTO & Ventilasi</h3>
                    <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6;">
                        Prosedur penguncian katup mekanikal dan panel elektrik (Lockout / Tagout) serta pengoperasian blower ventilasi aksial pembersih udara kotor.
                    </p>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <div style="width: 48px; height: 48px; background: #ecfdf5; color: #059669; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 16px;">
                        <i class="bi bi-life-preserver"></i>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Tripod Rescue & Penyelamatan</h3>
                    <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6;">
                        Instalasi tripod keselamatan di atas lubang manhole, winch man-riding otomatis, fall arrest block, dan teknik evakuasi korban darurat tanpa masuk.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: ARTIKEL 3 CARD DI-LIMIT (SESUAI PERMINTAAN USER) -->
    <section class="section-py" id="artikel">
        <div class="container">
            <div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 36px; flex-wrap: wrap; gap: 16px;">
                <div>
                    <span class="section-tag">Pusat Informasi & Pengetahuan</span>
                    <h2 class="section-title" style="margin-bottom: 6px;">Artikel & Panduan Teknis Terbaru</h2>
                    <p class="section-desc" style="margin-bottom: 0;">
                        Kumpulan panduan teknis dan standar operasional keselamatan ruang terbatas per daerah di Indonesia.
                    </p>
                </div>

                <a href="{{ route('articles') }}" class="btn-primary-green" style="padding: 10px 20px; font-size: 0.88rem;">
                    Lihat Semua 200 Artikel <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- 3 CARD LIMIT -->
            <div class="articles-grid">
                @forelse($articles as $art)
                    <div class="article-card">
                        <span class="article-badge">
                            <i class="bi bi-book"></i> {{ $art->category ?? 'Training K3 Bangunan Tinggi / Ketinggian' }}
                        </span>

                        <h3 class="article-title">
                            <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit;">
                                {{ $art->title }}
                            </a>
                        </h3>

                        <p class="article-excerpt">
                            {{ Str::limit($art->excerpt ?? strip_tags($art->content), 150) }}
                        </p>

                        <div class="article-footer">
                            <div><i class="bi bi-person-fill"></i> {{ $art->author ?? 'Instruktur Kemnaker RI' }}</div>
                            <div><i class="bi bi-eye"></i> {{ number_format($art->views_count ?? 320) }} pembaca</div>
                        </div>

                        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px dashed #e2e8f0; display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 0.74rem; font-weight: 700; color: #059669;">
                                <i class="bi bi-patch-check"></i> Silabus Resmi Kemnaker RI
                            </span>
                            <a href="{{ route('article.detail', $art->slug) }}" style="font-size: 0.82rem; font-weight: 700; color: #10b981; display: flex; align-items: center; gap: 4px;">
                                Baca Panduan <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;">
                        Belum ada artikel yang dimuat.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION 4: DIREKTORI 38 WILAYAH PROVINSI -->
    <section class="section-py section-bg-light" id="wilayah">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Jangkauan Nasional</span>
                <h2 class="section-title">Direktori Pelatihan K3 TKBT (Ketinggian) 38 Wilayah</h2>
                <p class="section-desc">
                    Pilih provinsi untuk melihat jadwal pelatihan, daftar kabupaten/kota, serta 200 artikel silabus pembinaan di setiap wilayah.
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
    </section>

    <!-- SECTION 5: FAQ ACCORDION -->
    <section class="section-py" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Pertanyaan Umum</span>
                <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
                <p class="section-desc">
                    Pertanyaan yang sering diajukan mengenai persyaratan, durasi, keabsahan sertifikat, dan legalitas pembinaan K3 Bangunan Tinggi / Ketinggian.
                </p>
            </div>

            <div class="faq-list">
                @foreach($faqs as $index => $faq)
                    @php
                        $faqObj = is_array($faq) ? (object)$faq : $faq;
                    @endphp
                    <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="faq-question">
                            <span>{{ $faqObj->q ?? ($faqObj->question ?? '') }}</span>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            {{ $faqObj->a ?? ($faqObj->answer ?? '') }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 6: TESTIMONI PESERTA & PERUSAHAAN MITRA -->
    @if(isset($testimonials) && $testimonials->count() > 0)
    <section class="section-py section-bg-light">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Kredibilitas & Pengalaman</span>
                <h2 class="section-title">Apa Kata Alumni & Mitra Perusahaan</h2>
                <p class="section-desc">
                    Pengalaman nyata praktisi keselamatan yang telah menyelesaikan pembinaan K3 TKBT (Ketinggian) di lembaga kami.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                @foreach($testimonials as $testi)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 24px; display: flex; flex-direction: column;">
                        <div style="color: #f59e0b; margin-bottom: 12px; font-size: 0.95rem;">
                            @for($i = 0; $i < ($testi->rating ?? 5); $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                            "{{ $testi->message }}"
                        </p>
                        <div style="display: flex; align-items: center; gap: 12px; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                            <div style="width: 40px; height: 40px; background: #ecfdf5; border-radius: 50%; color: #059669; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem;">
                                {{ substr($testi->name, 0, 1) }}
                            </div>
                            <div>
                                <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $testi->name }}</div>
                                <div style="font-size: 0.74rem; color: #64748b;">{{ $testi->role }} • {{ $testi->company }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@endsection
