@extends('layouts.front')

@section('title', 'Artikel & Panduan Teknis K3 TKBT (Ketinggian) (Bangunan Tinggi / Ketinggian)')
@section('meta_description', 'Kumpulan artikel dan panduan teknis keselamatan kerja ruang terbatas, prosedur entry permit, pengoperasian Full Body Harness EN 361, Lanyard EN 355, 100% Tie-Off, dan evakuasi darurat.')

@section('content')

    <!-- HERO ARTIKEL -->
    <section class="hero-section" style="padding: 50px 0 44px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-book-half"></i>
                Pusat Literasi & Panduan Resmi K3
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Artikel & Panduan Teknis <span>K3 TKBT (Ketinggian)</span>
            </h1>

            <p class="hero-lead" style="max-width: 800px;">
                Materi komprehensif dan panduan resmi mengenai kepatuhan Kepdirjen Binwasnaker No. 113/2006, standar internasional OSHA 1910.146, izin masuk permit, pengoperasian Alat Pelindung Jatuh (PFAS), dan teknik evakuasi darurat.
            </p>

            <!-- Search Form -->
            <form action="{{ route('articles') }}" method="GET" style="max-width: 580px; margin: 0 auto; display: flex; gap: 10px;">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari topik modul pelatihan atau nama daerah..." class="form-control" style="background: rgba(255,255,255,0.95); border: none; padding: 12px 18px; border-radius: 8px; font-size: 0.92rem;">
                <button type="submit" class="btn-primary-green" style="padding: 12px 22px; flex-shrink: 0;">
                    <i class="bi bi-search"></i> Cari
                </button>
            </form>
        </div>
    </section>

    <!-- ARTIKEL LIST -->
    <section class="section-py">
        <div class="container">
            <div class="articles-grid" style="margin-bottom: 40px;">
                @forelse($articles as $art)
                    <div class="article-card">
                        <span class="article-badge">
                            <i class="bi bi-award"></i> {{ $art->category ?? 'K3 Bangunan Tinggi / Ketinggian' }}
                        </span>

                        <h3 class="article-title" style="font-size: 1.1rem;">
                            <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit;">
                                {{ $art->title }}
                            </a>
                        </h3>

                        <p class="article-excerpt">
                            {{ Str::limit($art->excerpt ?? strip_tags($art->content), 150) }}
                        </p>

                        <div class="article-footer">
                            <div><i class="bi bi-person-fill"></i> {{ $art->author ?? 'Instruktur Kemnaker RI' }}</div>
                            <div><i class="bi bi-eye"></i> {{ number_format($art->views_count ?? 300) }} x dibaca</div>
                        </div>

                        <div style="margin-top: 14px; padding-top: 10px; border-top: 1px dashed #e2e8f0; display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 0.74rem; font-weight: 700; color: #059669;">
                                <i class="bi bi-shield-check"></i> Modul Terverifikasi
                            </span>
                            <a href="{{ route('article.detail', $art->slug) }}" style="font-size: 0.82rem; font-weight: 700; color: #10b981; display: flex; align-items: center; gap: 4px;">
                                Baca Selengkapnya <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; color: #64748b;">
                        <i class="bi bi-journal-x" style="font-size: 3rem; color: #cbd5e1; display: block; margin-bottom: 12px;"></i>
                        <p style="font-size: 1.1rem; font-weight: 700;">Tidak ada artikel yang cocok dengan kata kunci pencarian Anda.</p>
                        <a href="{{ route('articles') }}" class="btn-primary-green" style="display: inline-flex; margin-top: 12px;">Lihat Semua Artikel</a>
                    </div>
                @endforelse
            </div>

            <!-- PAGINATION -->
            <div style="display: flex; justify-content: center; margin-bottom: 50px;">
                {{ $articles->links() }}
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-headset" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor Kontak WhatsApp Layanan Konsultasi</h3>
                    <p>Hubungi petugas spesialis kami mengenai jadwal pelatihan terdekat atau sertifikasi resmi:</p>
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

            <!-- DIREKTORI INTERAKTIF 200 ARTIKEL VIA JS -->
            <div id="eksplorasi-200-artikel" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-top: 56px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <span class="section-tag" style="margin-bottom: 6px;">Eksplorasi Cepat via JS (0 Lag)</span>
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin: 0;">
                            Pusat Eksplorasi 200 Artikel Training TKBT Se-Indonesia
                        </h2>
                    </div>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #059669; background: #ecfdf5; padding: 6px 14px; border-radius: 20px; border: 1px solid #a7f3d0;">
                        <i class="bi bi-speedometer2"></i> Akses Instan Tanpa Lag
                    </span>
                </div>

                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 22px;">
                    Pilih provinsi dan kabupaten/kota yang ingin Anda jelajahi di bawah ini. Sistem JavaScript akan langsung menyesuaikan 200 topik artikel panduan untuk wilayah tersebut secara instan:
                </p>

                <!-- Filter Row: Provinsi + Kabkot + Search -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; margin-bottom: 20px;">
                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px; display: block;">Pilih Provinsi:</label>
                        <select id="provSelect" class="form-control" style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                            @foreach($provinces as $p)
                                <option value="{{ $p['slug'] }}" data-name="{{ $p['name'] }}" {{ $loop->first ? 'selected' : '' }}>{{ $p['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px; display: block;">Pilih Kabupaten / Kota:</label>
                        <select id="kabkotSelect" class="form-control" style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                            <!-- Populated dynamically by JS -->
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px; display: block;">Cari Topik Artikel:</label>
                        <input type="text" id="articleLiveSearch" class="form-control" placeholder="Ketik kata kunci (Gas, Full Body Harness & Lanyard, Permit)..." style="padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                    </div>
                </div>

                <!-- Info bar -->
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; font-size: 0.82rem; color: #64748b;">
                    <div id="hubInfoText">Memuat 200 topik artikel...</div>
                    <div id="hubPageBadge" style="font-weight: 700; color: #059669;">Halaman 1</div>
                </div>

                <!-- DYNAMIC CARDS VIA JS -->
                <div id="hubArticlesContainer" style="display: flex; flex-direction: column; gap: 14px; min-height: 200px;">
                    <!-- Rendered by JS -->
                </div>

                <!-- PAGINATION CONTROLS -->
                <div id="hubPaginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                    <!-- Rendered by JS -->
                </div>
            </div>

            <!-- DIREKTORI 38 WILAYAH -->
            <div style="margin-top: 56px;">
                <div class="section-header">
                    <span class="section-tag">200 Artikel per Daerah</span>
                    <h2 class="section-title">Jelajahi 200 Artikel Panduan di 38 Provinsi</h2>
                    <p class="section-desc">
                        Setiap provinsi dan kabupaten/kota memiliki 200 materi kurikulum dan panduan teknis yang siap dibaca:
                    </p>
                </div>

                <div class="provinces-grid">
                    @foreach($provinces as $prov)
                        <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="province-chip">
                            <span>{{ $prov['name'] }}</span>
                            <i class="bi bi-chevron-right" style="color: #10b981;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    const rawProvinces = @json($provinces ?? []);
    const masterTopics = @json($allTopics ?? []);

    const provSelect = document.getElementById('provSelect');
    const kabkotSelect = document.getElementById('kabkotSelect');
    const searchInput = document.getElementById('articleLiveSearch');
    const container = document.getElementById('hubArticlesContainer');
    const paginationNav = document.getElementById('hubPaginationNav');
    const infoText = document.getElementById('hubInfoText');
    const pageBadge = document.getElementById('hubPageBadge');

    let currentProvSlug = provSelect ? provSelect.value : '';
    let currentKabkotSlug = '';
    let currentRegionName = '';
    let filteredTopics = [...masterTopics];
    let currentPage = 1;
    const perPage = 10;

    function populateKabkot() {
        if (!provSelect || !kabkotSelect) return;
        const pSlug = provSelect.value;
        const provData = rawProvinces.find(p => p.slug === pSlug);
        kabkotSelect.innerHTML = '';

        if (provData && provData.kabkot && provData.kabkot.length > 0) {
            provData.kabkot.forEach((kk, idx) => {
                const opt = document.createElement('option');
                opt.value = kk.slug;
                opt.textContent = kk.name;
                if (idx === 0) opt.selected = true;
                kabkotSelect.appendChild(opt);
            });
            currentKabkotSlug = provData.kabkot[0].slug;
            currentRegionName = provData.kabkot[0].name;
        } else {
            const opt = document.createElement('option');
            opt.value = '';
            opt.textContent = provData ? provData.name : 'Wilayah';
            kabkotSelect.appendChild(opt);
            currentKabkotSlug = '';
            currentRegionName = provData ? 'Provinsi ' + provData.name : 'Indonesia';
        }
    }

    function renderPage(page, scrollUp = false) {
        currentPage = page;
        const total = filteredTopics.length;
        const totalPages = Math.ceil(total / perPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * perPage;
        const endIndex = Math.min(startIndex + perPage, total);
        const currentItems = filteredTopics.slice(startIndex, endIndex);

        if (total === 0) {
            infoText.textContent = "Tidak ditemukan topik artikel yang sesuai.";
            pageBadge.textContent = "0 Hasil";
            container.innerHTML = `
                <div style="text-align: center; padding: 48px 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;">
                    <i class="bi bi-search" style="font-size: 2.2rem; color: #94a3b8; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 1rem; font-weight: 700; color: #334155;">Tidak ada modul yang cocok dengan kata kunci</h4>
                </div>
            `;
            paginationNav.innerHTML = '';
            return;
        }

        infoText.innerHTML = `Menampilkan <strong>${startIndex + 1} - ${endIndex}</strong> dari <strong>${total}</strong> modul artikel untuk <strong>${currentRegionName}</strong>`;
        pageBadge.textContent = `Halaman ${currentPage} dari ${totalPages}`;

        let html = '';
        currentItems.forEach(item => {
            const artTitle = item.title.startsWith('Training') ? item.title : `Training TKBT ${item.title}`;
            const fullTitle = `${artTitle} di ${currentRegionName}`;
            const artSlug = (item.slug || ('training-confined-space-' + item.index)) + '-di-' + (currentRegionName.toLowerCase().replace(/[^a-z0-9]+/g, '-'));
            
            // Build dynamic route link
            const linkUrl = currentKabkotSlug 
                ? `/wilayah/${currentProvSlug}/${currentKabkotSlug}/program/training-confined-space-muda/artikel/${artSlug}`
                : `/wilayah/${currentProvSlug}/program/training-confined-space-muda/artikel/${artSlug}`;

            html += `
                <div class="article-topic-item" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; transition: all 0.2s ease;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; font-weight: 800; background: #ecfdf5; color: #059669; padding: 3px 10px; border-radius: 4px; border: 1px solid #a7f3d0;">
                            MODUL ${item.index} DARI 200
                        </span>
                        <span style="font-size: 0.74rem; font-weight: 700; color: #059669; background: #f0fdf4; padding: 2px 8px; border-radius: 4px;">
                            <i class="bi bi-journal-check"></i> Silabus Resmi Kemnaker RI
                        </span>
                    </div>

                    <h4 style="font-size: 1.02rem; font-weight: 800; color: #0f172a; margin-bottom: 8px; line-height: 1.4;">
                        <a href="${linkUrl}" style="color: inherit; text-decoration: none;" onmouseover="this.style.color='#10b981'" onmouseout="this.style.color='#0f172a'">
                            ${fullTitle}
                        </a>
                    </h4>

                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 12px;">
                        ${item.excerpt}
                    </p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px;">
                        <span style="font-size: 0.76rem; color: #94a3b8;">
                            <i class="bi bi-geo-alt"></i> ${currentRegionName}
                        </span>
                        <a href="${linkUrl}" style="font-size: 0.82rem; font-weight: 700; color: #10b981; display: inline-flex; align-items: center; gap: 4px; text-decoration: none;">
                            Baca Modul Lengkap <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            `;
        });
        container.innerHTML = html;

        renderPaginationButtons(totalPages);

        if (scrollUp) {
            const anchor = document.getElementById('eksplorasi-200-artikel');
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
        const prevDisabled = currentPage === 1 ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-hub-ctrl" data-page="${currentPage - 1}" ${prevDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #334155; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
        `;

        const delta = 2;
        const range = [];
        for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
            range.push(i);
        }
        range.unshift(1);
        if (totalPages > 1 && !range.includes(totalPages)) {
            range.push(totalPages);
        }

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
                <button type="button" class="btn-hub-ctrl" data-page="${num}" style="padding: 7px 13px; border-radius: 6px; border: 1px solid; ${activeStyle} font-size: 0.82rem; cursor: pointer;">
                    ${num}
                </button>
            `;
            prevNum = num;
        });

        const nextDisabled = currentPage === totalPages ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-hub-ctrl" data-page="${currentPage + 1}" ${nextDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #334155; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        `;

        paginationNav.innerHTML = navHtml;

        paginationNav.querySelectorAll('.btn-hub-ctrl').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const p = parseInt(this.getAttribute('data-page'));
                if (!isNaN(p)) renderPage(p, true);
            });
        });
    }

    // Events
    if (provSelect) {
        provSelect.addEventListener('change', function() {
            currentProvSlug = this.value;
            populateKabkot();
            renderPage(1, false);
        });
    }

    if (kabkotSelect) {
        kabkotSelect.addEventListener('change', function() {
            currentKabkotSlug = this.value;
            currentRegionName = this.options[this.selectedIndex].text;
            renderPage(1, false);
        });
    }

    let searchTimer = null;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => {
                const q = searchInput.value.toLowerCase().trim();
                if (!q) {
                    filteredTopics = [...masterTopics];
                } else {
                    filteredTopics = masterTopics.filter(t => {
                        return t.title.toLowerCase().includes(q) || 
                               t.excerpt.toLowerCase().includes(q) ||
                               ("modul " + t.index).includes(q);
                    });
                }
                renderPage(1, false);
            }, 120);
        });
    }

    // Initialize
    populateKabkot();
    renderPage(1, false);
})();
</script>
@endpush
