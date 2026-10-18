```php
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Griya Puspita')</title>

    {{-- start css --}}
    @include('layout.admin.css')
    {{-- end css --}}
</head>

<body>
    {{-- start sidebar --}}
    @include('layout.admin.sidebar')
    {{-- end sidebar --}}

    <div class="main-wrapper">
        {{-- start header --}}
        @include('layout.admin.header')
        {{-- end header --}}

        {{-- start main content --}}
        <main class="@yield('main_class', 'content')">
            @yield('content')
        </main>
        {{-- end main content --}}

        {{-- start footer --}}
        @include('layout.admin.footer')
        {{-- end footer --}}
    </div>

    {{-- start js --}}
    @include('layout.admin.js')
    {{-- end js --}}
</body>

</html>
```
