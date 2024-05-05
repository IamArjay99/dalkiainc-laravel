@extends('admin.layouts.app')

@section('content')

    <?php
        // CREATE
        if (!isset($form_todo) || $form_todo == 'CREATE')
        {
            // TABLE FIELDS
            $id                  = null;
            $name                = old('name');
            $project_category_id = old('project_category_id');
            $client              = old('client');
            $description         = old('description');
            $floor               = old('floor');
            $scope_of_work       = old('scope_of_work');
            $image               = old('image');
            $status              = old('status');

            $prevent_refresh = 'true';
            $form_action = route('admin.projects.save');
            $form_method = 'POST';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                target-module='". route('admin.projects') ."'
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
            $id                  = $data->id;
            $name                = $data->name;
            $project_category_id = $data->project_category_id;
            $client              = $data->client;
            $description         = $data->description;
            $floor               = $data->floor;
            $scope_of_work       = $data->scope_of_work;
            $image               = $data->image;
            $status              = $data->status;

            $prevent_refresh = 'false';
            $form_action = '';
            $form_method = '';
            $form_required = "";
            $form_button = "
            <div class='d-flex justify-content-end'>
                <button type='button'
                    class='btn btn-danger btnDeleteForm'
                    title='". $name ."'>
                    <i class='bi bi-trash'></i> Delete
                </button>
                <a href=". route('admin.projects.edit', ['id' => $id]) ."
                    class='btn btn-warning mx-1'>
                    <i class='bi bi-pencil'></i> Edit
                </a>
            </div>";
        }

        // UPDATE
        else if ($form_todo == 'UPDATE')
        {
            // TABLE FIELDS
            $id                  = old('id') ?? $data->id;
            $name                = old('name') ?? $data->name;
            $project_category_id = old('project_category_id') ?? $data->project_category_id;
            $client              = old('client') ?? $data->client;
            $description         = old('description') ?? $data->description;
            $floor               = old('floor') ?? $data->floor;
            $scope_of_work       = old('scope_of_work') ?? $data->scope_of_work;
            $image               = old('image') ?? $data->image;
            $image_store         = old('image_store') ?? $data->image;
            $status              = old('status') ?? $data->status;

            $prevent_refresh = 'true';
            $form_action = route('admin.projects.update', ['id' => $id]);
            $form_method = 'PUT';
            $form_required = "<code>*</code>";
            $form_button = "
            <button type='button'
                class='btn btn-danger btnDeleteForm'
                title='". $name ."'>
                <i class='bi bi-trash'></i> Delete
            </button>
            <button type='button'
                target-module='". route('admin.projects') ."'
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
                    <div class="col">
                        <h4 class="mb-0">{{ $page_title }}</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.projects') }}">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col text-end">
                        <button type="button"
                            target-module="{{ route('admin.projects') }}"
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
                            id="formProjects"
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
                                        <label for="name" class="col-sm-2 col-form-label">
                                            Project Name <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $name ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="name"
                                                    name="name"
                                                    placeholder="Enter project name"
                                                    value="{{ $name }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="project_category_id" class="col-sm-2 col-form-label">
                                            Project Category <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $data->project_category ?? '-' }}"
                                                    disabled>
                                            @else
                                                <select name="project_category_id" id="project_category_id" class="form-select" required select2>
                                                    <option value="" selected disabled>Please select project category</option>
                                                    @foreach ($form_data['project_category'] as $dt)
                                                        <option value="{{ $dt->id }}"
                                                            {{ $dt->id == $project_category_id ? 'selected' : '' }}>
                                                            {{ $dt->name }}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            Client
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $client ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="client"
                                                    name="client"
                                                    placeholder="Enter client"
                                                    value="{{ $client }}"
                                                    autocomplete="off">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            Description
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $description ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="description"
                                                    name="description"
                                                    placeholder="Enter description"
                                                    value="{{ $description }}"
                                                    autocomplete="off">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            Scope of Work <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $scope_of_work ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="scope_of_work"
                                                    name="scope_of_work"
                                                    placeholder="Enter scope of work"
                                                    value="{{ $scope_of_work }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="client" class="col-sm-2 col-form-label">
                                            No. of Floors <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $floor ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="floor"
                                                    name="floor"
                                                    placeholder="Enter number of floors"
                                                    value="{{ $floor }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <img class="preview-image mt-2" src="{{ asset('uploads/img/projects/'. (old('image_store') ?? $image ?? 'default.png')) }}" 
                                                    alt="image" height="250" width="250">
                                            @else
                                                <input type="file" class="form-control" id="image" name="image" placeholder="image">
                                                <input type="hidden" class="form-control" id="image_store" name="image_store" placeholder="image_store">
                                                <img class="preview-image mt-2" src="{{ asset('uploads/img/projects/'. (old('image_store') ?? $image ?? 'default.png')) }}" alt="image" height="200" width="200">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <?= $data->status == 'COMPLETED' ? "<span class='badge bg-success'>COMPLETED</span>" : "<span class='badge bg-warning'>ONOGOING</span></span>" ?>
                                            @else
                                                <select name="status" id="status" class="form-select" select2>
                                                    <option value="COMPLETED" {{ $status == 'COMPLETED' ? 'selected' : '' }}>COMPLETED</option>
                                                    <option value="ONGOING" {{ $status == 'ONGOING' ? 'selected' : '' }}>ONGOING
                                                    </option>
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
                            <form action='{{ route('admin.projects.delete', ['id' => $id]) }}' method='GET' id='formDelete'>
                                @csrf
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
            $(document).on('submit', '#formProjects', function(e) {
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
                                    $('#formProjects').attr('validated', 'true').submit();

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
