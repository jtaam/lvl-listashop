<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{config('app.name')}} - Dashboard - @yield('title')</title>

    @include('backend.dashboard.partials.head')

    @stack('css')
</head>

<body class="theme-red">
<!-- Page Loader -->
@include('backend.dashboard.inc.page-loader')
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
@include('backend.dashboard.inc.search')
<!-- #END# Search Bar -->
<!-- Top Bar -->
@include('backend.dashboard.inc.topbar')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('backend.dashboard.inc.left-sidebar')
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    @include('backend.dashboard.inc.right-sidebar')
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>

@include('backend.dashboard.partials.footer')

@stack('js')
</body>

</html>
