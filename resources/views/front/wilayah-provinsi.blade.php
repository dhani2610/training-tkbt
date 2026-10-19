@extends('layouts.front')

@section('title', 'Training TKBT Provinsi ' . $province['name'] . ' | Sertifikasi K3 Bangunan Tinggi / Ketinggian')
@section('meta_description', 'Pusat informasi dan pendaftaran resmi Training TKBT (Tenaga Kerja Bangunan Tinggi) Muda, Madya, Utama, dan Penyelamat (Rescue) di Provinsi ' . $province['name'] . '. Hubungi 081399810272.')

@section('content')

    <!-- HERO PROVINSI -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #a7f3d0; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('home') }}#wilayah" style="color: #cbd5e1;">Direktori Wilayah</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">Provinsi {{ $province['name'] }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> Wilayah {{ $province['island'] }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(52, 211, 153, 0.2); border-color: #34d399; color: #a7f3d0;">
                    <i class="bi bi-building"></i> {{ $province['total_kabkot'] }} Kabupaten / Kota
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.2); border-color: #f59e0b; color: #fde68a;">
                    <i class="bi bi-shield-check"></i> 4 Skema Kemnaker RI & BNSP
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; line-height: 1.25; margin-bottom: 14px;">
                Training TKBT <span>Provinsi {{ $province['name'] }}</span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan pelatihan, bimbingan teknis, dan sertifikasi kompetensi K3 Bangunan Tinggi / Ketinggian (TKBT (Ketinggian)) di seluruh wilayah Provinsi {{ $province['name'] }}. Menguasai verifikasi izin masuk, penggunaan Alat Pelindung Jatuh (PFAS) 4 gas, pengoperasian unit Full Body Harness & Lanyard 300 Bar, dan penyelamatan darurat.
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah {{ $province['name'] }}
                </a>
                <a href="#kabkot-list" class="btn-outline-white">
                    <i class="bi bi-pin-map-fill"></i>
                    Pilih Kabupaten / Kota
                </a>
            </div>
        </div>
    </section>

    <!-- PROGRAM PELATIHAN DI PROVINSI INI -->
    <section class="section-py">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">2 Program Resmi di {{ $province['name'] }}</span>
                <h2 class="section-title">Pilih Jenjang Pelatihan TKBT (Ketinggian)</h2>
                <p class="section-desc">
                    Setiap program terhubung dengan 200 artikel kurikulum spesialisasi berstandar Kemnaker RI untuk wilayah Provinsi {{ $province['name'] }}.
                </p>
            </div>

            <div class="programs-grid" style="margin-bottom: 48px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.provinsi.program', [$province['slug'], $progObj->slug]);
                    @endphp
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $progObj->image ?? 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $progObj->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $progObj->badge ?? 'Kemnaker RI' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $progObj->level_name ?? 'K3 Bangunan Tinggi / Ketinggian' }}</div>
                            <h3 class="program-title">{{ $progObj->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 125) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-geo-alt" style="color: #10b981;"></i> {{ $province['name'] }}</div>
                                <div><i class="bi bi-journal-check" style="color: #10b981;"></i> 200 Modul Artikel</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka 200 Artikel {{ $province['name'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="margin-bottom: 48px;">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Layanan Wilayah {{ $province['name'] }}</h3>
                    <p>Konsultasikan jadwal pelaksanaan, sertifikasi Kemnaker RI, atau permohonan in-house training perusahaan di {{ $province['name'] }}:</p>
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

            <!-- 200 ARTIKEL REGIONAL DIRECTORY VIA JS -->
            <div id="daftar-200-artikel" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <span class="section-tag" style="margin-bottom: 6px;">200 Artikel Panduan Teknis</span>
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">
                            Direktori 200 Artikel Training TKBT Provinsi {{ $province['name'] }}
                        </h2>
                    </div>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #059669; background: #ecfdf5; padding: 6px 14px; border-radius: 20px; border: 1px solid #a7f3d0;">
                        <i class="bi bi-shield-check"></i> Sertifikasi Kemnaker RI & BNSP
                    </span>
                </div>

                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 24px;">
                    Pilih salah satu topik di bawah ini untuk membuka modul artikel komprehensif 28 bab mengenai regulasi K3, instrumen Full Body Harness EN 361, Lanyard EN 355, 100% Tie-Off, dan izin masuk di Provinsi {{ $province['name'] }}:
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
                        <input type="text" id="articleSearchInput" class="form-control" placeholder="Cari topik modul di Provinsi {{ $province['name'] }} (misal: Gas Detector, Full Body Harness & Lanyard, LOTO, Rescue, Permit)..." style="padding: 11px 16px 11px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.9rem; width: 100%;">
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
                    <!-- Rendered cleanly by JS without DOM bloat -->
                </div>

                <!-- PAGINATION CONTROLS -->
                <div id="paginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                    <!-- Generated by JS -->
                </div>
            </div>

            <!-- KABUPATEN / KOTA DI PROVINSI INI -->
            <div id="kabkot-list" style="margin-top: 48px;">
                <div class="section-header">
                    <span class="section-tag">Direktori Kabupaten & Kota</span>
                    <h2 class="section-title">Pilih Kabupaten / Kota di {{ $province['name'] }}</h2>
                    <p class="section-desc">
                        Tersedia direktori lengkap seluruh {{ $province['total_kabkot'] }} kabupaten dan kota di Provinsi {{ $province['name'] }} hingga ke tingkat kecamatan:
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(230px, 1fr)); gap: 14px;">
                    @foreach($province['kabkot'] as $kk)
                        <a href="{{ route('wilayah.kabkot', [$province['slug'], $kk['slug']]) }}" class="province-chip">
                            <span><i class="bi bi-geo-alt" style="color: #10b981; margin-right: 6px;"></i> {{ $kk['name'] }}</span>
                            <i class="bi bi-chevron-right" style="color: #10b981; font-size: 0.85rem;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 56px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 24px;">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 14px;">
                    <i class="bi bi-map-fill" style="color: #10b981;"></i> Peta Wilayah Provinsi {{ $province['name'] }}
                </h3>
                <div style="height: 320px; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;">
                    <iframe src="{{ $mapsUrl ?? 'https://maps.google.com/maps?q=' . urlencode('Provinsi ' . $province['name'] . ', Indonesia') . '&t=&z=9&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    // RAW ARTICLES DATA (200 ITEMS IN MEMORY VIA JS - 0 LAG)
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
