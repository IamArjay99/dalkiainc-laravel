<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ URL::to('/') }}">
    <meta name="asset-url" content="{{ env('ASSET_URL', '/') }}">
    <title>Dalkia Inc. - {{ $page_title ?? '' }}</title>

    <link href="{{ asset('assets/website/img/logo/dalikiainc-fav.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/jquery-confirm.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/cssbundle/daterangepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/luno-style.css') }}">


    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/custom-loader.css') }}">

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/admin/js/plugins.js') }}"></script>

</head>

<body class="layout-1 font-raleway radius-0" data-luno="theme-green">

	<div id="pageloader">
		<div class="cssload-loader"></div>
		<h5 class="cssload-text">Please wait...</h5>
	</div>

    <div class="sidebar p-2 py-md-3 @@cardClass version-2">
        <div class="container-fluid">
            <div class="title-text d-flex align-items-center mb-4 mt-1">
                <img class="sidebar-img img-thumbnail shadow" src="{{ asset('assets/website/img/logo/logo.png') }}"
                    height="50" width="50" alt="Dalkia Inc. Logo">
                <h4 class="sidebar-title mb-0 flex-grow-1 px-2 d-none d-xl-block">
                    <span class="sm-txt fw-bold" style="color: #d0021b;">Dalkia Inc.</span>
                </h4>
            </div>

            <div class="main-menu flex-grow-1 pb-3">
                <ul class="menu-list">
                    <li>
                        <a class="m-link" href="layouts.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewbox="0 0 16 16">
                            <path
                                d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z">
                            </path>
                            <path class="fill-secondary" d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z">
                            </path>
                            </svg>
                            <span class="ms-2">Layouts</span>
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

        <main id="main" class="main">

            <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
                <div class="container-fluid">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h4 class="mb-0">Profile</h4>
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a class="text-secondary" href="#">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>  
        
            <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0">
                <div class="container-fluid">
                </div>
            </div>
        
        </main>

        <div class="modal fade" id="custom-modal" tabindex="-1" data-bs-backdrop="static" data-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mb-0">Title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <footer class="page-footer px-xl-4 px-sm-2 px-0 pt-3 d-flex justify-content-center align-items-center">
            <p class="text-muted">© 2024 <a href="#" title="Dalkia Inc.">Dalkia Inc.</a>, All Rights Reserved.</p>
        </footer>
    </div>

    <!-- Jquery Page Js -->
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('assets/admin/js/bundle/apexcharts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bundle/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bundle/daterangepicker.bundle.js') }}"></script>
    <!-- Vendor Script -->
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery-confirm.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bs5-toast.js') }}"></script>
    <script src="{{ asset('assets/admin/js/drag-arrange.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <?php
    if (Session::get('status'))
    {
    echo "
    <script>
        $(window).on('load', function() {
            showToast('". Session::get('status') ."', '". Session::get('message') ."')
        })
    </script>";
    }
    ?>


    <script>
        function updateRealTime() {
            $('#realTime').html(moment(new Date).format('hh:mm:ss A'));
        }

        $(function() {
            setInterval(updateRealTime, 1000);
        });
    </script>

    </body>
</html>
