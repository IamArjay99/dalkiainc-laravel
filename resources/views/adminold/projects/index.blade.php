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
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>

        <div class="white_card card_height_100 mb_30">
            <div class="white_card_body">
                <div class="row">
                    <div class="col-12">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Project Name</th>
                                    <th>Project Category</th>
                                    <th>Scope of Work</th>
                                    <th>No. of Floors</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test Project</td>
                                    <td>Building</td>
                                    <td>Construction</td>
                                    <td>5</td>
                                    <td>
                                        <span class="badge badge-success">COMPLETED</span>
                                        <span class="badge badge-danger">ONGOING</span>
                                    </td>
                                    <td>
                                        <div class="action_btns d-flex align-items-center justify-content-center">
                                            <a href="{{ route('admin.projects', 1) }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('scripts')

<script>

    $("#table").DataTable({
        searching: true,
    });

</script>

@endsection