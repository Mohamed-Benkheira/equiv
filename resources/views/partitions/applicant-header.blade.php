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
<nav class="d-lg-none navbar navbar-expand-lg fixed-top">
    <div class="container-fluid w-100">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <h1>Equivalence</h1>
        </a>

        <!-- Toggle button for mobile menu -->
        <button class="navbar-toggler text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        </button>

        <!-- Mobile Navbar content -->
        <div class="collapse navbar-collapse rounded-3 w-100" id="navbarNav"
            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%)">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#Features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#howItWorks">How to use</a>
                </li>

                <!-- Dropdown for Request options -->
                <li class="nav-item dropdown">
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
                </li>

                <li class="nav-item">
                    <a class="nav-link scrollto" href="#faq">Q & A</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
