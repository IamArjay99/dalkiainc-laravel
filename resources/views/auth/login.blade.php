<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dalkia Inc. Website | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/website/img/logo/dalikiainc-fav.png') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/luno-style.css') }}">
    <script src="{{ asset('assets/admin/js/plugins.js') }}"></script>

</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center pb-4">
                                <div class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/website/img/logo/logo.png') }}" height="60" width="100%" alt="">
                                </div>
                            </div>

                            <div class="card py-3">
                                <div class="card-body">

                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4 mb-0">WEBSITE</h5>
                                        <p class="text-center small">Enter your email and password to log in</p>
                                    </div>

                                    <form action=" {{ route('auth.authenticate') }}"
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

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email <code>*</code></label>
                                            <input type="email"
                                                name="email"
                                                placeholder="user@email.com"
                                                class="form-control"
                                                id="email"
                                                value="{{ old('email') }}"
                                                required>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password <code>*</code></label>
                                            <div class="input-group has-validation">
                                                <input type="password"
                                                    name="password"
                                                    class="form-control"
                                                    id="password"
                                                    required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="btnPreviewPassword">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4 pt-2">
                                            <button class="btn btn-primary w-100" type="submit"><i class="bi bi-send-fill"></i> Log In</button>
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
        $('[name="email"]').focus();

        $(document).on('click', '#btnPreviewPassword', function(e) {
            e.preventDefault();
            let isPreview = $(this).attr('preview') ?? 'true';
            if (isPreview == 'true') {
                $(this).html(`<i class="bi bi-eye-slash"></i>`);
            } else {
                $(this).html(`<i class="bi bi-eye"></i>`);
            }
            $(`[name="password"]`).attr('type', isPreview == 'true' ? 'text' : 'password');

            isPreview = isPreview == 'true' ? 'false' : 'true';
            $(this).attr('preview', isPreview);
        })
    })

</script>

</html>
