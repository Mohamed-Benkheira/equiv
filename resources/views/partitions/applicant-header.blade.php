<header id="header" class="fixed-top d-flex align-items-center ">
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
                <li class="dropdown "><a href class="text-decoration-none">
                        <span>Request<span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="text-decoration-none"
                                href="{{ route('applicant.choose.your.certificate') }}">Request</a></li>
                        <li>
                            <form action="{{ route('applicant.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="border-0 bg-white w-100">
                                    <a class="text-decoration-none w-100">
                                        Logout
                                    </a>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#faq">Q & A</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
