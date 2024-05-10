@extends('admin.layouts.app')

@section('content')

    <?php

        // READ
        if ($form_todo == 'READ')
        {
            // TABLE FIELDS
            $id            = $data->id;
            $job_title     = $data->job_title;
            $full_name     = $data->full_name;
            $email_address = $data->email_address;
            $subject       = $data->subject;
            $message       = $data->message;
            $resume        = $data->resume;

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
                <a href=". route('admin.applicant-reports.edit', ['id' => $id]) ."
                    class='btn btn-warning mx-1'>
                    <i class='bi bi-pencil'></i> Edit
                </a>
            </div>";
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
                            <li class="breadcrumb-item"><a class="btnCancel" href="#" target-module="{{ route('admin.applicant-reports') }}">Reports</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
                        </ol>
                    </div>
                    <div class="col-3 text-end">
                        <button type="button"
                            target-module="{{ route('admin.applicant-reports') }}"
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
                            id="formReports"
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
                                        <label for="full_name" class="col-sm-2 col-form-label">
                                            Full Name <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $full_name ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="full_name"
                                                    name="full_name"
                                                    placeholder="Enter full name"
                                                    value="{{ $full_name }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="email_address" class="col-sm-2 col-form-label">
                                            Email Address <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $email_address ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="email_address"
                                                    name="email_address"
                                                    placeholder="Enter email address"
                                                    value="{{ $email_address }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="subject" class="col-sm-2 col-form-label">
                                            Subject <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <input type="text"
                                                    class="form-control"
                                                    value="{{ $subject ?? '-' }}"
                                                    disabled>
                                            @else
                                                <input type="text"
                                                    class="form-control"
                                                    id="subject"
                                                    name="subject"
                                                    placeholder="Enter email address"
                                                    value="{{ $subject }}"
                                                    autocomplete="off"
                                                    required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="message" class="col-sm-2 col-form-label">
                                            Message <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            @if ($form_todo == 'READ')
                                                <textarea name="message" id="message" rows="8" style="resize: none;"
                                                    class="form-control" disabled>{{ $message ?? '-' }}</textarea>
                                            @else
                                                <textarea name="message" id="message" rows="8" style="resize: none;"
                                                    class="form-control" autocomplete="off" required>{{ $message }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row my-2">
                                        <label for="resume" class="col-sm-2 col-form-label">
                                            Resume <?= $form_required ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <a href="{{ asset('uploads/resume/' . $resume)}}"
                                                target="_blank"
                                                style="padding: 5px 10px;
                                                    border-radius: 10px;
                                                    background: #b5e4ce;
                                                    border: 1px solid green;
                                                    color: green;">
                                                {{ $resume }}
                                            </a>
                                        </div>
                                    </div>
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

        })
    </script>

@endsection
