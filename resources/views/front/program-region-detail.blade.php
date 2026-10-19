@extends('layouts.front')

@section('title', $program['title'] . ' di ' . $regionName . ' | 200 Artikel & Panduan K3')
@section('meta_description', 'Kurikulum resmi, jadwal pendaftaran, dan 200 artikel materi silabus ' . $program['title'] . ' di ' . $regionName . '. Sertifikasi resmi Kemnaker RI & BNSP. Hubungi 081399810272.')

@section('content')

    <!-- HERO REGIONAL DETAIL -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
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
                <span style="color: #ffffff; font-weight: 700;">{{ Str::limit($program['title'], 38) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-award-fill"></i> {{ $program['level_name'] ?? 'K3 Bangunan Tinggi / Ketinggian' }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(52, 211, 153, 0.2); border-color: #34d399; color: #a7f3d0;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $regionName }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.2); border-color: #f59e0b; color: #fde68a;">
                    <i class="bi bi-journal-check"></i> 200 Artikel Panduan Daerah
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.25rem; line-height: 1.25; margin-bottom: 14px;">
                {{ $program['title'] }} — {{ $regionName }}
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 900px; margin-bottom: 22px;">
                Penyelenggaraan pelatihan, bimbingan teknis, dan sertifikasi resmi K3 TKBT (Ketinggian) untuk tenaga kerja profesional di wilayah {{ $regionName }}. Dilengkapi 200 materi artikel kurikulum lengkap dan terstruktur.
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi WA: 081399810272
                </a>
                <a href="#daftar-200-artikel" class="btn-outline-white">
                    <i class="bi bi-collection-play-fill"></i>
                    Lihat 200 Artikel Panduan
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid">
                
                <!-- Main Column -->
                <div>
                    <!-- Detail Program Info -->
                    <div class="article-content-card" style="margin-bottom: 30px;">
                        <h2 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
                            <i class="bi bi-shield-check" style="color: #10b981;"></i> Kurikulum & Spesifikasi Pelatihan di {{ $regionName }}
                        </h2>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.8; margin-bottom: 24px;">
                            {{ $program['full_description'] }} Pelatihan dan sertifikasi ini diselenggarakan secara berkala untuk memenuhi kepatuhan regulasi K3 di kawasan industri, pabrik manufaktur, silo pangan, instalasi pengolahan limbah, dan proyek infrastruktur di <strong>{{ $regionName }}</strong>.
                        </p>

                        <!-- Modul Kurikulum List -->
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 14px; border-top: 1px solid #f1f5f9; padding-top: 20px;">
                            Modul Pembelajaran Wajib
                        </h3>
                        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
                            @foreach($program['curriculum'] ?? [] as $idx => $modul)
                                <div style="display: flex; align-items: flex-start; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 16px;">
                                    <span style="width: 24px; height: 24px; background: #064e3b; color: #a7f3d0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.72rem; font-weight: 800; flex-shrink: 0;">
                                        {{ $idx + 1 }}
                                    </span>
                                    <span style="font-size: 0.88rem; font-weight: 600; color: #1e293b;">
                                        {{ $modul }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 4 WHATSAPP HOTLINES CARD (USER REQUIREMENT) -->
                    <div class="wa-hotlines-box" style="margin: 0 0 36px 0;">
                        <div class="wa-hotlines-header">
                            <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor Kontak WhatsApp Resmi di {{ $regionName }}</h3>
                            <p>Hubungi kontak resmi kami untuk informasi pendaftaran, jadwal batch, dan silabus:</p>
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

                    <!-- 200 ARTIKEL REGIONAL DIRECTORY -->
                    <div id="daftar-200-artikel" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 30px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <span class="section-tag" style="margin-bottom: 6px;">200 Artikel Panduan Teknis</span>
                                <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Direktori 200 Artikel {{ $program['title'] }} di {{ $regionName }}
                                </h2>
                            </div>
                            <span style="font-size: 0.8rem; font-weight: 700; color: #059669; background: #ecfdf5; padding: 6px 14px; border-radius: 20px; border: 1px solid #a7f3d0;">
                                <i class="bi bi-shield-check"></i> Sertifikasi Kemnaker RI & BNSP
                            </span>
                        </div>

                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 24px;">
                            Klik salah satu topik di bawah ini untuk membaca ulasan panduan lengkap 28 bab yang mengupas tuntas standar K3, prosedur perizinan masuk, dan mitigasi darurat:
                        </p>

                        @php
                    $articlesJson = [];
                    if(isset($articles) && count($articles) > 0) {
                        foreach($articles as $idx => $art) {
                            $artObj = is_array($art) ? (object)$art : $art;
                            $u = route('article.detail', $artObj->slug);
                            $articlesJson[] = [
                                'index' => $idx + 1,
                                'title' => $artObj->title,
                                'url' => $u,
                                'excerpt' => $artObj->excerpt ?? Str::limit(strip_tags($artObj->content ?? ''), 140),
                                'region' => $kabkotName ?? ($province['name'] ?? 'Indonesia'),
                            ];
                        }
                    }
                @endphp

                        <!-- Controls: Live Search + Items Per Page -->
                        <div style="display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap;">
                            <div style="flex: 1; min-width: 240px; position: relative;">
                                <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                                <input type="text" id="articleSearchInput" class="form-control" placeholder="Cari topik modul (misal: Gas Detector, Full Body Harness & Lanyard, LOTO, Rescue, Permit)..." style="padding: 11px 16px 11px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.9rem; width: 100%;">
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <label style="font-size: 0.82rem; font-weight: 700; color: #475569; white-space: nowrap;">Tampilkan:</label>
                                <select id="perPageSelect" class="form-control" style="width: auto; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.86rem; font-weight: 600;">
                                    <option value="10" selected>10 Modul / Hal</option>
                                    <option value="20">20 Modul / Hal</option>
                                    <option value="50">50 Modul / Hal</option>
                                </select>
                            </div>
                        </div>

                        <!-- Info Count -->
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; font-size: 0.82rem; color: #64748b;">
                            <div id="pagingInfoText">Memuat 200 modul artikel...</div>
                            <div id="activePageBadge" style="font-weight: 700; color: #059669;">Halaman 1</div>
                        </div>

                        <!-- DYNAMIC FAST JS CONTAINER (0 LAG) -->
                        <div id="articlesListContainer" style="display: flex; flex-direction: column; gap: 14px; min-height: 200px;">
                            <!-- Rendered cleanly by JS -->
                        </div>

                        <!-- PAGINATION CONTROLS -->
                        <div id="paginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                            <!-- Generated by JS -->
                        </div>
                    </div>
                </div>

                <!-- Sidebar Right Column -->
                <div>
                    <!-- Quick Contact Sticky Box -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 26px; margin-bottom: 26px; box-shadow: 0 4px 16px rgba(0,0,0,0.03); position: sticky; top: 96px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 18px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px;">
                            Konsultasi {{ $regionName }}
                        </h3>

                        <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 18px;">
                            Jadwal pelaksanaan terdekat dan konfirmasi ketersediaan kuota kelas di {{ $regionName }} dapat dikonfirmasikan langsung melalui WhatsApp:
                        </p>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                            <i class="bi bi-whatsapp"></i> Chat WhatsApp: 081399810272
                        </a>

                        <div style="font-size: 0.78rem; color: #64748b; display: flex; flex-direction: column; gap: 8px; margin-top: 16px; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                            <div><i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Layanan Tersedia untuk Perorangan & Perusahaan</div>
                            <div><i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Fasilitas Sertifikat Kemnaker RI & Lisensi K3</div>
                            <div><i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Modul Silabus & Konsumsi Lengkap</div>
                        </div>

                        <!-- Sub-wilayah / Kecamatan Directory -->
                        @if(isset($kecamatanList) && count($kecamatanList) > 0)
                            <div style="margin-top: 24px; border-top: 1px solid #f1f5f9; padding-top: 18px;">
                                <h4 style="font-size: 0.95rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">
                                    Daftar Kecamatan / Daerah:
                                </h4>
                                <div style="display: flex; flex-wrap: wrap; gap: 6px; max-height: 220px; overflow-y: auto;">
                                    @foreach($kecamatanList as $kec)
                                        @php
                                            $kecSlug = Str::slug($kec);
                                            $kecUrl = isset($kabkotSlug)
                                                ? route('wilayah.kecamatan.program', [$province['slug'], $kabkotSlug, $kecSlug, $program['slug']])
                                                : '#';
                                        @endphp
                                        <a href="{{ $kecUrl }}" style="font-size: 0.74rem; background: #f1f5f9; color: #334155; padding: 4px 8px; border-radius: 6px; text-decoration: none;">
                                            {{ $kec }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Google Maps Interactive Embed -->
                        <div style="margin-top: 24px; border-top: 1px solid #f1f5f9; padding-top: 18px;">
                            <h4 style="font-size: 0.95rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">
                                Lokasi Wilayah {{ $regionName }}:
                            </h4>
                            <div style="border-radius: 8px; overflow: hidden; height: 180px; border: 1px solid #e2e8f0;">
                                <iframe src="{{ $mapsUrl ?? 'https://maps.google.com/maps?q=' . urlencode($regionName) . '&t=&z=11&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    // RAW ARTICLES DATA (200 ITEMS IN MEMORY)
    const rawArticles = @json($articlesJson);
    let filteredArticles = [...rawArticles];
    let currentPage = 1;
    let perPage = 10;

    const container = document.getElementById('articlesListContainer');
    const paginationNav = document.getElementById('paginationNav');
    const searchInput = document.getElementById('articleSearchInput');
    const perPageSelect = document.getElementById('perPageSelect');
    const pagingInfoText = document.getElementById('pagingInfoText');
    const activePageBadge = document.getElementById('activePageBadge');

    function renderPage(page, scrollUp = false) {
        currentPage = page;
        const total = filteredArticles.length;
        const totalPages = Math.ceil(total / perPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * perPage;
        const endIndex = Math.min(startIndex + perPage, total);
        const currentItems = filteredArticles.slice(startIndex, endIndex);

        // Update info text
        if (total === 0) {
            if (pagingInfoText) pagingInfoText.textContent = "Tidak ditemukan modul artikel yang sesuai.";
            if (activePageBadge) activePageBadge.textContent = "0 Hasil";
            container.innerHTML = `
                <div style="text-align: center; padding: 48px 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;">
                    <i class="bi bi-search" style="font-size: 2.2rem; color: #94a3b8; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 1rem; font-weight: 700; color: #334155;">Tidak ada modul yang cocok dengan kata kunci</h4>
                    <p style="font-size: 0.84rem; color: #64748b; margin-top: 4px;">Coba gunakan kata kunci lain seperti: Gas Detector, Full Body Harness & Lanyard, LOTO, Izin Masuk, atau Penyelamat.</p>
                </div>
            `;
            paginationNav.innerHTML = '';
            return;
        }

        if (pagingInfoText) pagingInfoText.innerHTML = `Menampilkan <strong>${startIndex + 1} - ${endIndex}</strong> dari <strong>${total}</strong> modul artikel`;
        if (activePageBadge) activePageBadge.textContent = `Halaman ${currentPage} dari ${totalPages}`;

        // Render Cards via lightweight document fragment
        let html = '';
        currentItems.forEach(item => {
            html += `
                <div class="article-topic-item" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; transition: all 0.2s ease; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; font-weight: 800; background: #ecfdf5; color: #059669; padding: 3px 10px; border-radius: 4px; border: 1px solid #a7f3d0;">
                            MODUL ${item.index} DARI 200
                        </span>
                        <span style="font-size: 0.74rem; font-weight: 700; color: #059669; background: #f0fdf4; padding: 2px 8px; border-radius: 4px;">
                            <i class="bi bi-journal-check"></i> Silabus Resmi Kemnaker RI
                        </span>
                    </div>

                    <h4 style="font-size: 1.02rem; font-weight: 800; color: #0f172a; margin-bottom: 8px; line-height: 1.4;">
                        <a href="${item.url}" style="color: inherit; text-decoration: none;" class="article-link-title" onmouseover="this.style.color='#10b981'" onmouseout="this.style.color='#0f172a'">
                            ${item.title}
                        </a>
                    </h4>

                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 12px;">
                        ${item.excerpt}
                    </p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px;">
                        <span style="font-size: 0.76rem; color: #94a3b8;">
                            <i class="bi bi-geo-alt"></i> ${item.region}
                        </span>
                        <a href="${item.url}" style="font-size: 0.82rem; font-weight: 700; color: #10b981; display: inline-flex; align-items: center; gap: 4px; text-decoration: none;">
                            Baca Modul Lengkap <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            `;
        });
        container.innerHTML = html;

        // Render Pagination Buttons
        renderPaginationButtons(totalPages);

        if (scrollUp) {
            const anchor = document.getElementById('daftar-200-artikel');
            if (anchor) {
                anchor.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function renderPaginationButtons(totalPages) {
        if (totalPages <= 1) {
            paginationNav.innerHTML = '';
            return;
        }

        let navHtml = '';

        // Previous button
        const prevDisabled = currentPage === 1 ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage - 1}" ${prevDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #334155; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
        `;

        // Page numbers logic (sliding window)
        const delta = 2;
        const range = [];
        for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
            range.push(i);
        }

        // Always show page 1
        range.unshift(1);
        if (totalPages > 1 && !range.includes(totalPages)) {
            range.push(totalPages);
        }

        // Insert dots
        let prevNum = 0;
        range.forEach(num => {
            if (prevNum && num - prevNum > 1) {
                navHtml += `<span style="padding: 6px 10px; color: #94a3b8; font-weight: 700;">...</span>`;
            }
            const isActive = num === currentPage;
            const activeStyle = isActive 
                ? 'background: #10b981; color: #ffffff; border-color: #10b981; font-weight: 800;' 
                : 'background: #ffffff; color: #334155; border-color: #cbd5e1; font-weight: 600;';
            navHtml += `
                <button type="button" class="btn-page-ctrl" data-page="${num}" style="padding: 7px 13px; border-radius: 6px; border: 1px solid; ${activeStyle} font-size: 0.82rem; cursor: pointer;">
                    ${num}
                </button>
            `;
            prevNum = num;
        });

        // Next button
        const nextDisabled = currentPage === totalPages ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage + 1}" ${nextDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #334155; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        `;

        paginationNav.innerHTML = navHtml;

        // Attach clicks
        paginationNav.querySelectorAll('.btn-page-ctrl').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const p = parseInt(this.getAttribute('data-page'));
                if (!isNaN(p)) {
                    renderPage(p, true);
                }
            });
        });
    }

    // Search filter event with debounce
    let searchTimeout = null;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const q = searchInput.value.toLowerCase().trim();
                if (!q) {
                    filteredArticles = [...rawArticles];
                } else {
                    filteredArticles = rawArticles.filter(item => {
                        return item.title.toLowerCase().includes(q) || 
                               item.excerpt.toLowerCase().includes(q) ||
                               ("modul " + item.index).includes(q);
                    });
                }
                renderPage(1, false);
            }, 120);
        });
    }

    // Per Page Select event
    if (perPageSelect) {
        perPageSelect.addEventListener('change', function() {
            perPage = parseInt(this.value) || 10;
            renderPage(1, false);
        });
    }

    // Initial render
    renderPage(1, false);
})();
</script>
@endpush
