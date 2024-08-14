<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ __('Register') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}" />
</head>

<body class="my-login-page">
    <section class="">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card-wrapper">
                    <div class="brand">
                        <h2 class="text-center"><a href="#">Equivalence</a></h2>
                    </div>
                    <div class="card fat">
                        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

                        @if ($errors->all()):
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger fw-bold  ">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{ __('Register') }}</h4>

                            <!-- Change the form action to point to the store method of NormalUserRegisterController -->
                            <form action="{{ route('applicant.bac.store') }}" method="post"
                                enctype="multipart/form-data" class="container mt-5">
                                @csrf
                                <div class="mb-3">
                                    <label for="school-name" class="form-label">School Name</label>
                                    <input type="text" class="form-control" id="school-name" name="school_name"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="certificate-date" class="form-label">Date of Certificate</label>
                                    <input type="date" class="form-control" id="certificate-date"
                                        name="certificate_date" required>
                                </div>

                                <div class="mb-3 d-flex flex-column">
                                    <label for="id-card" class="form-label">ID Card</label>
                                    <input class="form-control" type="file" id="id-card" name="id_card"
                                        accept=".pdf" required>
                                </div>

                                <div class="mb-3 d-flex flex-column">
                                    <label for="certificate-file" class="form-label">Your Certificate</label>
                                    <input class="form-control" type="file" id="certificate-file"
                                        name="certificate_file" accept=".pdf" required>
                                </div>

                                <div class="mb-3 d-flex flex-column">
                                    <label for="degrees-paper" class="form-label">Degree Certificate</label>
                                    <input class="form-control" type="file" id="degrees-paper" name="degrees_paper"
                                        accept="pdf" required>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="hidden" name="info_accuracy" value="0">
                                    <input type="checkbox" class="form-check-input" id="info-accuracy"
                                        name="info_accuracy" value="1" required>
                                    <label class="form-check-label" for="info-accuracy">I confirm that the information
                                        provided is valid and original</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
