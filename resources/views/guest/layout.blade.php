<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Griya Puspita')</title>

    <link rel="stylesheet" href="{{ asset('assets/assets-guest/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-guest/css/style.css') }}">
</head>
<body>

    @include('guest.partials.navbar')

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('assets/assets-guest/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
