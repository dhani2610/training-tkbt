<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') | Training TKBT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --bg-sidebar: #0f172a;
            --bg-sidebar-hover: #1e293b;
            --sidebar-width: 260px;
            --primary: #0284c7; /* Dominan Biru Muda Modern */
            --primary-hover: #0369a1;
            --primary-light: #e0f2fe;
            --primary-border: #bae6fd;
            --accent-sky: #38bdf8;
            --accent-cyan: #06b6d4;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --card-bg: #ffffff;
            --body-bg: #f0f9ff; /* Soft Sky Blue Tint */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--body-bg);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--bg-sidebar);
            color: #ffffff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            z-index: 1000;
            transition: all 0.3s ease;
            border-right: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-brand {
            padding: 22px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-brand-icon {
            width: 36px;
            height: 36px;
            background: var(--primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.2rem;
            font-weight: 800;
        }

        .sidebar-brand-text h2 {
            font-size: 0.88rem;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 0.5px;
        }

        .sidebar-brand-text p {
            font-size: 0.65rem;
            color: #94a3b8;
        }

        .sidebar-nav {
            padding: 20px 14px;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 6px;
            flex-grow: 1;
            overflow-y: auto;
        }

        .nav-category {
            font-size: 0.68rem;
            font-weight: 800;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 12px 10px 4px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px;
            color: #94a3b8;
            border-radius: 8px;
            font-size: 0.86rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .sidebar-link i {
            font-size: 1.1rem;
        }

        .sidebar-link:hover {
            color: #ffffff;
            background: var(--bg-sidebar-hover);
        }

        .sidebar-link.active {
            color: #0c192c;
            background: var(--primary);
            font-weight: 700;
        }

        .sidebar-link.active i {
            color: #0c192c;
        }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* MAIN CONTENT */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
            transition: all 0.3s ease;
        }

        .topbar {
            background: #ffffff;
            height: 68px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .btn-sidebar-toggle {
            display: none;
            background: transparent;
            border: none;
            font-size: 1.4rem;
            color: var(--text-dark);
            cursor: pointer;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .btn-view-site {
            font-size: 0.8rem;
            font-weight: 700;
            color: #475569;
            background: #f1f5f9;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-view-site:hover {
            background: #e2e8f0;
            color: #0f172a;
        }

        .admin-user-pill {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #0c192c;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: 800;
        }

        .content-body {
            padding: 30px;
            flex-grow: 1;
        }

        /* CARDS & TABLES */
        .admin-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            margin-bottom: 24px;
        }

        .admin-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .admin-card-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: #0f172a;
        }

        .btn-admin-primary {
            background: #0c192c;
            color: #ffffff;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 9px 16px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-admin-primary:hover {
            background: #1e293b;
            color: #ffffff;
        }

        .btn-admin-gold {
            background: var(--primary);
            color: #0c192c;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 9px 16px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-admin-gold:hover {
            background: var(--primary-hover);
        }

        .btn-admin-danger {
            background: #fee2e2;
            color: #dc2626;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }

        .btn-admin-danger:hover {
            background: #fecaca;
        }

        /* TABLE */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.86rem;
            text-align: left;
        }

        .admin-table th {
            background: #f8fafc;
            color: #64748b;
            font-weight: 700;
            padding: 12px 16px;
            border-bottom: 1px solid var(--border-color);
            text-transform: uppercase;
            font-size: 0.72rem;
            letter-spacing: 0.5px;
        }

        .admin-table td {
            padding: 14px 16px;
            border-bottom: 1px solid #f1f5f9;
            color: #1e293b;
            vertical-align: middle;
        }

        .admin-table tr:hover td {
            background: #fbfcfe;
        }

        .badge-status {
            font-size: 0.72rem;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 20px;
            display: inline-block;
        }

        .badge-active {
            background: #e0f2fe;
            color: #0369a1;
        }

        .badge-inactive {
            background: #f1f5f9;
            color: #64748b;
        }

        /* FORM CONTROLS */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.82rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 0.88rem;
            background: #ffffff;
            color: #0f172a;
            outline: none;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.1);
        }

        .form-hint {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 4px;
            display: block;
        }

        /* FLASH ALERT */
        .alert-success {
            background: #e0f2fe;
            border: 1px solid #bae6fd;
            color: #075985;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* BACKDROP FOR MOBILE */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 999;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .sidebar-overlay.show {
                display: block;
            }
            .main-wrapper {
                margin-left: 0;
                width: 100%;
            }
            .btn-sidebar-toggle {
                display: block;
            }
            .content-body {
                padding: 20px 16px;
            }
            .topbar {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR OVERLAY FOR MOBILE -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <div class="sidebar-brand-icon">
                <i class="bi bi-shield-shaded"></i>
            </div>
            <div class="sidebar-brand-text">
                <h2>TRAINING TKBT K3</h2>
                <p>Panel Manajemen Sistem</p>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="nav-category">Navigasi Utama</li>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-category">Konfigurasi Penting</li>
            <li>
                <a href="{{ route('admin.settings.whatsapp') }}" class="sidebar-link {{ request()->routeIs('admin.settings.whatsapp*') ? 'active' : '' }}">
                    <i class="bi bi-whatsapp"></i>
                    <span>Setting WhatsApp</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.general') }}" class="sidebar-link {{ request()->routeIs('admin.settings.general*') ? 'active' : '' }}">
                    <i class="bi bi-gear-fill"></i>
                    <span>Pengaturan Umum</span>
                </a>
            </li>

            <li class="nav-category">Manajemen Konten (CMS)</li>
            <li>
                <a href="{{ route('admin.programs.index') }}" class="sidebar-link {{ request()->routeIs('admin.programs*') ? 'active' : '' }}">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>CMS Program Pelatihan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.articles.index') }}" class="sidebar-link {{ request()->routeIs('admin.articles*') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    <span>CMS Artikel & Panduan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.faqs.index') }}" class="sidebar-link {{ request()->routeIs('admin.faqs*') ? 'active' : '' }}">
                    <i class="bi bi-question-circle-fill"></i>
                    <span>CMS FAQ</span>
                </a>
            </li>

            <li class="nav-category">Pesan & Permohonan</li>
            <li>
                <a href="{{ route('admin.contacts.index') }}" class="sidebar-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}">
                    <i class="bi bi-inbox-fill"></i>
                    <span>Inquiries / Kontak</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <div style="font-size: 0.75rem; color: #64748b;">
                Admin Terhubung
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" style="background: transparent; border: none; color: #ef4444; font-size: 1.1rem; cursor: pointer;" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main-wrapper">
        <!-- TOPBAR -->
        <header class="topbar">
            <div class="topbar-left">
                <button class="btn-sidebar-toggle" id="btnToggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <div style="font-size: 0.95rem; font-weight: 700; color: #0f172a;">
                    @yield('header_title', 'Panel Kontrol Admin')
                </div>
            </div>

            <div class="topbar-right">
                <a href="{{ route('home') }}" target="_blank" class="btn-view-site">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Lihat Website
                </a>

                <div class="admin-user-pill">
                    <div class="admin-avatar">
                        A
                    </div>
                    <div style="display: none; @media(min-width: 600px){ display:block; }">
                        <div style="font-size: 0.82rem; font-weight: 700; color: #0f172a;">{{ Auth::user()->name ?? 'Administrator' }}</div>
                        <div style="font-size: 0.72rem; color: #64748b;">{{ Auth::user()->email ?? 'admin@fumigasi.com' }}</div>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTENT BODY -->
        <main class="content-body">
            @if(session('success'))
                <div class="alert-success">
                    <i class="bi bi-check-circle-fill"></i>
                    <div>{{ session('success') }}</div>
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    <ul style="margin-left: 20px;">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- SCRIPT FOR RESPONSIVE SIDEBAR -->
    <script>
        const btnToggleSidebar = document.getElementById('btnToggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        if (btnToggleSidebar && sidebar && sidebarOverlay) {
            btnToggleSidebar.addEventListener('click', () => {
                sidebar.classList.toggle('show');
                sidebarOverlay.classList.toggle('show');
            });

            sidebarOverlay.addEventListener('click', () => {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
