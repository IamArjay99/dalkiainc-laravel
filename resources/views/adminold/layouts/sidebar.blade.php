<?php
    $segment2 = request()->segment(2);
?>

<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/website/img/logo/logo.png') }}" alt></a>
        <a class="small_logo" href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/website/img/logo/dalikiainc-fav.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a href="{{ route('admin.dashboard') }}" aria-expanded="false" class="{{ $segment2 == 'dashboard' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/dashboard.png') }}" alt>
                </div>
                <div class="nav_title active">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="{{ route('admin.projects') }}" aria-expanded="false" class="{{ $segment2 == 'projects' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/project.png') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Projects</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="#" aria-expanded="false" class="{{ $segment2 == 'certifications-and-awards' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/awards.png') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Certifications & Awards</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="#" aria-expanded="false" class="{{ $segment2 == 'careers' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/career.png') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Careers</span>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false" class="{{ $segment2 == 'company-information' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/company.png') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Company Information </span>
                </div>
            </a>
            <ul>
                <li><a href="#">Our History</a></li>
                <li><a href="#">Our Mission and Vision</a></li>
                <li><a href="#">Scope and Services</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false" class="{{ $segment2 == 'reports' ? 'active' : '' }}">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/adminold/img/nav-icon/report.png') }}" alt>
                </div>
                <div class="nav_title">
                    <span>Reports </span>
                </div>
            </a>
            <ul>
                <li><a href="#">Applicant Report</a></li>
                <li><a href="#">Inquiry Report</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="{{ asset('assets/adminold/img/line_img.png') }}" alt>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="{{ asset('assets/adminold/img/transfer/4.png') }}" alt="#">
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                    <small class="text-muted">System Administrator</small>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    <a href="{{ route('auth.logout') }}">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    