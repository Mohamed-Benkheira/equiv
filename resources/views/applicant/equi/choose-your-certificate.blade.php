<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ __('Register') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: white; color: #333;">

    <!-- Header Section -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="index.html">Equivalence</a></h1>
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
    <!-- End Header Section -->

    <!-- Main Section -->
    <style>
        a:hover {
            background-color: #ef6603 !important;
            color: white !important;

        }
    </style>
    <main class="container py-5" style="margin-top: 120px;">
        <div class="card mx-auto shadow" style="max-width: 600px; border-radius: 10px;">
            <div class="card-body text-center p-4">
                <h2 class="text-dark mb-4" style="color: #333;">Choose Your Certificate</h2>
                <div class="d-flex flex-column gap-3">
                    <a href="{{ route('applicant.bac.create') }}" class="btn btn-outline-dark btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request Baccalaureate Certificate Equivalence
                    </a>
                    <a href="{{ route('applicant.license.create') }}" class="btn btn-outline-dark btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request License Certificate Equivalence
                    </a>
                    <a href="#" class="btn btn-outline-dark btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Third Certificate
                    </a>
                    <a href="#" class="btn btn-outline-dark btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Fourth Certificate
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Section -->

    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
