@extends('admin.layouts.app')

@section('content')

    <?php
        // UPDATE
        if ($form_todo == 'UPDATE')
        {
            // TABLE FIELDS
            $id             = old('id') ?? $data->id;
            $address        = old('address') ?? $data->address;
            $contact_number = old('contact_number') ?? $data->contact_number;
            $email_address  = old('email_address') ?? $data->email_address;
            $business_hours = old('business_hours') ?? $data->business_hours;
            $facebook_link  = old('facebook_link') ?? $data->facebook_link;
            $instagram_link = old('instagram_link') ?? $data->instagram_link;
            $twitter_link   = old('twitter_link') ?? $data->twitter_link;

            $prevent_refresh = 'true';
            $form_action = route('admin.company-settings.update', ['id' => $id]);
            $form_method = 'PUT';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                target-module='". route('admin.company-settings') ."'
                class='btn btn-outline-secondary btnCancel'>
                <i class='fa fa-ban' aria-hidden='true'></i> Cancel
            </button>
            <button type='submit'
                class='btn btn-primary btnSubmitForm'>
                <i class='fa fa-paper-plane-o' aria-hidden='true'></i> Update
            </button>";
        }
    ?>

    <main id="main" class="main" prevent-refresh="{{ $prevent_refresh }}" form-todo="{{ $form_todo }}">

        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col-9">
                        <h4 class="mb-0">{{ $page_title }}</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.company-settings') }}">Company Settings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col-3 text-end">
                        <button type="button"
                            target-module="{{ route('admin.company-settings') }}"
                            class="btn btn-secondary btnCancel">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <form action="{{ $form_action }}"
                            method="POST"
                            id="formCompanySettings"
                            form-todo="{{ $form_todo }}"
                            validated="false"
                            enctype="multipart/form-data">

                            @csrf 
                            @method($form_method)

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    @foreach ($errors->all() as $error)
                                        <div>
                                            <i class="bi bi-exclamation-octagon me-1"></i>
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="form-group row my-2">
                                        <label for="address" class="col-sm-2 col-form-label">
                                            Address <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="address" id="address" rows="3" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="contact_number" class="col-sm-2 col-form-label">
                                            Contact Number <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="contact_number" id="contact_number"
                                                value="{{ $data->contact_number ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="email_address" class="col-sm-2 col-form-label">
                                            Email Address <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email_address" id="email_address"
                                                value="{{ $data->email_address ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="business_hours" class="col-sm-2 col-form-label">
                                            Business Hours <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="business_hours" id="business_hours"
                                                value="{{ $data->business_hours ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="facebook_link" class="col-sm-2 col-form-label">
                                            Facebook Link
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="facebook_link" id="facebook_link"
                                                value="{{ $data->facebook_link ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="instagram_link" class="col-sm-2 col-form-label">
                                            Instagram Link
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="instagram_link" id="instagram_link"
                                                value="{{ $data->instagram_link ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="twitter_link" class="col-sm-2 col-form-label">
                                            Twitter Link
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="twitter_link" id="twitter_link"
                                                value="{{ $data->twitter_link ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <?= $form_button ?>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {

            // ----- BUTTON CANCEL -----
            $(document).on('click', '.btnCancel', function()
            {
                let form_todo = $('main').attr('form-todo');
                let target_module = $(this).attr('target-module');

                if (form_todo == 'READ')
                {
                    window.location.replace(target_module);
                }
                else
                {
                    let confirmation = $.confirm({
                        title: false,
                        escapeKey: 'no',
                        content: `
                        <div class="d-flex justify-content-center align-items-center flex-column text-center">
                            <img src="/assets/admin/img/modal/cancel.svg" class="py-5" height="130" width="130">
                            <b class="mt-4">Are you sure you want to cancel?</b>
                        </div>`,
                        buttons: {
                            no: {
                                btnClass: 'btn-default'
                            },
                            yes: {
                                btnClass: 'btn-blue',
                                keys: ['enter'],
                                action: function() {
                                    preventRefresh(false);

                                    confirmation.buttons.yes.setText(`<span class="spinner-border spinner-border-sm"></span> Please wait...`);
                                    confirmation.buttons.yes.disable();
                                    confirmation.buttons.no.hide();

                                    window.location.replace(target_module);

                                    return false;
                                }
                            },
                        }
                    });
                }

            })
            // ----- END BUTTON CANCEL -----


            // ----- SUBMIT FORM -----
            $(document).on('submit', '#formCompanySettings', function(e) {
                let is_validated = $(this).attr('validated') == "true";
                let form_todo = $(this).attr('form-todo');

                if (!is_validated) {
                    e.preventDefault();

                    let content = form_todo == 'CREATE' ? `
                    <div class="d-flex justify-content-center align-items-center flex-column text-center">
                        <img src="/assets/admin/img/modal/new.svg" class="py-3" height="300" width="200">
                        <b class="mt-4">Are you sure you want to save?</b>
                    </div>` : `
                    <div class="d-flex justify-content-center align-items-center flex-column text-center">
                        <img src="/assets/admin/img/modal/update.svg" class="py-1" height="150" width="150">
                        <b class="mt-4">Are you sure you want to update?</b>
                    </div>`;

                    let confirmation = $.confirm({
                        title: false,
                        escapeKey: 'no',
                        content,
                        buttons: {
                            no: {
                                btnClass: 'btn-default',
                            },
                            yes: {
                                btnClass: 'btn-blue',
                                keys: ['enter'],
                                action: function() {
                                    preventRefresh(false);
                                    $('#formCompanySettings').attr('validated', 'true').submit();

                                    confirmation.buttons.yes.setText(`<span class="spinner-border spinner-border-sm"></span> Please wait...`);
                                    confirmation.buttons.yes.disable();
                                    confirmation.buttons.no.hide();

                                    return false;
                                }
                            },
                        }
                    });
                }
            })
            // ----- END SUBMIT FORM -----


        })
    </script>

@endsection
