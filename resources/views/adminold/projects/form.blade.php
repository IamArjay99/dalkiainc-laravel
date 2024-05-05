@extends('admin.layouts.app')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-6">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="mb-0">Projects</h3>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Projects</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('admin.projects') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="white_card card_height_100 mb_30">
            <div class="white_card_body">
                <div class="row">
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection