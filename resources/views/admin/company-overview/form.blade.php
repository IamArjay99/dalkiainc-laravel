@extends('admin.layouts.app')

@section('content')

    <?php
        // UPDATE
        if ($form_todo == 'UPDATE')
        {
            // TABLE FIELDS
            $id                = old('id') ?? $data->id;
            $company_overview  = old('company_overview') ?? $data->company_overview;
            $brief_description = old('brief_description') ?? $data->brief_description;

            $prevent_refresh = 'true';
            $form_action = route('admin.company-overview.update', ['id' => $id]);
            $form_method = 'PUT';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                target-module='". route('admin.company-overview') ."'
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
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Company Information</a></li>
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.company-overview') }}">Company Overview</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col-3 text-end">
                        <button type="button"
                            target-module="{{ route('admin.company-overview') }}"
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
                            id="formCompanyOverview"
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
                                        <label for="company_overview" class="col-sm-2 col-form-label">
                                            Our Company <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="company_overview" id="company_overview" rows="16" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $company_overview }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="company_overview" class="col-sm-2 col-form-label">
                                            Brief Description <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea name="brief_description" id="brief_description" rows="8" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $brief_description }}</textarea>
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
            $(document).on('submit', '#formCompanyOverview', function(e) {
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
                                    $('#formCompanyOverview').attr('validated', 'true').submit();

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
