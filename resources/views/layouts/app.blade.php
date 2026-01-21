<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo app()->view->getSections()['title'] ?? 'Portfolio Cao Cấp'; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS GIAO DIỆN */
        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(135deg, #f6f8fd 0%, #eef2f3 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* Menu Kính Mờ */
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .nav-link {
            font-weight: 600;
            color: #555 !important;
            transition: all 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: #0d6efd !important;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: white;
            margin-top: auto;
            border-top: 1px solid #eaeaea;
        }

        /* Hiệu ứng ảnh bay bay (Floating) */
        .floating-anim {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px) scale(1.0); }
            50% { transform: translateY(-15px) scale(1.0); }
            100% { transform: translateY(0px) scale(1.0); }
        }

        /* Hiệu ứng bóng đổ đẹp */
        .soft-shadow {
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top glass-nav">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-primary" href="<?php echo route('home'); ?>">
                <i class="bi bi-rocket-fill"></i> DEV<span class="text-dark">FOLIO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link <?php echo request()->routeIs('home') ? 'active' : ''; ?>" href="<?php echo route('home'); ?>">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo request()->routeIs('projects') ? 'active' : ''; ?>" href="<?php echo route('projects'); ?>">DỰ ÁN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white px-4 rounded-pill" href="<?php echo route('contact'); ?>">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        <div class="container">
            <div class="mb-2">
                <i class="bi bi-code-slash text-primary"></i> Xây dựng bằng <strong>PHP Native</strong> & Laravel
            </div>
            <small class="text-muted">&copy; <?php echo date('Y'); ?>. All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
