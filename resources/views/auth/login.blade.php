    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Kodinger" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>My Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}" />
    </head>

    <body class="my-login-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <h2 class="brand text-center">
                            <a href="#">Equivalence</a>
                        </h2>
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>

                                <!-- Display Session Status -->
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}" class="my-login-validation"
                                    novalidate="">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus autocomplete="username" />

                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password">Password
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="float-right">
                                                    Forgot Password?
                                                </a>
                                            @endif
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required autocomplete="current-password" />

                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="remember" id="remember"
                                                class="custom-control-input" />
                                            <label for="remember" class="custom-control-label">Remember Me</label>
                                        </div>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-block"
                                            style="background-color: #ef6603; color: white">
                                            Login
                                        </button>
                                    </div>

                                    <!-- Register Link -->
                                    <div class="mt-4 text-center">
                                        Don't have an account?
                                        <a href="{{ route('register') }}">Create One</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/my-login.js') }}"></script>
    </body>

    </html>
