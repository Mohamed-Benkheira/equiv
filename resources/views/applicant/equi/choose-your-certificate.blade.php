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

                        <div class="card-body redirect">
                            <div class="list-group">
                                <a href="{{ route('applicant.bac') }}"
                                    class="list-group-item list-group-item-action py-3 active" aria-current="true">
                                    bac
                                </a>
                                <a href="{{ route('applicant.bac') }}"
                                    class="list-group-item list-group-item-action py-3">A
                                    second link
                                    item</a>
                                <a href="{{ route('applicant.bac') }}"
                                    class="list-group-item list-group-item-action py-3">A
                                    third link
                                    item</a>
                                <a href="{{ route('applicant.bac') }}"
                                    class="list-group-item list-group-item-action py-3">A
                                    fourth link
                                    item</a>

                            </div>
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
