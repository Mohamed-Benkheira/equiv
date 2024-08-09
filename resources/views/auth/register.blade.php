<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ __('Register') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}" />
</head>

<body class="my-login-page">
    <section class="">
        <div class="container ">
            <div class="row justify-content-md-center ">
                <div class="card-wrapper">
                    <div class="brand">
                        <h2 class="text-center"><a href="#">Equivalence</a></h2>
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('Register') }}</h4>

                            <form method="POST" action="{{ route('register') }}" class="my-login-validation"
                                novalidate>
                                @csrf

                                <!-- Nationality -->
                                <div class="form-group">
                                    <label for="nationality">{{ __('Nationality') }}</label>
                                    <select id="nationality" class="form-control" name="nationality" required autofocus>
                                        <option value="" disabled selected>{{ __('Select your nationality') }}
                                        </option>
                                        <option value="Algerian">Algerian</option>
                                        <option value="American">American</option>
                                        <option value="British">British</option>
                                        <option value="Canadian">Canadian</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="French">French</option>
                                        <option value="German">German</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Spanish">Spanish</option>
                                    </select>
                                    @error('nationality')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first_name">{{ __('First Name') }}</label>
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                        value="{{ old('first_name') }}" required />
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last_name">{{ __('Last Name') }}</label>
                                    <input id="last_name" type="text" class="form-control" name="last_name"
                                        value="{{ old('last_name') }}" required />
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required autocomplete="username" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        autocomplete="new-password" />
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Terms and Conditions -->
                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree"
                                            class="custom-control-input" required>
                                        <label for="agree" class="custom-control-label">{{ __('I agree to the') }}
                                            <a href="#">{{ __('Terms and Conditions') }}</a></label>
                                        @error('agree')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Register Button -->
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-block"
                                        style="background-color: #ef6603; color: white">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                                <!-- Login Link -->
                                <div class="mt-4 text-center">
                                    {{ __('Already have an account?') }} <a
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
