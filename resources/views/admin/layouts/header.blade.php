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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="layout-1 font-raleway radius-0" data-luno="theme-black">

	<div id="pageloader">
		<div class="cssload-loader"></div>
		<h5 class="cssload-text">Please wait...</h5>
	</div>