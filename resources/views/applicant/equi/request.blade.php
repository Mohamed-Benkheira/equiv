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
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card-wrapper">
                    <div class="brand">
                        <h2 class="text-center"><a href="#">Equivalence</a></h2>
                    </div>
                    <div class="card fat">

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
                            <form method="POST" action="{{ route('applicant.request') }}" class="my-dynamic-form">
                                @csrf

                                <!-- First Select -->
                                <div class="form-group">
                                    <label for="first_select">{{ __('Select an Option') }}</label>
                                    <select id="first_select" class="form-control" name="first_select" required>
                                        <option value="" disabled selected>{{ __('Select an Option') }}</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>

                                <!-- Option 1 Fields -->
                                <div id="option1_fields" class="option-fields" style="display:none;">
                                    <div class="form-group">
                                        <label for="input1">{{ __('Input 1') }}</label>
                                        <input id="input1" type="text" class="form-control" name="input1" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input2">{{ __('Input 2') }}</label>
                                        <input id="input2" type="text" class="form-control" name="input2" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input3">{{ __('Input 3') }}</label>
                                        <input id="input3" type="text" class="form-control" name="input3" />
                                    </div>
                                </div>

                                <!-- Option 2 Fields -->
                                <div id="option2_fields" class="option-fields" style="display:none;">
                                    <div class="form-group">
                                        <label for="input4">{{ __('Input 4') }}</label>
                                        <input id="input4" type="text" class="form-control" name="input4" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input5">{{ __('Input 5') }}</label>
                                        <input id="input5" type="text" class="form-control" name="input5" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input6">{{ __('Input 6') }}</label>
                                        <input id="input6" type="text" class="form-control" name="input6" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input7">{{ __('Input 7') }}</label>
                                        <input id="input7" type="text" class="form-control" name="input7" />
                                    </div>
                                </div>

                                <!-- Option 3 Fields -->
                                <div id="option3_fields" class="option-fields" style="display:none;">
                                    <div class="form-group">
                                        <label for="input8">{{ __('Input 8') }}</label>
                                        <input id="input8" type="text" class="form-control" name="input8" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input9">{{ __('Input 9') }}</label>
                                        <input id="input9" type="text" class="form-control" name="input9" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input10">{{ __('Input 10') }}</label>
                                        <input id="input10" type="text" class="form-control" name="input10" />
                                    </div>
                                    <div class="form-group">
                                        <label for="input11">{{ __('Input 11') }}</label>
                                        <input id="input11" type="text" class="form-control" name="input11" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const firstSelect = document.getElementById('first_select');
            const optionFields = document.querySelectorAll('.option-fields');

            firstSelect.addEventListener('change', function() {
                // Hide all option fields
                optionFields.forEach(field => field.style.display = 'none');

                // Show the fields for the selected option
                const selectedOption = this.value;
                const selectedFields = document.getElementById(selectedOption + '_fields');
                if (selectedFields) {
                    selectedFields.style.display = 'block';
                }
            });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
