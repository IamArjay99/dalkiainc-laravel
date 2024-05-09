@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Scope and Services</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Scope and Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 text-end mb-3">
                            <a href="{{ route('admin.scope-and-services.create') }}" class="btn btn-outline-primary px-2 py-1 w-sm-100">
                                <i class="bi bi-plus-lg"></i> New
                            </a>
                        </div>

                        <table class="table table-striped table-hover" id="tableScopeAndServices">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($data) && !empty($data))
                                    @foreach ($data as $index => $dt)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <a href="{{ route('admin.scope-and-services.view', ['id' => $dt->id]) }}" 
                                                    class="d-flex align-items-center justify-content-start gap-2">
                                                    <img src="{{ asset('uploads/img/scope-and-services/' . $dt->image ?? 'default.png') }}" 
                                                        alt="CertificationAwards" width="50" height="50">
                                                    <div>{{ $dt->title }}</div>
                                                </a>
                                            </td>
                                            <td>{{ $dt->description ?? '-' }}</td>
                                            <td class="text-end">
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li>
                                                        <a class="dropdown-item" 
                                                            href="{{ route('admin.scope-and-services.edit', ['id' => $dt->id]) }}">
                                                            <i class="bi bi-pencil"></i> Edit
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item btnDeleteForm"
                                                            title="{{ $dt->title }}"
                                                            index="{{ $index }}"
                                                            href="#"><i class="bi bi-trash"></i> Delete</a>

                                                        <!-- ----- FORM DELETE ----- -->
                                                        <form action="{{ route('admin.scope-and-services.delete', ['id' => $dt->id]) }}" method="POST" id="formDelete{{ $index }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <!-- ----- END FORM DELETE ----- -->
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            // ----- DATATABLES -----
            let tableScopeAndServices = $('#tableScopeAndServices')
                .css({ "min-width": "99%" })
                .removeAttr("width")
                .DataTable({
                    sorting: [],
                    scrollCollapse: true,
                    responsive: true,
                    columnDefs: [
                        { targets: 0,  width: 10  },
                        { targets: 1,  width: 200 },
                        { targets: 2,  width: 300 },
                        { targets: 3,  width: 10  },
                    ],
                });
            // ----- END DATATABLES -----

            // ----- BUTTON DELETE FORM -----
            $(document).on('click', '.btnDeleteForm', function(e) {
                e.preventDefault();
                let index = $(this).attr('index');
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

                                confirmation.buttons.yes.setText(`<span class="spinner-border spinner-border-sm"></span> Please wait...`);
                                confirmation.buttons.yes.disable();
                                confirmation.buttons.no.hide();

                                $('#formDelete'+index).submit();

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
