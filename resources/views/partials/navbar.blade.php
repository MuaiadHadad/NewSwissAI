
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('index') }}" class="d-flex align-items-center me-auto">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo me-2">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}" class="nav-link active" data-nav="index">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link" data-nav="about">About</a></li>
                <li><a href="{{ route('service') }}" class="nav-link" data-nav="service">Services</a></li>
                <li><a href="{{ route('blog') }}" class="nav-link" data-nav="blog">Blog</a></li>
                <li><a href="{{ route('careers') }}" class="nav-link" data-nav="careers">Careers</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{ route('contact') }}">Contact</a>
    </div>
</header>
