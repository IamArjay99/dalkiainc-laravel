@extends('admin.layouts.app')

@section('content')

    <?php
        // CREATE
        if (!isset($form_todo) || $form_todo == 'CREATE')
        {
            // TABLE FIELDS
            $id          = null;
            $title       = old('title');
            $description = old('description');
            $status      = old('status');
            $image       = old('image');
            $image_store = old('image_store') ?? 'default.png';

            $prevent_refresh = 'true';
            $form_action = route('admin.certifications-and-awards.save');
            $form_method = 'POST';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                target-module='". route('admin.certifications-and-awards') ."'
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
            $id          = $data->id;
            $title       = $data->title;
            $description = $data->description;
            $status      = $data->status;
            $image       = $data->image;
            $image_store = $data->image ?? 'default.png';

            $prevent_refresh = 'false';
            $form_action = '';
            $form_method = '';
            $form_required = "";
            $form_button = "
            <div class='d-flex justify-content-end'>
                <button type='button'
                    class='btn btn-danger btnDeleteForm'
                    title='". $title ."'>
                    <i class='bi bi-trash'></i> Delete
                </button>
                <a href=". route('admin.certifications-and-awards.edit', ['id' => $id]) ."
                    class='btn btn-warning mx-1'>
                    <i class='bi bi-pencil'></i> Edit
                </a>
            </div>";
        }

        // UPDATE
        else if ($form_todo == 'UPDATE')
        {
            // TABLE FIELDS
            $id          = old('id') ?? $data->id;
            $title       = old('title') ?? $data->title;
            $description = old('description') ?? $data->description;
            $status      = old('status') ?? $data->status;
            $image       = old('image') ?? $data->image;
            $image_store = old('image_store') ?? $data->image;

            $prevent_refresh = 'true';
            $form_action = route('admin.certifications-and-awards.update', ['id' => $id]);
            $form_method = 'PUT';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                class='btn btn-danger btnDeleteForm'
                title='". $title ."'>
                <i class='bi bi-trash'></i> Delete
            </button>
            <button type='button'
                target-module='". route('admin.certifications-and-awards') ."'
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
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.certifications-and-awards') }}">Certifications and Awards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col-3 text-end">
                        <button type="button"
                            target-module="{{ route('admin.certifications-and-awards') }}"
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
                            id="formCertificationsAndAwards"
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
                                        <label for="title" class="col-sm-2 col-form-label">
                                            Title <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $title ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="title"
                                                    name="title"
                                                    placeholder="Enter title"
                                                    value="{{ $title }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            Description <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <textarea name="description" id="description" rows="8" style="resize: none;"
                                                    class="form-control" disabled>{{ $description ?? '-' }}</textarea>
                                            @else
                                                <textarea name="description" id="description" rows="8" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="status" class="col-sm-2 col-form-label">
                                            Status <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10 d-flex align-items-center">
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
                                    <div class="form-group row my-2">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <img class="preview-image mt-2" src="{{ asset('uploads/img/certifications-and-awards/'. (old('image_store') ?? $image ?? 'default.png')) }}" 
                                                    alt="image" height="250" width="250">
                                            @else
                                                <input type="file" class="form-control" id="image" name="image" placeholder="image" accept="image/*" onchange="checkFile(this)">
                                                <input type="hidden" class="form-control" id="image_store" name="image_store" placeholder="image_store" value="{{ $image_store }}">
                                                <small class="text-danger">File format: .jpg, .jpeg, .png</small>
                                                <div>
                                                    <img class="preview-image mt-2" src="{{ asset('uploads/img/certifications-and-awards/'. (old('image_store') ?? $image ?? 'default.png')) }}" alt="image" height="200" width="200">
                                                    <button type="button" id="removePreview" class="btn btn-default rounded position-absolute mt-2" 
                                                        onclick="removePreview()">x</button>
                                                </div>
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
                            <form action='{{ route('admin.certifications-and-awards.delete', ['id' => $id]) }}' method='POST' id='formDelete'>
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

        function checkFile(input) {
            if (input.files && input.files[0]) {
                let file = input.files[0];
                let filename = file.name;
                let extension = filename.split('.').pop();
                let filesize = file.size / 1024 / 1024;

                if (['png', 'jpg', 'jpeg'].indexOf(extension) == -1) {
                    showToast('error', 'File type is not supported');
                    $('#image').val('');
                }
                else if (filesize > 2) {
                    showToast('error', 'File size is too large. Max file size is 2MB');
                    $('#image').val('');
                }
                else {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $('.preview-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        }

        $(document).ready(function() {

            // ----- BUTTON REMOVE IMAGE -----
            $(document).on('click', '#removePreview', function()
            {
                $('#image_store').val('default.png');
                $('.preview-image').attr('src', '/uploads/img/certifications-and-awards/default.png');
                $('#image').val('');
            });

            // ----- END BUTTON REMOVE IMAGE -----

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
            $(document).on('submit', '#formCertificationsAndAwards', function(e) {
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
                                    $('#formCertificationsAndAwards').attr('validated', 'true').submit();

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
