<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Griya Puspita')</title>

    <link rel="stylesheet" href="{{ asset('assets/assets-admin/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-admin/libs/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-admin/css/main.css') }}">
</head>

<body>
    <div class="sidebar-wrapper" id="sidebar">
        <a href="{{ url('/admin') }}" class="sidebar-brand">
            <img src="{{ asset('assets/assets-admin/images/LogoGriyaPuspita.png') }}" alt="Griya Puspita">
            <span>Griya Puspita</span>
        </a>


        <ul class="sidebar-menu-list">
            <li class="sidebar-menu-item">
                <a href="{{ url('/admin') }}" class="sidebar-menu-link">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('pelanggan.index') }}" class="sidebar-menu-link">
                    <i class="bi bi-people-fill"></i>
                    <span>Customer</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('treatment.index') }}" class="sidebar-menu-link">
                    <i class="bi bi-scissors"></i>
                    <span>Treatment</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('terapis.index') }}" class="sidebar-menu-link">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Terapis</span>
                </a>
            </li>
        </ul>


    </div>

    <div class="main-wrapper">
        <nav class="navbar-custom">
            <div class="container-fluid">
                <span class="fw-semibold">Admin Griya Puspita</span>
            </div>
        </nav>

        <main class="content">
            @yield('content')

            <footer class="bg-white rounded shadow p-4 mt-4">
                <p class="mb-0 text-center">
                    © {{ date('Y') }} Griya Puspita Salon
                </p>
            </footer>
        </main>
    </div>

    <script src="{{ asset('assets/assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets-admin/js/dashboard.js') }}"></script>
</body>

</html>
