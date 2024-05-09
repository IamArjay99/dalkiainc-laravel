@extends('admin.layouts.app')

@section('content')

    <?php
        // CREATE
        if (!isset($form_todo) || $form_todo == 'CREATE')
        {
            // TABLE FIELDS
            $id              = null;
            $job_title       = old('job_title');
            $job_description = old('job_description');
            $status          = old('status');

            $prevent_refresh = 'true';
            $form_action = route('admin.careers.save');
            $form_method = 'POST';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                target-module='". route('admin.careers') ."'
                class='btn btn-outline-secondary btnCancel'>
                <i class='fa fa-ban' aria-hidden='true'></i> Cancel
            </button>
            <button type='submit'
                class='btn btn-primary btnSubmitForm'>
                <i class='fa fa-floppy-o' aria-hidden='true'></i> Save
            </button>";
        }

        // READ
        else if ($form_todo == 'READ')
        {
            // TABLE FIELDS
            $id              = $data->id;
            $job_title       = $data->job_title;
            $job_description = $data->job_description;
            $status          = $data->status;

            $prevent_refresh = 'false';
            $form_action = '';
            $form_method = '';
            $form_required = "";
            $form_button = "
            <div class='d-flex justify-content-end'>
                <button type='button'
                    class='btn btn-danger btnDeleteForm'
                    title='". $job_title ."'>
                    <i class='bi bi-trash'></i> Delete
                </button>
                <a href=". route('admin.careers.edit', ['id' => $id]) ."
                    class='btn btn-warning mx-1'>
                    <i class='bi bi-pencil'></i> Edit
                </a>
            </div>";
        }

        // UPDATE
        else if ($form_todo == 'UPDATE')
        {
            // TABLE FIELDS
            $id              = old('id') ?? $data->id;
            $job_title       = old('job_title') ?? $data->job_title;
            $job_description = old('job_description') ?? $data->job_description;
            $status          = old('status') ?? $data->status;

            $prevent_refresh = 'true';
            $form_action = route('admin.careers.update', ['id' => $id]);
            $form_method = 'PUT';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                class='btn btn-danger btnDeleteForm'
                title='". $job_title ."'>
                <i class='bi bi-trash'></i> Delete
            </button>
            <button type='button'
                target-module='". route('admin.careers') ."'
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
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.careers') }}">Careers</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col-3 text-end">
                        <button type="button"
                            target-module="{{ route('admin.careers') }}"
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
                            id="formCareers"
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
                                        <label for="job_title" class="col-sm-2 col-form-label">
                                            Job Title <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $job_title ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="job_title"
                                                    name="job_title"
                                                    placeholder="Enter job title"
                                                    value="{{ $job_title }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            Job Description <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <textarea name="job_description" id="job_description" rows="8" style="resize: none;"
                                                    class="form-control" disabled>{{ $job_description ?? '-' }}</textarea>
                                            @else
                                                <textarea name="job_description" id="job_description" rows="8" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $job_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="status" class="col-sm-2 col-form-label">
                                            Status <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <?= $data->status == 1 ? "<span class='badge bg-success'>Active</span>" : "<span class='badge bg-warning'>Inactive</span></span>" ?>
                                            @else
                                                <select name="status" id="status" class="form-select" select2>
                                                    <option value="1" {{ in_array($status, [1, null]) ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $status == 0 ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <?= $form_button ?>
                                </div>
                            </div>
                        </form>

                        @if ($form_todo != 'CREATE')
                            <!-- ----- FORM DELETE ----- -->
                            <form action='{{ route('admin.careers.delete', ['id' => $id]) }}' method='POST' id='formDelete'>
                                @csrf 
                                @method('DELETE')
                            </form>
                            <!-- ----- END FORM DELETE ----- -->
                        @endif

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
            $(document).on('submit', '#formCareers', function(e) {
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
                                    $('#formCareers').attr('validated', 'true').submit();

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


            // ----- BUTTON DELETE FORM -----
            $(document).on('click', '.btnDeleteForm', function(e) {
                e.preventDefault();
                let title = $(this).attr('title');

                let confirmation = $.confirm({
                    title: `<h6><b>${title}</b></h6>`,
                    escapeKey: 'no',
                    content: `
                    <div class="d-flex justify-content-center align-items-center flex-column text-center">
                        <img src="/assets/admin/img/modal/delete.svg" class="py-5" height="200" width="200">
                        <b class="mt-4">Are you sure you want to delete?</b>
                    </div>`,
                    buttons: {
                        no: {
                            btnClass: 'btn-default',
                        },
                        yes: {
                            btnClass: 'btn-warning',
                            action: function() {
                                preventRefresh(false);

                                confirmation.buttons.yes.setText(`<span class="spinner-border spinner-border-sm"></span> Please wait...`);
                                confirmation.buttons.yes.disable();
                                confirmation.buttons.no.hide();

                                $('#formDelete').submit();

                                return false;
                            }
                        },
                    }
                });
            })
            // ----- END BUTTON DELETE FORM -----


        })
    </script>

@endsection
