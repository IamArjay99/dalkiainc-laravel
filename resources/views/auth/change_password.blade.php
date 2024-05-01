<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Project Eagle | Change Password</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/epldt-suite-logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/epldt-suite-logo.png') }}" rel="epldt-suite-logo">

    <link rel="stylesheet" href="{{ asset('assets/css/luno-style.css') }}">
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            {{-- <div class="d-flex justify-content-center pb-4">
                                <div class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/img/epldt-suite-logo.png') }}" height="50" width="50" alt="">
                                    <h4 class="px-2 d-none d-lg-block mb-0" style="font-weight: bolder; color: #d0021b;">ePLDT</h4>
                                </div>
                            </div> --}}

                            <div class="card py-3">
                                <div class="card-body">

                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4 mb-0">CHANGE PASSWORD</h5>
                                        <p class="text-center small text-justify">
                                            <span class="text-danger"><i class="bi bi-exclamation-triangle"></i></i></span>
                                            Change the default password. This is a must for all new users.
                                        </p>
                                    </div>

                                    <form action=" {{ route('auth.update_password', ['id' => Auth::user()->id]) }}"
                                        method="POST"
                                        class="row g-3 needs-validation">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="col-12 form-group">
                                            <label for="new_password" class="form-label">New Password <code>*</code></label>
                                            <div class="input-group has-validation">
                                                <input type="password"
                                                    name="new_password"
                                                    class="form-control password"
                                                    id="new_password"
                                                    tabindex="1"
                                                    required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btnPreviewPassword" type="button">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="confirm_password" class="form-label">Confirm Password <code>*</code></label>
                                            <div class="input-group has-validation">
                                                <input type="password"
                                                    name="confirm_password"
                                                    class="form-control password"
                                                    id="confirm_password"
                                                    tabindex="2"
                                                    required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btnPreviewPassword" type="button">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="invalid invalid-feedback d-block" id="errorConfirmMessage"></div>
                                        </div>

                                        <div class="col-12 mt-4 pt-2">
                                            <button class="btn btn-primary w-100" type="submit" disabled>Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>

</body>

<script>

    $(document).ready(function() {
        $('[name="new_password"]').focus();

        // PREVIEW PASSWORD
        $(document).on('click', '.btnPreviewPassword', function(e) {
            e.preventDefault();
            let $inputPassword = $(this).closest('.form-group').find('input.password');
            let isPreview = $(this).attr('preview') ?? 'true';
            if (isPreview == 'true') {
                $(this).html(`<i class="bi bi-eye-slash"></i>`);
            } else {
                $(this).html(`<i class="bi bi-eye"></i>`);
            }
            $inputPassword.attr('type', isPreview == 'true' ? 'text' : 'password');

            isPreview = isPreview == 'true' ? 'false' : 'true';
            $(this).attr('preview', isPreview);
        })

        // TYPE CONFIRM PASSWORD
        $(document).on('keyup', '[name="new_password"], [name="confirm_password"]', function() {
            let newPassword     = $('[name="new_password"]').val()?.trim();
            let confirmPassword = $('[name="confirm_password"]').val()?.trim();
            if (newPassword != '' && confirmPassword != '') {
                if (newPassword === confirmPassword) {
                    $('button[type="submit"]').removeAttr('disabled');
                    $('#errorConfirmMessage').html('');
                } else {
                    $('button[type="submit"]').attr('disabled', true);
                    $('#errorConfirmMessage').html('Password does not match.');
                }
            } else {
                $('button[type="submit"]').attr('disabled', true);
                $('#errorConfirmMessage').html('');
            }
        })
    })

</script>

</html>
