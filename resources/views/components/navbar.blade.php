{{-- Navbar Session --}}
<nav class="n4p21R_">
    <div class="n4p21Rl0 mt-2" style="width: 30%;">
        <a href="/" style="width: 150rem;">
            <img src="{{ asset('frontend/img/header.png') }}" alt="AMC Bandara Kalimarau" width="100rem">
        </a>
    </div>
    <div class="n4p21RexT">
        <li><a href="/">Dashboard</a></li>
        <li><a href="/kejadian">Kejadian</a></li>
        <li><a href="/tentang-kami">Tentang Kami</a></li>
        <li class="ml-4">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </div>
    <div class="n4p21Rl0">
        <a href="/" style="width: 100%;">
            <img src="{{ asset('frontend/img/logo-amc.jpeg') }}" alt="AMC Bandara Kalimarau" width="100%"
                style="width: 130%;">
        </a>
    </div>
</nav>
