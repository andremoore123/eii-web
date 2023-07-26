<header>
    <div class="header-content">
        <a href="{{ route('home') }}">
            <div class="logo">
                <img src="{{ asset('logo-eii.png') }}" alt="Logo" style="max-width: 100%; max-height: 100%;">
            </div>
        </a>
        <figure class="sixteen-nine-img">
        </figure>
        <div class="nav-wrapper">
            <nav class="navigation">
                <ul>
                    <li><a class="btn-nav @yield('sejarah-active')" href="{{route('sejarah')}}">Sejarah</a></li>
                    <li><a class="btn-nav @yield('active')" href="{{route('our-works')}}">Our Works</a></li>
                    <li><a class="btn-nav @yield('struktur-active')" href="{{route('struktur-perusahaan')}}">Struktur Perusahaan</a></li>
                    <!-- Add more navigation items as needed -->
                </ul>
            </nav>
        </div>
    </div>
</header>
