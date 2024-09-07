<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="/">Equivalence</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="{{ route('welcome') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#Features">Features</a></li>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}#howItWorks">How to use</a></li>
                <li class="dropdown "><a href="#" class="text-decoration-none"><span>Login</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="text-decoration-none" href="{{ route('applicant.login') }}">Login</a></li>
                        <li><a class="text-decoration-none" href="{{ route('applicant.register') }}">Sign up</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="{{ route('welcome') }}#faq">Q % A</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header><!-- End Header -->
