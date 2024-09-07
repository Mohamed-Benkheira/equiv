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

    @include('../partitions.applicant-header')


    <section class="py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">

                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 text-center">{{ __('Request Status') }}</h4>
                            <p><strong>Request ID:</strong> {{ $licenseRequest->id }}</p>
                            <p><strong>Applicant Name:</strong> {{ $licenseRequest->applicant->full_name }}</p>

                            @if ($licenseRequest->status === 'accepted')
                                <div class="alert alert-success mt-4" role="alert">
                                    Your request has been accepted. Please check your email for further information.
                                </div>
                            @elseif ($licenseRequest->status === 'declined')
                                <div class="alert alert-danger mt-4" role="alert">
                                    Your request has been rejected. Please contact support for more information.
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
