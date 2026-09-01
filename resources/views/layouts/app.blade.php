<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Manajemen Aset' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .content {
            padding: 30px 0;
        }

        .navbar-brand {
            font-weight: bold;
        }

        footer {
            margin-top: 40px;
            padding: 20px 0;
            text-align: center;
            color: #666;
        }
    </style>

    @stack('styles')

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-boxes-stacked"></i>
            Manajemen Aset
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>

                <!-- Kategori -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategori.index') }}">
                        <i class="fas fa-tags"></i>
                        Kategori
                    </a>
                </li>

                <!-- Ruangan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ruangan.index') }}">
                        <i class="fas fa-door-open"></i>
                        Ruangan
                    </a>
                </li>

                <!-- Aset -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aset.index') }}">
                        <i class="fas fa-box"></i>
                        Aset
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<main class="content">

    <div class="container">

        @yield('content')

    </div>

</main>

<footer>

    <div class="container">
        &copy; {{ date('Y') }} Manajemen Aset
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>