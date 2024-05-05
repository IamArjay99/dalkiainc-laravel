@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">
    <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
        <div class="container-fluid">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h4 class="mb-0">Dashboard</h4>
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
                <div class="col text-end">
                    <h6 class="mb-0 fw-bold" id="realTime">{{ date('h:i:s A') }}</h6>
                    <small>{{ date('F d, Y') }}</small>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
        <div class="container-fluid">
        </div>
    </div>
</main>
@endsection
