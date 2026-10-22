<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dapur Nusantara')</title>

    <link rel="stylesheet"
          href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">

    <style>
        :root {
            --green: #24633e;
            --dark-green: #194b30;
            --cream: #faf8f0;
            --sage: #e7eddf;
            --text: #28342b;
        }

        body {
            background: var(--cream);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fffdf7;
            border-bottom: 1px solid #e8e4d8;
        }

        .brand-name, h1, h2, h3, .recipe-name {
            font-family: Georgia, serif;
            color: var(--dark-green);
            font-weight: bold;
        }

        .brand-name {
            font-size: 1.4rem;
        }

        .navbar .nav-link {
            color: var(--text);
            font-weight: 600;
        }

        .navbar .nav-link.active,
        .navbar .nav-link:hover {
            color: var(--green);
        }

        .btn-green {
            background: var(--green);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 11px 24px;
        }

        .btn-green:hover {
            background: var(--dark-green);
            color: white;
        }

        .hero {
            background: linear-gradient(110deg, #f4eedc, #e5e9d9);
            overflow: hidden;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
        }

        .hero-photo {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 48% 48% 20px 20px;
        }

        .recipe-card {
            height: 100%;
            background: #fffefb;
            border: 1px solid #e9e5da;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 14px rgba(35, 60, 40, .08);
            transition: transform .2s;
        }

        .recipe-card:hover {
            transform: translateY(-4px);
        }

        .recipe-photo {
            display: block;
            width: 100%;
            height: 210px;
            object-fit: cover;
        }

        .category-badge {
            display: inline-block;
            background: #e0ecdc;
            color: var(--dark-green);
            border-radius: 20px;
            padding: 5px 12px;
            font-size: .8rem;
        }

        .site-footer {
            background: var(--sage);
            border-top: 1px solid #dce4d4;
        }

        .detail-photo {
            display: block;
            width: 100%;
            max-height: 480px;
            object-fit: cover;
            border-radius: 18px;
        }

        .content-box {
            background: #fffefb;
            border: 1px solid #e9e5da;
            border-radius: 15px;
            padding: 22px;
            height: 100%;
        }

        .search-input {
            min-width: 180px;
        }

        /* Pagination halaman resep */
        .pagination {
            gap: 5px;
            flex-wrap: wrap;
        }

        .pagination .page-link {
            color: var(--green);
            border: 1px solid #e0ecdc;
            background: #fffefb;
            border-radius: 8px;
            padding: 9px 15px;
        }

        .pagination .page-item.active .page-link {
            background: var(--green);
            border-color: var(--green);
            color: white;
        }

        .pagination .page-link:hover {
            color: var(--dark-green);
            background: var(--sage);
            border-color: #dce4d4;
        }

        .pagination .page-item.disabled .page-link {
            color: #999;
            background: #f5f3ec;
        }

        @media (max-width: 767px) {
            .hero-photo {
                height: 240px;
            }

            .recipe-photo {
                height: 220px;
            }

            .search-input {
                min-width: 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container py-2">

            <a class="navbar-brand brand-name"
               href="{{ route('home') }}">
                🌿 Dapur Nusantara
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav mx-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recipes.*') ? 'active' : '' }}"
                           href="{{ route('recipes.index') }}">
                            Daftar Resep
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                           href="{{ route('about') }}">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                           href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>

                <form action="{{ route('recipes.index') }}"
                      method="GET"
                      class="d-flex mt-3 mt-lg-0 gap-2">

                    <input class="form-control rounded-pill search-input"
                           type="search"
                           name="search"
                           placeholder="Cari resep..."
                           value="{{ request('search') }}">

                    <button type="submit" class="btn btn-green">
                        Cari
                    </button>

                </form>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer mt-5 py-4">
        <div class="container">
            <div class="row align-items-center gy-3">

                <div class="col-md-5">
                    <div class="brand-name">🌿 Dapur Nusantara</div>
                    <small>Warisan Rasa, Untuk Semua</small>
                </div>
                <div class="col-md-4 text-md-end">
                    <small>Masak tradisional, jaga warisan budaya.</small>
                </div>

            </div>
        </div>

        <div class="container text-center mt-4">
            <small>
                ©️ {{ date('Y') }} Dapur Nusantara. Semua hak dilindungi.
            </small>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>