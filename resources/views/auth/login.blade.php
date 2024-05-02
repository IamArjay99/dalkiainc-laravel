<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dalkia Inc | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/website/img/logo/dalikiainc-fav.png') }}" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        
    </style>
</head>

<body>

    <main style="background: #1f1f1f">
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card py-3" style="background: #d9e1e9;">
                                <div class="card-body">

                                    <img src="{{ asset('assets/website/img/logo/logo.png') }}" height="60" width="100%" alt="">
                                    <div class="mb-4">
                                        <h5 class="card-title text-center pb-0 fs-4 mb-0 text-danger">WEBSITE</h5>
                                        <p class="text-center small text-muted">Enter your email and password to log in</p>
                                    </div>

                                    <form action=" {{ route('auth.authenticate') }}"
                                        method="POST"
                                        class="row g-3 needs-validation">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
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
                                                placeholder="johndoe@email.com"
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
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4 pt-2">
                                            <button class="btn btn-primary w-100" type="submit"><i class="fa fa-paper-plane"></i> Log In</button>
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
                $(this).html(`<i class="fa fa-eye-slash"></i>`);
            } else {
                $(this).html(`<i class="fa fa-eye"></i>`);
            }
            $(`[name="password"]`).attr('type', isPreview == 'true' ? 'text' : 'password');

            isPreview = isPreview == 'true' ? 'false' : 'true';
            $(this).attr('preview', isPreview);
        })
    })

</script>

</html>
