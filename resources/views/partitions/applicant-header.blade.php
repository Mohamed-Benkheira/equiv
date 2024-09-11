<!-- Desktop Navbar (hidden on mobile) -->
<header id="header" class="fixed-top d-flex align-items-center d-none d-lg-flex">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1><a href="/">Equivalence</a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#Features">Features</a></li>
                <li><a class="nav-link scrollto" href="#howItWorks">How to use</a></li>
                <li class="dropdown"><a href="#" class="text-decoration-none"><span>Request</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="text-decoration-none"
                                href="{{ route('applicant.choose.your.certificate') }}">Request</a></li>
                        <li>
                            <form action="{{ route('applicant.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="border-0 bg-white w-100">
                                    <a class="text-decoration-none w-100">Logout</a>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#faq">Q & A</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Mobile Navbar (hidden on desktop) -->


<nav id="mobile-navbar" class="d-lg-none navbar fixed-top">
    <div class="container-fluid w-100 d-flex flex-column align-items-center">
        <!-- Logo -->
        <a class="navbar-brand text-center" href="{{ route('welcome') }}">
            <h1>Equivalence</h1>
        </a>

        <!-- Navbar links centered under the logo with Swiper -->
        <div class="w-100">
            <!-- Swiper Container -->
            <div class="swiper-container">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Navigation Links as Swiper Slides -->
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#hero">Home</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#about">About</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#Features">Features</a>
                    </div>
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#howItWorks">How to
                            use</a>
                    </div>

                    <!-- Dropdown for login options as a Swiper Slide -->

                    <div class="swiper-slide nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="requestDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Request
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="requestDropdown"
                            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%)">
                            <li><a class="dropdown-item text-white"
                                    href="{{ route('applicant.choose.your.certificate') }}">Request</a></li>
                            <li>
                                <form action="{{ route('applicant.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <!-- FAQ Link as Swiper Slide -->
                    <div class="swiper-slide nav-item">
                        <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#faq">Q & A</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
