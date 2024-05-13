@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Users</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="tableUser">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Status</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($data) && !empty($data))
                                    @foreach ($data as $index => $dt)
                                        @php
                                            $status = $dt->status == '1' ? "<span class='badge bg-success'>Active</span>" : "<span class='badge bg-warning'>Inactive</span>";
                                        @endphp

                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <a href="{{ route('admin.users.view', ['id' => $dt->id]) }}" class="d-flex align-items-center justify-content-start gap-2">
                                                    <div>{{ $dt->name }}</div>
                                                </a>
                                            </td>
                                            <td>{{ $dt->email ?? '-' }}</td>
                                            <td><?= $status ?></td>
                                            <td class="text-end">
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li>
                                                        <a class="dropdown-item" 
                                                            href="{{ route('admin.users.edit', ['id' => $dt->id]) }}">
                                                            <i class="bi bi-pencil"></i> Edit
                                                        </a>
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
            let tableUser = $('#tableUser')
                .css({ "min-width": "99%" })
                .removeAttr("width")
                .DataTable({
                    scrollX: true,
                    // scrollY: '300px',
                    sorting: [],
                    scrollCollapse: true,
                    responsive: true,
                    columnDefs: [
                        { targets: 0,  width: 10  },
                        { targets: 1,  width: 150 },
                        { targets: 2,  width: 200 },
                        { targets: 3,  width: 100 },
                        { targets: 4,  width: 10  },
                    ],
                });
            // ----- END DATATABLES -----

        })
    </script>
@endsection
