<!-- Desktop Navbar (hidden on mobile) -->
<header id="header" class="fixed-top d-none d-lg-flex align-items-center">
    <div class="container d-flex justify-content-between">
        <div class="logo">
            <h1><a href="{{ route('welcome') }}">Equivalence</a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#Features">Features</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#howItWorks">How to use</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="loginDropdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%);">
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign up</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#faq">Q & A</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Mobile Navbar (hidden on desktop) -->
<nav class="navbar navbar-expand-lg d-lg-none fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <h1>Equivalence</h1>
        </a>

        <!-- Toggle button for mobile menu -->
        <button class="navbar-toggler text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarNav"
            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%);">
            <ul class="navbar-nav ms-auto">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="loginDropdown"
                        style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%);">
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('applicant.register') }}">Sign up</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('welcome') }}#faq">Q & A</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
