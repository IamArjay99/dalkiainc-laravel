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
            <div class="row g-3">
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('admin.projects') }}">
                        <div class="card overflow-hidden h-100 border-0" style="background: linear-gradient(240deg, #dc3545, #136f7e0d);">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <img src="{{ asset('assets/admin/img/icons/dashboard-project.png') }}" alt="Projects"
                                    width="40" height="40" class="position-absolute top-0 end-0 mt-4 me-3">
                                <div class="mb-2 text-uppercase pe-5">TOTAL PROJECTS</div>
                                <div>
                                    <span class="h3">{{ $data['total_projects'] ?? 0 }}</span> 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('admin.projects') }}">
                        <div class="card overflow-hidden h-100 border-0" style="background: linear-gradient(240deg, #7caad2, #136f7e0d);">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <img src="{{ asset('assets/admin/img/icons/dashboard-ongoing.png') }}" alt="Projects"
                                    width="40" height="40" class="position-absolute top-0 end-0 mt-4 me-3">
                                <div class="mb-2 text-uppercase pe-5">ONGOING PROJECTS</div>
                                <div>
                                    <span class="h3">{{ $data['ongoing_projects'] ?? 0 }}</span> 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('admin.projects') }}">
                        <div class="card overflow-hidden h-100 border-0" style="background: linear-gradient(240deg, #53b577, #136f7e0d);">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <img src="{{ asset('assets/admin/img/icons/dashboard-award.png') }}" alt="Projects"
                                    width="40" height="40" class="position-absolute top-0 end-0 mt-4 me-3">
                                <div class="mb-2 text-uppercase pe-5">TOTAL CERTIFICATION & AWARDS</div>
                                <div>
                                    <span class="h3">{{ $data['total_awards'] }}</span> 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('admin.projects') }}">
                        <div class="card overflow-hidden h-100 border-0" style="background: linear-gradient(240deg, #a04e71, #136f7e0d);">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <img src="{{ asset('assets/admin/img/icons/dashboard-career.png') }}" alt="Projects"
                                    width="40" height="40" class="position-absolute top-0 end-0 mt-4 me-3">
                                <div class="mb-2 text-uppercase pe-5">TOTAL CAREERS</div>
                                <div>
                                    <span class="h3">{{ $data['total_careers'] }}</span> 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-30 text-uppercase">Website Analytics</h5>
                            <canvas id="myChart"></canvas>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const ctx = document.getElementById('myChart');
    
    let website_data = {!! json_encode($data['website_data']) !!};
    let total_users = website_data.map(x => Number(x.total_users));
    let total_page_views = website_data.map(x => Number(x.total_page_views));

    const data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
                label: 'Users',
                data: total_users,
                borderColor: '#3771e0',
                backgroundColor: '#3771e0'
            },
            {
                label: 'Page Views',
                data: total_page_views,
                borderColor: '#f371e0',
                backgroundColor: '#f371e0'
            },
        ]
    };

    new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    });
</script>

@endsection
