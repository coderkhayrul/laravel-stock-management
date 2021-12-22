@include('includes.header')
<!-- Pre-loader -->
@include('includes.preloader')
<!-- End Preloader-->
<div id="wrapper">
    <!-- Topbar Start -->
    @include('includes.topbar')
    <!-- end Topbar -->
    <div class="left-side-menu">
        <div class="h-100" data-simplebar>
            <!--- Sidemenu -->
            @include('includes.sidebar')
            <!-- End Sidebar -->
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                @yield('content')
            </div> <!-- container -->
        </div> <!-- content -->
        @include('includes.footer')
