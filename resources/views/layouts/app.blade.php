<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Manajemen Aset' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f6fa;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background: #1e293b;
            color: white;
            padding: 20px 15px;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 10px 25px;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            background: #3b82f6;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .brand-text {
            font-size: 17px;
            font-weight: bold;
            margin: 0;
        }

        .brand-subtitle {
            display: block;
            color: #94a3b8;
            font-size: 11px;
            margin-top: 3px;
        }

        .menu-title {
            color: #64748b;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            padding: 0 12px;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px 14px;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.2s;
        }

        .sidebar-menu a:hover {
            background: #334155;
            color: white;
        }

        .sidebar-menu a.active {
            background: #3b82f6;
            color: white;
            font-weight: 600;
        }

        .menu-icon {
            width: 20px;
            text-align: center;
        }

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            height: 70px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .page-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #475569;
            font-size: 14px;
        }

        .user-icon {
            width: 38px;
            height: 38px;
            background: #e2e8f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #475569;
        }

        .content {
            padding: 30px;
        }

        footer {
            padding: 20px 30px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 15px 10px;
            }

            .brand {
                justify-content: center;
                padding: 10px 0 20px;
            }

            .brand-text,
            .brand-subtitle,
            .menu-title {
                display: none;
            }

            .sidebar-menu a {
                justify-content: center;
                padding: 13px 10px;
            }

            .sidebar-menu a span {
                display: none;
            }

            .main {
                margin-left: 70px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">
                <i class="fas fa-boxes-stacked"></i>
            </div>

            <div>
                <p class="brand-text">Manajemen Aset</p>
                <span class="brand-subtitle">Asset Management</span>
            </div>
        </div>

        <div class="menu-title">
            Menu Utama
        </div>

        <ul class="sidebar-menu">

            <li>
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('aset.index') }}"
                    class="{{ request()->routeIs('aset.*') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="fas fa-box"></i>
                    </span>
                    <span>Aset</span>
                </a>
            </li>

            <li>
                <a href="{{ route('kategori.index') }}"
                    class="{{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="fas fa-tags"></i>
                    </span>
                    <span>Kategori</span>
                </a>
            </li>

            <li>
                <a href="{{ route('ruangan.index') }}"
                    class="{{ request()->routeIs('ruangan.*') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="fas fa-door-open"></i>
                    </span>
                    <span>Ruangan</span>
                </a>
            </li>

        </ul>

    </aside>

    <div class="main">

        <div class="topbar">

            <div class="page-title">
                @yield('title', 'Dashboard')
            </div>

            <div class="user">
                <div class="user-icon">
                    <i class="fas fa-user"></i>
                </div>

                <span>Admin</span>
            </div>

        </div>

        <main class="content">

            @yield('content')

        </main>

        <footer>
            &copy; {{ date('Y') }} Manajemen Aset
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>