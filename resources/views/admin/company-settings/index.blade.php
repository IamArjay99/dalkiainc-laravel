@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Company Settings</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Company Settings</li>
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
                            <label for="address" class="col-sm-2 col-form-label">
                                Address
                            </label>
                            <div class="col-sm-10">
                                <textarea name="address" id="address" rows="3" style="resize: none;"
                                    class="form-control" disabled>{{ $data->address ?? '-' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="contact_number" class="col-sm-2 col-form-label">
                                Contact Number
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="contact_number" id="contact_number"
                                    value="{{ $data->contact_number ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="email_address" class="col-sm-2 col-form-label">
                                Email Address
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_address" id="email_address"
                                    value="{{ $data->email_address ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="business_hours" class="col-sm-2 col-form-label">
                                Business Hours
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="business_hours" id="business_hours"
                                    value="{{ $data->business_hours ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="facebook_link" class="col-sm-2 col-form-label">
                                Facebook Link
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook_link" id="facebook_link"
                                    value="{{ $data->facebook_link ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="instagram_link" class="col-sm-2 col-form-label">
                                Instagram Link
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="instagram_link" id="instagram_link"
                                    value="{{ $data->instagram_link ?? '-' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="twitter_link" class="col-sm-2 col-form-label">
                                Twitter Link
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter_link" id="twitter_link"
                                    value="{{ $data->twitter_link ?? '-' }}" disabled>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class='d-flex justify-content-end'>
                                <a href="{{ route('admin.company-settings.edit', ['id' => $data->id]) }}"
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
