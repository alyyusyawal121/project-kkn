<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="{{ route('about') }}"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('potensi') }}">Potensi Desa </a></li>
                        <li><a href="{{ route('kegiatan') }}">Kegiatan & Program Desa</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('galeri') }}">Galeri</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</header>