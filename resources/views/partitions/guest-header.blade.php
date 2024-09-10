<!-- Desktop Navbar (hidden on mobile) -->
<header id="header" class="fixed-top d-flex align-items-center d-none d-lg-flex     ">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1><a href="/">Equivalence</a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#Features">Features</a></li>
                <li><a class="nav-link scrollto" href="#howItWorks">How to use</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="loginDropdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign up</a>
                        </li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="#faq">Q & A</a></li>
            </ul>
        </nav>
    </div>

</header>


<!-- Mobile Navbar (hidden on desktop) -->
<nav class="d-lg-none navbar navbar-expand-lg fixed-top">
    <div class="container-fluid w-100  ">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <h1>Equivalence</h1>
        </a>

        <!-- Toggle button for mobile menu -->
        <button class="navbar-toggler text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        </button>

        <!-- Navbar links for both mobile and desktop -->
        <div class="collapse navbar-collapse rounded rounded-3 w-100" id="navbarNav"
            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
            <ul class="navbar-nav ms-auto">
                <!-- Navigation Links -->
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#Features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#howItWorks">How to use</a>
                </li>

                <!-- Dropdown for login options -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="loginDropdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign up</a>
                        </li>
                    </ul>
                </li>

                <!-- FAQ Link -->
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#faq">Q % A</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
