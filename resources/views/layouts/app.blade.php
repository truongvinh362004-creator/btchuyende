<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio Cá Nhân')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* Đẩy nội dung xuống để không bị Menu che mất */
        body { padding-top: 70px; }

        /* Hiệu ứng hover cho thẻ card */
        .hover-card { transition: transform 0.3s; }
        .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }

        /* Gradient nền đẹp mắt */
        .bg-gradient-primary {
            background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="{{ route('home') }}">
                <i class="bi bi-code-slash text-warning"></i> My Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active text-warning' : '' }}" href="{{ route('home') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active text-warning' : '' }}" href="{{ route('projects') }}">Dự Án</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active text-warning' : '' }}" href="{{ route('contact') }}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-shrink-0">
        <div class="container mt-4">
            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-white border-top text-center">
        <div class="container">
            <span class="text-muted">© 2026 Developed with <i class="bi bi-heart-fill text-danger"></i> & Laravel.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
