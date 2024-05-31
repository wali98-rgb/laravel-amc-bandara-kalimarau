<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- My Link CDN --}}
    @include('assets.css')

    <title>AMC Bandara Kalimarau | Admin</title>
</head>

<body>
    {{-- Preloader Session Start --}}
    {{-- Preloader Session End --}}

    <div class="b0dy_s">
        <div class="s1dEx_">
            {{-- Sidebar Session Start --}}
            <x-sidebar-adm></x-sidebar-adm>
            {{-- Sidebar Session End --}}
        </div>

        <main class="m4lnx_">
            {{-- Navbar Session Start --}}
            <x-navbar-adm></x-navbar-adm>
            {{-- Navbar Session End --}}

            {{-- Main Content Session Start --}}
            @yield('main_content_admin')
            {{-- Main Content Session End --}}

            {{-- Footer Session Start --}}
            <x-footer-adm></x-footer-adm>
            {{-- Footer Session End --}}
        </main>
    </div>

    {{-- My JS CDN --}}
    @include('assets.js')
</body>

</html>
