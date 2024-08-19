<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ __('Request Status') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>

<body class="my-login-page" style="background-color: #f8f9fa;">

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

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 text-center">{{ __('Request Status') }}</h4>
                            {{-- @dd($bacRequest->id) --}}
                            <p><strong>Request ID:</strong> {{ $bacRequest->id }}</p>
                            <p><strong>Applicant Name:</strong> {{ $bacRequest->applicant->full_name }}</p>

                            @if ($isAccepted)
                                <div class="alert alert-success mt-4" role="alert">
                                    Your request has been reviewed. Please check your email for further information.
                                </div>
                            @else
                                <div class="alert alert-primary mt-4" role="alert">
                                    Your request is pending.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
