<?php
    $uri_mainpage = Request::segment(2);
    $uri_subpage  = Request::segment(3);
?>

<div class="sidebar p-2 py-md-3 @@cardClass version-2">
    <div class="container-fluid">
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <img class="sidebar-img img-thumbnail shadow" src="{{ asset('assets/website/img/logo/dalikiainc-fav.png') }}"
                height="50" width="50" alt="Dalkia Inc. Logo">
            <h4 class="sidebar-title mb-0 flex-grow-1 px-2 d-none d-xl-block">
                <span class="sm-txt fw-bold">Dalkia Inc.</span>
            </h4>
        </div>

        <div class="main-menu flex-grow-1 pb-3">
            <ul class="menu-list">
                <li>
                    <a class="m-link {{ $uri_mainpage == 'dashboard' ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('assets/admin/img/icons/dashboard.png') }}" alt="Dashboard" width="20" height="20">
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="m-link {{ $uri_mainpage == 'projects' ? 'active' : '' }}"
                        href="{{ route('admin.projects') }}">
                        <img src="{{ asset('assets/admin/img/icons/projects.png') }}" alt="Projects" width="20" height="20">
                        <span class="ms-2">Projects</span>
                    </a>
                </li>
                <li>
                    <a class="m-link {{ $uri_mainpage == 'certifications-and-awards' ? 'active' : '' }}"
                        href="{{ route('admin.certifications-and-awards') }}">
                        <img src="{{ asset('assets/admin/img/icons/certifications-and-awards.png') }}" alt="Certification & Awards" width="20" height="20">
                        <span class="ms-2">Certification & Awards</span>
                    </a>
                </li>
                <li>
                    <a class="m-link {{ $uri_mainpage == 'careers' ? 'active' : '' }}"
                        href="{{ route('admin.careers') }}">
                        <img src="{{ asset('assets/admin/img/icons/careers.png') }}" alt="Careers" width="20" height="20">
                        <span class="ms-2">Careers</span>
                    </a>
                </li>
                <li class="{{ in_array($uri_mainpage, ['company-history', 'mission-and-vision', 'scope-and-services']) ? 'collapsed' : '' }}">
                    <a class="m-link"
                        data-bs-toggle="collapse"
                        data-bs-target="#menu-company-information"
                        href="#"
                        aria-expanded="{{ in_array($uri_mainpage, ['company-overview', 'company-history', 'mission-and-vision', 'quality-policy', 'scope-and-services']) ? 'true' : 'false' }}">
                        <img src="{{ asset('assets/admin/img/icons/company-information.png') }}" alt="Company Information" width="20" height="20">
                        <span class="ms-2">Company Information</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <ul class="sub-menu collapse {{ in_array($uri_mainpage, ['company-overview', 'company-history', 'mission-and-vision', 'quality-policy', 'scope-and-services']) ? 'collapsed show' : '' }}" id="menu-company-information">
                        <li>
                            <a class="ms-link {{ $uri_mainpage == 'company-overview' ? 'active' : '' }}" href="{{ route('admin.company-overview') }}">Company Overview</a>
                        </li>
                        <li>
                            <a class="ms-link {{ $uri_mainpage == 'company-history' ? 'active' : '' }}" href="{{ route('admin.company-history') }}">History</a>
                        </li>
                        <li>
                            <a class="ms-link {{ $uri_mainpage == 'mission-and-vision' ? 'active' : '' }}" href="{{ route('admin.mission-and-vision') }}">Mission and Vision</a>
                        </li>
                        <li>
                            <a class="ms-link {{ $uri_mainpage == 'quality-policy' ? 'active' : '' }}" href="{{ route('admin.quality-policy') }}">Quality Policy</a>
                        </li>
                        <li>
                            <a class="ms-link {{ $uri_mainpage == 'scope-and-services' ? 'active' : '' }}" href="{{ route('admin.scope-and-services') }}">Scope and Services</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ $uri_mainpage == 'reports' ? 'collapsed' : '' }}">
                    <a class="m-link"
                        data-bs-toggle="collapse"
                        data-bs-target="#menu-reports"
                        href="#"
                        aria-expanded="{{ $uri_mainpage == 'reports' ? 'true' : 'false' }}">
                        <img src="{{ asset('assets/admin/img/icons/reports.png') }}" alt="Reports" width="20" height="20">
                        <span class="ms-2">Reports</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <ul class="sub-menu collapse {{ $uri_mainpage == 'reports' ? 'collapsed show' : '' }}" id="menu-reports">
                        <li>
                            <a class="ms-link {{ $uri_subpage == 'applicant-report' ? 'active' : '' }}" href="#">Applicant Report</a>
                        </li>
                        <li>
                            <a class="ms-link {{ $uri_subpage == 'inquiry-report' ? 'active' : '' }}" href="#">Inquiry Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="m-link {{ $uri_mainpage == 'company-settings' ? 'active' : '' }}"
                        href="{{ route('admin.company-settings') }}">
                        <img src="{{ asset('assets/admin/img/icons/settings.png') }}" alt="Company Settings" width="20" height="20">
                        <span class="ms-2">Company Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="wrapper">
    <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
        <div class="container-fluid">
            <nav class="navbar">
                <div class="d-flex">
                    <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
                        <span class="hamburger-icon">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
                        <span class="hamburger-icon">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                    </button>
                </div>
                <ul class="header-right justify-content-end d-flex align-items-center mb-0">
                    <li>
                        <div class="dropdown morphing scale-left notifications">
                            <a class="nav-link dropdown-toggle after-none" href="#" role="button"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-bell"></i>
                                <span class='badge bg-warning'
                                    id='lblCartCount'
                                    style="position: absolute; right: 0; top: 0;">
                                    0
                                </span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu shadow rounded-4 border-0 p-0 m-0">

                                <div class="card w380">
                                    <div class="card-header p-3">
                                        <h6 class="card-title mb-0">Notifications</h6>
                                    </div>
                                    <div class="tab-content card-body custom_scroll px-3 py-2">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <div class="d-flex btnViewNotification"
                                                        style="cursor: pointer;">
                                                        <img src="{{ asset('assets/admin/img/icons/default.png') }}" height="30" width="30">
                                                        <div class="flex-fill ms-3">
                                                            <div class="mb-0">
                                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, vero.
                                                            </div>
                                                            <small>January 10, 2020</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                            <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#"
                                role="button" data-bs-toggle="dropdown">
                                <img class="avatar img-thumbnail rounded-circle shadow"
                                    src="{{ asset('assets/admin/img/profile/default.png') }}"
                                    alt="">
                            </a>
                            <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                                <div class="card border-0 w240">
                                    <div class="card-body border-bottom d-flex">
                                        <img class="avatar rounded-circle"
                                            src="{{ asset('assets/admin/img/profile/default.png') }}"
                                            alt="">
                                        <div class="flex-fill ms-3">
                                            <h6 class="card-title mb-0">
                                                John Doe
                                            </h6>
                                            <small class="text-muted">
                                                System Administrator
                                            </small>
                                        </div>
                                    </div>
                                    <div class="list-group m-2 mb-3">
                                        <a class="list-group-item list-group-item-action border-0" href="#">
                                            <i class="w30 fa fa-user"></i>My Profile
                                        </a>
                                    </div>
                                    <a href="{{ route('auth.logout') }}"
                                        class="btn bg-secondary text-light text-uppercase rounded-0">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
