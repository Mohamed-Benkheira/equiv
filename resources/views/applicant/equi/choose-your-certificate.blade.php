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
    @include('../partitions.applicant-header')

    <!-- End Header Section -->

    <!-- Main Section -->
    <style>
        a:hover {
            background-color: #005a9c !important;
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
                        Request Baccalaureate Certificate Equivalence (شهادة الباكالوريا)
                    </a>
                    <a href="{{ route('applicant.license.create') }}" class="btn btn-outline-dark btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request License Degree Equivalence (شهادة الليسانس)
                    </a>

                    <a href="#" class="btn btn-outline-dark disabled btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request Masters Degree Equivalence
                    </a>
                    <a href="#" class="btn btn-outline-dark disabled btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request PHD Degree Equivalence
                    </a>
                    <a href="#" class="btn btn-outline-dark disabled btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request Medical Degree Equivalence
                    </a>
                    <a href="#" class="btn btn-outline-dark disabled btn-lg text-center"
                        style="border-color: #333; color: #333; width: 100%; border-radius: 8px;">
                        Request Veterinarian Degree Equivalence
                    </a>


                </div>
            </div>
        </div>
    </main>
    <!-- End Main Section -->

    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
