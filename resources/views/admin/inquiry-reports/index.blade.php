@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Inquiry Reports</h4>
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a class="text-secondary" href="#">Reports</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inquiry Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="tableInquiryReports">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Subject</th>
                                    <th>Date Inquired</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($data) && !empty($data))
                                    @foreach ($data as $index => $dt)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <a href="{{ route('admin.inquiry-reports.view', ['id' => $dt->id]) }}" class="d-flex align-items-center justify-content-start gap-2">
                                                    <div>{{ $dt->full_name }}</div>
                                                </a>
                                            </td>
                                            <td>{{ $dt->email_address ?? '-' }}</td>
                                            <td>{{ $dt->subject ?? '-' }}</td>
                                            <td>{{ date('F d, Y h:i A', strtotime($dt->created_at)) }}</td>
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
            let tableInquiryReports = $('#tableInquiryReports')
                .css({ "min-width": "99%" })
                .removeAttr("width")
                .DataTable({
                    scrollX: true,
                    sorting: [],
                    scrollCollapse: true,
                    responsive: true,
                    columnDefs: [
                        { targets: 0,  width: 10  },
                        { targets: 1,  width: 150 },
                        { targets: 2,  width: 150 },
                        { targets: 3,  width: 150 },
                        { targets: 4,  width: 150  },
                    ],
                });
            // ----- END DATATABLES -----
        })
    </script>
@endsection
