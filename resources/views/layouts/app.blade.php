<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@yield('head')
<body class="g-sidenav-show  bg-gray-200">
@yield('aside')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @yield('navbar')
    <div class="container-fluid py-4">
        @yield('content')
        @yield('footer')
    </div>
</main>
    @yield('javascripts')
</body>
</html>
