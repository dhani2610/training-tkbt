<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Training TKBT (Tenaga Kerja Bangunan Tinggi) | Sertifikasi Kemnaker RI & BNSP')</title>
    <meta name="description" content="@yield('meta_description', 'Pusat pembinaan, bimbingan teknis, dan sertifikasi resmi K3 TKBT (Ruang Terbatas) Muda, Madya, Utama, dan Penyelamat (Rescue) standar Kemnaker RI dan BNSP.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary-green: #10b981;
            --primary-green-dark: #059669;
            --primary-green-light: #ecfdf5;
            --primary-green-subtle: #d1fae5;
            --primary-emerald-deep: #064e3b;
            --bg-dark: #06241b;
            --bg-dark-card: #0c3327;
            --bg-dark-hover: #124434;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --text-light: #94a3b8;
            --accent-mint: #34d399;
            --accent-amber: #f59e0b;
            --wa-green: #25d366;
            --wa-green-hover: #20ba5a;
            --border-dark: rgba(255, 255, 255, 0.1);
            --border-light: #e2e8f0;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.08), 0 2px 4px -2px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 28px -6px rgba(16, 185, 129, 0.18);
            --radius-md: 8px;
            --radius-lg: 12px;
            --radius-xl: 18px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            background-color: #ffffff;
            color: var(--text-dark);
            line-height: 1.6;
            min-height: 100vh;
            position: relative;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
        }

        /* SVG & PAGINATION SAFETY */
        svg {
            max-width: 100%;
        }

        nav[role="navigation"] svg {
            width: 18px !important;
            height: 18px !important;
            max-width: 18px !important;
            max-height: 18px !important;
            display: inline-block !important;
            vertical-align: middle !important;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER / NAVBAR (MODERN CLEAN WHITE & GLASS) */
        .site-header {
            background: rgba(255, 255, 255, 0.98);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #e2e8f0;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
        }

        .brand-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.18rem;
            box-shadow: 0 3px 10px rgba(16, 185, 129, 0.28);
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .brand-logo:hover .brand-icon {
            transform: scale(1.05);
            box-shadow: 0 5px 14px rgba(16, 185, 129, 0.38);
        }

        .brand-text h1 {
            font-size: 0.95rem;
            font-weight: 800;
            letter-spacing: -0.2px;
            color: #0f172a;
            line-height: 1;
            margin: 0;
            white-space: nowrap;
        }

        .brand-text h1 span {
            color: #059669;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 2px;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            color: #334155;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 7px 12px;
            border-radius: 7px;
            position: relative;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            display: inline-block;
            white-space: nowrap;
        }

        .nav-link:hover {
            color: #059669;
            background: #ecfdf5;
        }

        .nav-link.active {
            color: #059669;
            background: #ecfdf5;
            font-weight: 700;
        }

        .btn-wa-header {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: #ffffff;
            font-size: 0.82rem;
            font-weight: 700;
            padding: 7px 16px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            box-shadow: 0 3px 10px rgba(16, 185, 129, 0.25);
            transition: all 0.25s ease;
            text-decoration: none;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .btn-wa-header:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            transform: translateY(-1px);
            color: #ffffff;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.35);
        }

        .btn-wa-header i {
            font-size: 0.98rem;
        }

        .mobile-toggle {
            display: none;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            color: #0f172a;
            font-size: 1.4rem;
            cursor: pointer;
            width: 42px;
            height: 42px;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .mobile-toggle:hover {
            background: #e2e8f0;
        }

        /* MOBILE DRAWER */
        .mobile-drawer {
            position: fixed;
            top: 74px;
            left: 0;
            width: 100%;
            background: #ffffff;
            border-bottom: 2px solid #e2e8f0;
            padding: 20px;
            display: none;
            flex-direction: column;
            gap: 8px;
            z-index: 999;
            box-shadow: 0 12px 24px rgba(15, 23, 42, 0.12);
        }

        .mobile-drawer.open {
            display: flex;
        }

        .mobile-nav-link {
            color: #1e293b;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 10px 14px;
            border-radius: 8px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .mobile-nav-link:hover {
            background: #ecfdf5;
            color: #059669;
        }

        /* HERO DARK SECTION */
        .hero-section {
            background-color: var(--bg-dark);
            background-image: 
                radial-gradient(circle at 85% 15%, rgba(16, 185, 129, 0.22) 0%, transparent 45%),
                radial-gradient(circle at 15% 85%, rgba(5, 150, 105, 0.18) 0%, transparent 45%),
                linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 32px 32px, 32px 32px;
            color: #ffffff;
            padding: 72px 0 64px;
            text-align: center;
            position: relative;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.4);
            color: var(--accent-mint);
            font-size: 0.78rem;
            font-weight: 700;
            padding: 6px 18px;
            border-radius: 30px;
            margin-bottom: 22px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.22;
            margin-bottom: 18px;
            max-width: 920px;
            margin-left: auto;
            margin-right: auto;
            letter-spacing: -0.5px;
        }

        .hero-title span {
            background: linear-gradient(135deg, #a7f3d0 0%, #34d399 50%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-lead {
            font-size: 1.08rem;
            color: #cbd5e1;
            max-width: 820px;
            margin: 0 auto 32px;
            line-height: 1.7;
        }

        .hero-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }

        .btn-primary-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 700;
            padding: 13px 26px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 16px rgba(16, 185, 129, 0.4);
            transition: all 0.25s ease;
        }

        .btn-primary-green:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(16, 185, 129, 0.55);
            color: #ffffff;
        }

        .btn-outline-white {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 700;
            padding: 13px 26px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s ease;
        }

        .btn-outline-white:hover {
            background: rgba(255, 255, 255, 0.16);
            color: #ffffff;
        }

        /* STATS BAR */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(12, 51, 39, 0.7);
            border: 1px solid rgba(16, 185, 129, 0.25);
            border-radius: var(--radius-xl);
            padding: 24px;
            backdrop-filter: blur(8px);
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--accent-mint);
            line-height: 1.1;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 0.78rem;
            color: #cbd5e1;
            font-weight: 500;
        }

        /* NOTICE STRIP (MODERN EMERALD ACCENT TOP) */
        .notice-bar {
            background: linear-gradient(90deg, #064e3b 0%, #047857 50%, #064e3b 100%);
            border-bottom: 1px solid rgba(16, 185, 129, 0.25);
            padding: 8px 20px;
            font-size: 0.78rem;
            color: #f0fdf4;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            letter-spacing: 0.2px;
        }

        .notice-pill {
            background: rgba(16, 185, 129, 0.25);
            border: 1px solid rgba(52, 211, 153, 0.35);
            color: #6ee7b7;
            font-size: 0.68rem;
            font-weight: 800;
            padding: 2px 8px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* SECTION COMMON */
        .section-py {
            padding: 72px 0;
        }

        .section-bg-light {
            background-color: #f8fafc;
        }

        .section-header {
            text-align: center;
            max-width: 720px;
            margin: 0 auto 48px;
        }

        .section-tag {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-green-dark);
            background: var(--primary-green-light);
            padding: 5px 14px;
            border-radius: 30px;
            margin-bottom: 12px;
            border: 1px solid var(--primary-green-subtle);
        }

        .section-title {
            font-size: 2.15rem;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1.25;
            margin-bottom: 14px;
            letter-spacing: -0.5px;
        }

        .section-desc {
            font-size: 0.98rem;
            color: var(--text-muted);
            line-height: 1.65;
        }

        /* 4 PROGRAMS GRID */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 24px;
        }

        .program-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: var(--radius-xl);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            position: relative;
        }

        .program-card:hover {
            transform: translateY(-5px);
            border-color: #a7f3d0;
            box-shadow: 0 16px 32px -8px rgba(16, 185, 129, 0.22);
        }

        .program-img-wrapper {
            position: relative;
            height: 190px;
            overflow: hidden;
            background: #0f172a;
        }

        .program-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .program-card:hover .program-img {
            transform: scale(1.06);
        }

        .program-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(6, 78, 59, 0.9);
            color: #a7f3d0;
            font-size: 0.72rem;
            font-weight: 800;
            padding: 5px 12px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(16, 185, 129, 0.4);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .program-body {
            padding: 22px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .program-level {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--primary-green-dark);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .program-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1.35;
            margin-bottom: 12px;
        }

        .program-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 18px;
            flex-grow: 1;
        }

        .program-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
            font-size: 0.78rem;
            color: #64748b;
            margin-bottom: 18px;
        }

        .program-footer-btn {
            display: flex;
            gap: 10px;
        }

        .btn-card-detail {
            flex: 1;
            background: #f1f5f9;
            color: #334155;
            text-align: center;
            padding: 9px 12px;
            border-radius: 8px;
            font-size: 0.82rem;
            font-weight: 700;
            transition: all 0.2s ease;
        }

        .btn-card-detail:hover {
            background: #e2e8f0;
            color: #0f172a;
        }

        .btn-card-wa {
            background: #ecfdf5;
            color: #059669;
            border: 1px solid #a7f3d0;
            text-align: center;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 0.82rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            transition: all 0.2s ease;
        }

        .btn-card-wa:hover {
            background: #10b981;
            color: #ffffff;
            border-color: #10b981;
        }

        /* 4 WHATSAPP HOTLINES CARDS */
        .wa-hotlines-box {
            background: linear-gradient(135deg, #06241b 0%, #0c3327 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: var(--radius-xl);
            padding: 32px 28px;
            color: #ffffff;
            margin: 40px 0;
            box-shadow: 0 12px 30px rgba(6, 36, 27, 0.35);
        }

        .wa-hotlines-header {
            text-align: center;
            margin-bottom: 26px;
        }

        .wa-hotlines-header h3 {
            font-size: 1.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 6px;
        }

        .wa-hotlines-header p {
            font-size: 0.88rem;
            color: #a7f3d0;
        }

        .wa-hotlines-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
        }

        .wa-hotline-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 18px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
            text-decoration: none;
            color: inherit;
        }

        .wa-hotline-card:hover {
            background: rgba(16, 185, 129, 0.18);
            border-color: var(--accent-mint);
            transform: translateY(-3px);
            color: inherit;
        }

        .wa-hotline-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .wa-hotline-icon {
            width: 38px;
            height: 38px;
            background: var(--primary-green);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.15rem;
        }

        .wa-hotline-badge {
            font-size: 0.68rem;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 12px;
            background: rgba(52, 211, 153, 0.2);
            color: #6ee7b7;
            border: 1px solid rgba(52, 211, 153, 0.3);
        }

        .wa-hotline-title {
            font-size: 0.86rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .wa-hotline-desc {
            font-size: 0.75rem;
            color: #94a3b8;
            margin-bottom: 12px;
            line-height: 1.4;
            flex-grow: 1;
        }

        .wa-hotline-phone {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--accent-mint);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* 3 ARTICLES / REGIONAL DIRECTORY */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }

        .article-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: var(--radius-lg);
            padding: 24px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }

        .article-card:hover {
            border-color: #10b981;
            box-shadow: 0 10px 24px rgba(16, 185, 129, 0.12);
            transform: translateY(-3px);
        }

        .article-badge {
            align-self: flex-start;
            background: #ecfdf5;
            color: #059669;
            font-size: 0.72rem;
            font-weight: 800;
            padding: 4px 10px;
            border-radius: 6px;
            margin-bottom: 12px;
            text-transform: uppercase;
        }

        .article-title {
            font-size: 1.05rem;
            font-weight: 800;
            line-height: 1.4;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .article-excerpt {
            font-size: 0.84rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 16px;
            flex-grow: 1;
        }

        .article-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.76rem;
            color: #94a3b8;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
        }

        /* 38 PROVINCES DIRECTORY */
        .provinces-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 12px;
        }

        .province-chip {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.84rem;
            font-weight: 600;
            color: #334155;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
        }

        .province-chip:hover {
            background: #ecfdf5;
            border-color: #10b981;
            color: #065f46;
            transform: translateX(3px);
        }

        /* ACCORDION FAQ */
        .faq-list {
            max-width: 840px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .faq-item.active {
            border-color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.08);
        }

        .faq-question {
            padding: 18px 20px;
            font-size: 0.95rem;
            font-weight: 700;
            color: #1e293b;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .faq-item.active .faq-question {
            color: #065f46;
        }

        .faq-answer {
            padding: 0 20px 20px;
            font-size: 0.88rem;
            color: #475569;
            line-height: 1.7;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        /* SITE FOOTER */
        .site-footer {
            background: var(--bg-dark);
            color: #e2e8f0;
            padding: 64px 0 28px;
            border-top: 1px solid rgba(16, 185, 129, 0.2);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 48px;
        }

        .footer-col h4 {
            font-size: 0.92rem;
            font-weight: 800;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 18px;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 28px;
            height: 2px;
            background: var(--accent-mint);
        }

        .footer-desc {
            font-size: 0.84rem;
            color: #94a3b8;
            line-height: 1.65;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links a {
            font-size: 0.84rem;
            color: #cbd5e1;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--accent-mint);
            padding-left: 4px;
        }

        .footer-bottom {
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.78rem;
            color: #64748b;
            flex-wrap: wrap;
            gap: 14px;
        }

        /* RESPONSIVE CONTENT & SIDEBAR GRID */
        .content-sidebar-grid {
            display: grid;
            grid-template-columns: 2.2fr 1fr;
            gap: 36px;
            align-items: start;
        }

        .contact-layout-grid {
            display: grid;
            grid-template-columns: 1fr 1.6fr;
            gap: 40px;
        }

        .form-row-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        /* MODERN FORM CONTROLS */
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.86rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .form-label i {
            color: #10b981;
            font-size: 0.95rem;
        }

        .form-label span.req {
            color: #ef4444;
            font-weight: 800;
        }

        .form-control {
            width: 100% !important;
            padding: 12px 16px !important;
            font-size: 0.92rem !important;
            font-family: inherit !important;
            color: #0f172a !important;
            background: #f8fafc !important;
            border: 1.5px solid #cbd5e1 !important;
            border-radius: 10px !important;
            transition: all 0.2s ease !important;
            outline: none !important;
            box-sizing: border-box !important;
        }

        .form-control:focus {
            background: #ffffff !important;
            border-color: #10b981 !important;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.15) !important;
        }

        .form-control::placeholder {
            color: #94a3b8;
            font-size: 0.88rem;
        }

        textarea.form-control {
            resize: vertical !important;
            min-height: 120px !important;
            line-height: 1.6 !important;
        }

        select.form-control {
            appearance: none !important;
            -webkit-appearance: none !important;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23059669' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 14px center !important;
            background-size: 14px 10px !important;
            padding-right: 40px !important;
            cursor: pointer !important;
        }

        .article-content-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: var(--radius-xl);
            padding: 36px;
            line-height: 1.85;
            font-size: 0.96rem;
            color: #334155;
            box-shadow: 0 4px 16px rgba(0,0,0,0.03);
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        
        /* MULTI-AGENT FLOATING WHATSAPP POPUP */
        .wa-widget-container {
            position: fixed !important;
            bottom: 24px !important;
            right: 20px !important;
            z-index: 9999999 !important;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 12px;
        }

        .wa-popup-modal {
            width: 360px;
            max-width: calc(100vw - 32px);
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 16px 40px -6px rgba(15, 23, 42, 0.25), 0 0 0 1px rgba(16, 185, 129, 0.15);
            overflow: hidden;
            display: none;
            opacity: 0;
            transform: scale(0.92) translateY(12px);
            transform-origin: bottom right;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .wa-popup-modal.show {
            display: block;
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        .wa-popup-header {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            color: #ffffff;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        .wa-header-avatar {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            position: relative;
            flex-shrink: 0;
        }

        .online-indicator {
            position: absolute;
            bottom: 1px;
            right: 1px;
            width: 10px;
            height: 10px;
            background: #22c55e;
            border: 2px solid #ffffff;
            border-radius: 50%;
        }

        .wa-header-info {
            flex-grow: 1;
        }

        .wa-header-title {
            font-size: 0.96rem;
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
        }

        .wa-header-subtitle {
            font-size: 0.76rem;
            color: #d1fae5;
            margin-top: 2px;
        }

        .wa-close-btn {
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 1.4rem;
            cursor: pointer;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .wa-close-btn:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .wa-popup-body {
            padding: 14px 16px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-height: 420px;
            overflow-y: auto;
            background: #f8fafc;
        }

        .wa-chat-intro {
            font-size: 0.8rem;
            color: #64748b;
            line-height: 1.4;
            padding: 2px 4px 6px;
        }

        .wa-contact-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 11px 13px;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .wa-contact-card:hover {
            border-color: #10b981;
            background: #ecfdf5;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.12);
        }

        .wa-primary-card {
            background: #f0fdf4;
            border-color: #86efac;
        }

        .wa-contact-avatar {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f1f5f9;
            color: #059669;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            flex-shrink: 0;
        }

        .wa-primary-card .wa-contact-avatar {
            background: #10b981;
            color: #ffffff;
        }

        .wa-contact-details {
            flex-grow: 1;
            min-width: 0;
        }

        .wa-contact-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 6px;
            margin-bottom: 2px;
        }

        .wa-contact-name {
            font-size: 0.88rem;
            font-weight: 800;
            color: #0f172a;
        }

        .wa-contact-badge {
            font-size: 0.68rem;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 50px;
            background: #e2e8f0;
            color: #475569;
            white-space: nowrap;
        }

        .badge-primary-pulse {
            background: #10b981;
            color: #ffffff;
            box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
        }

        .wa-contact-desc {
            font-size: 0.74rem;
            color: #64748b;
            line-height: 1.3;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .wa-icon-direct {
            font-size: 1.25rem;
            color: #25d366;
            flex-shrink: 0;
        }

        .wa-popup-footer {
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 9px 14px;
            font-size: 0.72rem;
            color: #64748b;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wa-floating-btn {
            width: 58px !important;
            height: 58px !important;
            background: #25d366 !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.85rem !important;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.45) !important;
            cursor: pointer !important;
            position: relative !important;
            transition: all 0.3s ease;
            outline: none !important;
        }

        .wa-floating-btn:hover {
            transform: scale(1.08) translateY(-2px);
            background: #20ba5a !important;
            box-shadow: 0 10px 28px rgba(37, 211, 102, 0.6) !important;
        }

        @media (max-width: 640px) {
            .wa-widget-container {
                bottom: 18px !important;
                right: 16px !important;
            }
            .wa-popup-modal {
                width: calc(100vw - 32px);
                max-width: 360px;
            }
            .wa-floating-btn {
                width: 52px !important;
                height: 52px !important;
                font-size: 1.6rem !important;
            }
        }

        /* FLOATING WHATSAPP BUTTON (081399810272) */
        .wa-floating-btn {
            position: fixed !important;
            bottom: 24px !important;
            right: 20px !important;
            width: 58px !important;
            height: 58px !important;
            background: #25d366 !important;
            color: #ffffff !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.85rem !important;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.5) !important;
            z-index: 9999999 !important;
            transition: all 0.3s ease;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
            pointer-events: auto !important;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }

        .wa-floating-btn:hover {
            transform: scale(1.08) translateY(-2px);
            background: #20ba5a;
            color: #ffffff !important;
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
        }

        .wa-pulse {
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: rgba(37, 211, 102, 0.45);
            animation: pulse-wave 2s infinite ease-out;
            pointer-events: none;
        }

        @keyframes pulse-wave {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.55); opacity: 0; }
        }

        @media (max-width: 992px) {
            .nav-menu, .btn-wa-header {
                display: none;
            }
            .mobile-toggle {
                display: flex;
            }
            .content-sidebar-grid {
                grid-template-columns: 1fr;
                gap: 28px;
            }
            .contact-layout-grid {
                grid-template-columns: 1fr;
                gap: 28px;
            }
            .hero-title {
                font-size: 2rem;
            }
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 640px) {
            .container {
                padding: 0 16px;
            }
            .navbar {
                height: 58px;
            }
            .brand-logo {
                gap: 8px;
            }
            .brand-icon {
                width: 32px;
                height: 32px;
                font-size: 1.05rem;
                border-radius: 8px;
            }
            .brand-text h1 {
                font-size: 0.84rem;
            }
            .mobile-toggle {
                width: 36px;
                height: 36px;
                font-size: 1.25rem;
            }
            .article-content-card {
                padding: 20px 16px;
                border-radius: 14px;
            }
            .form-row-two-col {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            .hero-section {
                padding: 48px 0 40px;
            }
            .hero-title {
                font-size: 1.55rem;
                line-height: 1.25;
            }
            .hero-stats {
                grid-template-columns: 1fr;
                padding: 16px;
                gap: 14px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            .wa-floating-btn {
                bottom: 20px !important;
                right: 18px !important;
                width: 54px !important;
                height: 54px !important;
                font-size: 1.6rem !important;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- SITE HEADER (SINGLE ROW) -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="brand-logo">
                    <div class="brand-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="brand-text">
                        <h1>TRAINING <span>TKBT</span></h1>
                    </div>
                </a>

                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a></li>
                    <li><a href="{{ route('programs') }}" class="nav-link {{ request()->routeIs('programs*') ? 'active' : '' }}">Program</a></li>
                    <li><a href="{{ route('articles') }}" class="nav-link {{ request()->routeIs('articles*') ? 'active' : '' }}">Artikel</a></li>
                    <li><a href="{{ route('home') }}#wilayah" class="nav-link">Wilayah</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">Kontak</a></li>
                </ul>

                <a href="{{ $waLink ?? 'https://api.whatsapp.com/send?phone=6281399810272&text=' . urlencode('Halo Admin Training TKBT, saya ingin konsultasi pendaftaran pelatihan.') }}" target="_blank" class="btn-wa-header">
                    <i class="bi bi-whatsapp"></i>
                    <span>0813-9981-0272</span>
                </a>

                <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu">
                    <i class="bi bi-list"></i>
                </button>
            </nav>
        </div>

        <!-- Mobile Drawer -->
        <div class="mobile-drawer" id="mobileDrawer">
            <a href="{{ route('home') }}" class="mobile-nav-link">Beranda <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('about') }}" class="mobile-nav-link">Tentang Kami <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('programs') }}" class="mobile-nav-link">Program Pelatihan <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('articles') }}" class="mobile-nav-link">Artikel Daerah <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('home') }}#wilayah" class="mobile-nav-link">Wilayah Pelatihan <i class="bi bi-chevron-right"></i></a>
            <a href="{{ route('contact') }}" class="mobile-nav-link">Kontak Kami <i class="bi bi-chevron-right"></i></a>
            <a href="{{ $waLink ?? 'https://api.whatsapp.com/send?phone=6281399810272' }}" target="_blank" class="btn-primary-green" style="justify-content: center; margin-top: 8px;">
                <i class="bi bi-whatsapp"></i> Chat WA: 0813-9981-0272
            </a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="brand-logo" style="margin-bottom: 14px;">
                        <div class="brand-icon">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <div class="brand-text">
                            <h3 style="font-size: 0.98rem; font-weight: 800; color: #fff;">TRAINING <span style="color: var(--accent-mint);">TKBT INDONESIA</span></h3>
                        </div>
                    </div>
                    <p class="footer-desc">
                        Lembaga resmi informasi, bimbingan teknis, dan sertifikasi keselamatan kerja K3 Ruang Terbatas (TKBT) berstandar Kemnaker RI, BNSP, dan internasional OSHA 1910.146.
                    </p>
                    <div style="margin-bottom: 16px;">
                        <span style="font-size: 0.76rem; color: #6ee7b7; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 6px;">Hotline Utama Layanan:</span>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" style="color: #ffffff; font-weight: 800; font-size: 1.1rem; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> 0813-9981-0272
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Program Resmi</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('program.detail', 'training-confined-space-muda') }}">Training TKBT Muda</a></li>
                        <li><a href="{{ route('program.detail', 'training-confined-space-madya') }}">Training TKBT Madya</a></li>
                        <li><a href="{{ route('program.detail', 'training-confined-space-utama') }}">Training TKBT Utama</a></li>
                        <li><a href="{{ route('program.detail', 'training-penyelamat-rescue-confined-space') }}">Training Penyelamat (Rescue)</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Navigasi & Panduan</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}">Tentang Kami & Legalitas</a></li>
                        <li><a href="{{ route('articles') }}">200 Artikel Panduan Daerah</a></li>
                        <li><a href="{{ route('home') }}#wilayah">Direktori 38 Provinsi</a></li>
                        <li><a href="{{ route('contact') }}">Konsultasi & Pendaftaran</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>4 Kontak WhatsApp Resmi</h4>
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.82rem;">
                        <a href="https://api.whatsapp.com/send?phone=628118500177" target="_blank" style="color: #cbd5e1; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #34d399;"></i> <strong>CS 1 (Jadwal):</strong> 0811-8500-177
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272" target="_blank" style="color: #cbd5e1; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #34d399;"></i> <strong>Hotline Utama:</strong> 0813-9981-0272
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6287894580806" target="_blank" style="color: #cbd5e1; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #34d399;"></i> <strong>Silabus Teknis:</strong> 0878-9458-0806
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=6287894580649" target="_blank" style="color: #cbd5e1; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #34d399;"></i> <strong>In-House B2B:</strong> 0878-9458-0649
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; {{ date('Y') }} Training TKBT Indonesia. Seluruh hak cipta dilindungi.
                </div>
                <div>
                    Standar Permenaker No. 9 Tahun 2016 & SKKNI K3 Ruang Terbatas
                </div>
            </div>
        </div>
    </footer>

        <!-- MULTI-AGENT FLOATING WHATSAPP POPUP -->
    <div class="wa-widget-container" id="waWidget">
        <div class="wa-popup-modal" id="waPopup">
            <div class="wa-popup-header">
                <div class="wa-header-avatar">
                    <i class="bi bi-headset"></i>
                    <span class="online-indicator"></span>
                </div>
                <div class="wa-header-info">
                    <div class="wa-header-title">Customer Care K3 TKBT</div>
                    <div class="wa-header-subtitle">Siap melayani konsultasi & pendaftaran 24/7</div>
                </div>
                <button type="button" class="wa-close-btn" id="waCloseBtn" aria-label="Tutup"><i class="bi bi-x-lg"></i></button>
            </div>
            
            <div class="wa-popup-body">
                <div class="wa-chat-intro">
                    Halo! Silakan pilih nomor layanan resmi Training TKBT (Kemnaker RI & BNSP):
                </div>
                
                <!-- Card CS Utama (081399810272) -->
                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Utama Training TKBT, saya ingin konsultasi pendaftaran resmi dan sertifikasi Lisensi Kemnaker RI.') }}" target="_blank" class="wa-contact-card wa-primary-card">
                    <div class="wa-contact-avatar">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="wa-contact-details">
                        <div class="wa-contact-top">
                            <span class="wa-contact-name">0813-9981-0272</span>
                            <span class="wa-contact-badge badge-primary-pulse">Hotline Utama</span>
                        </div>
                        <div class="wa-contact-desc">Pendaftaran Resmi & Lisensi Kemnaker RI</div>
                    </div>
                    <i class="bi bi-whatsapp wa-icon-direct"></i>
                </a>

                <!-- Card CS 1 (08118500177) -->
                <a href="https://api.whatsapp.com/send?phone=628118500177&text={{ urlencode('Halo CS 1 Training TKBT, saya ingin menanyakan jadwal batch terdekat dan kuota kelas.') }}" target="_blank" class="wa-contact-card">
                    <div class="wa-contact-avatar">
                        <i class="bi bi-calendar2-check"></i>
                    </div>
                    <div class="wa-contact-details">
                        <div class="wa-contact-top">
                            <span class="wa-contact-name">0811-8500-177</span>
                            <span class="wa-contact-badge">Jadwal & Kuota</span>
                        </div>
                        <div class="wa-contact-desc">Informasi Batch & Pelaksanaan Kelas</div>
                    </div>
                    <i class="bi bi-whatsapp wa-icon-direct"></i>
                </a>

                <!-- Card CS 2 (087894580806) -->
                <a href="https://api.whatsapp.com/send?phone=6287894580806&text={{ urlencode('Halo Konsultan Teknis Training TKBT, saya ingin konsultasi silabus teknis dan materi APD Ketinggian.') }}" target="_blank" class="wa-contact-card">
                    <div class="wa-contact-avatar">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="wa-contact-details">
                        <div class="wa-contact-top">
                            <span class="wa-contact-name">0878-9458-0806</span>
                            <span class="wa-contact-badge">Silabus Teknis</span>
                        </div>
                        <div class="wa-contact-desc">Konsultasi Materi, Modul & Uji Simulator</div>
                    </div>
                    <i class="bi bi-whatsapp wa-icon-direct"></i>
                </a>

                <!-- Card CS 3 (087894580649) -->
                <a href="https://api.whatsapp.com/send?phone=6287894580649&text={{ urlencode('Halo Divisi B2B Training TKBT, kami ingin mengajukan penawaran In-House Training Perusahaan.') }}" target="_blank" class="wa-contact-card">
                    <div class="wa-contact-avatar">
                        <i class="bi bi-building-gear"></i>
                    </div>
                    <div class="wa-contact-details">
                        <div class="wa-contact-top">
                            <span class="wa-contact-name">0878-9458-0649</span>
                            <span class="wa-contact-badge">In-House B2B</span>
                        </div>
                        <div class="wa-contact-desc">Kerjasama Perusahaan, Kontraktor & Tender</div>
                    </div>
                    <i class="bi bi-whatsapp wa-icon-direct"></i>
                </a>
            </div>
            
            <div class="wa-popup-footer">
                <i class="bi bi-shield-check text-success me-1"></i> Layanan Resmi Terverifikasi Kemnaker RI & BNSP
            </div>
        </div>

        <button type="button" class="wa-floating-btn" id="waToggleBtn" aria-label="Buka WhatsApp Chat" title="Konsultasi WhatsApp">
            <span class="wa-pulse"></span>
            <i class="bi bi-whatsapp" id="waBtnIcon"></i>
        </button>
    </div>


    <!-- SCRIPTS -->
    <script>
        // WhatsApp Widget Toggle
        const waToggleBtn = document.getElementById('waToggleBtn');
        const waPopup = document.getElementById('waPopup');
        const waCloseBtn = document.getElementById('waCloseBtn');
        const waBtnIcon = document.getElementById('waBtnIcon');

        if (waToggleBtn && waPopup) {
            waToggleBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                waPopup.classList.toggle('show');
                if (waPopup.classList.contains('show')) {
                    waBtnIcon.className = 'bi bi-x-lg';
                } else {
                    waBtnIcon.className = 'bi bi-whatsapp';
                }
            });

            if (waCloseBtn) {
                waCloseBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    waPopup.classList.remove('show');
                    waBtnIcon.className = 'bi bi-whatsapp';
                });
            }

            // Close on click outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('#waWidget')) {
                    waPopup.classList.remove('show');
                    if (waBtnIcon) waBtnIcon.className = 'bi bi-whatsapp';
                }
            });
        }

        // Mobile Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileDrawer = document.getElementById('mobileDrawer');
        if (mobileToggle && mobileDrawer) {
            mobileToggle.addEventListener('click', () => {
                mobileDrawer.classList.toggle('open');
            });
            mobileDrawer.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileDrawer.classList.remove('open');
                });
            });
        }

        // Accordion helper
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
