
<nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn {{ $dflex === true ? 'd-flex' : null }}" data-wow-delay="0.1s">
    <a href="{{ route('/') }}" class="navbar-brand d-block d-lg-none" title="Home Page">
        <img src="{{ asset('media/default/logo/Analytic-Saiful-Logo.png') }}" alt="Analytic Saiful Logo" title="Analytic Saiful Logo" class="img-fluid" width="150">
    </a>

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('/') }}" class="nav-item nav-link {{ Request::segment(1) === '/' ? 'active': null }}" title="Home Page">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link" title="About">About</a>
            <a href="{{ url('/service') }}" class="nav-item nav-link" title="Services">Services</a>
            <a href="{{ route('my-works') }}" class="nav-item nav-link" title="My Work">My Works</a>
        </div>

        <a href="{{ route('/') }}" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block" title="Analytic Saiful Logo">
            <img src="{{ asset('media/default/logo/Analytic-Saiful-Logo.png') }}" alt="Analytic Saiful Logo" title="Analytic Saiful Logo" class="img-fluid" width="150">
        </a>

        <div class="navbar-nav me-auto py-0">
            <a href="{{ route('/') }}#testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="{{ url('blog/all-post') }}" class="nav-item nav-link {{ Request::segment(1) === 'blog' ? 'active' : null }}" title="Blog">Blog</a>
            <a href="{{ url('/contacts') }}" class="nav-item nav-link" title="Contact">Contact</a>
            <a href="" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Hire Me">Hire Me</a>
        </div>
    </div>
</nav>