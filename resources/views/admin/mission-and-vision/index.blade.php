@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Mission and Vision</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Company Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mission and Vision</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row my-2">
                            <label for="year" class="col-sm-2 col-form-label">
                                Mission
                            </label>
                            <div class="col-sm-10">
                                <textarea name="mission" id="mission" rows="8" style="resize: none;"
                                    class="form-control" disabled>{{ $data->mission ?? '-' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="year" class="col-sm-2 col-form-label">
                                Vision
                            </label>
                            <div class="col-sm-10">
                                <textarea name="vision" id="vision" rows="8" style="resize: none;"
                                    class="form-control" disabled>{{ $data->vision ?? '-' }}</textarea>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class='d-flex justify-content-end'>
                                <a href="{{ route('admin.mission-and-vision.edit', ['id' => $data->id]) }}"
                                    class='btn btn-warning mx-1'>
                                    <i class='bi bi-pencil'></i> Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
