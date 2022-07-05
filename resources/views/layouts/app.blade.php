<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ExchangeSpace Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset("/vendors/mdi/css/materialdesignicons.min.css")}}>
    <link rel="stylesheet" href={{ asset("/vendors/css/vendor.bundle.base.css")}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{ asset("/images/favicon.ico")}} />
</head>

<body>
    <div class="container-scroller">

        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('content')
        @include('layouts.footer')
    