{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('assets/assets-admin/images/LogoGriyaPuspita.png') }}">

{{-- Library lokal --}}
<link rel="stylesheet" href="{{ asset('assets/assets-admin/libs/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets-admin/libs/bootstrap-icons/bootstrap-icons.css') }}">

{{-- CSS utama template --}}
<link rel="stylesheet" href="{{ asset('assets/assets-admin/css/main.css') }}">

{{-- CSS tambahan khusus halaman (contoh: dashboard) --}}
@stack('styles')
