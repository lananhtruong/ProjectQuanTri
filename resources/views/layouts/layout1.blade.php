<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    @include('includes.head')
    <title>{{ config('layout1.name', 'Laravel') }}</title>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        @include('includes.topbar')

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        @include('includes.left_sidebar')

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    {{-- <div class="col-7 align-self-center">--}}
                    {{-- <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>--}}
                    {{-- <div class="d-flex align-items-center">--}}
                    {{-- <nav aria-label="breadcrumb">--}}
                    {{-- <ol class="breadcrumb m-0 p-0">--}}
                    {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a>--}}
                    {{-- </li>--}}
                    {{-- </ol>--}}
                    {{-- </nav>--}}
                    {{-- </div>--}}
                    {{-- </div>--}}
                    {{-- <div class="col-5 align-self-center">--}}
                    {{-- <div class="customize-input float-right">--}}
                    {{-- <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">--}}
                    {{-- <option selected>Aug 19</option>--}}
                    {{-- <option value="1">July 19</option>--}}
                    {{-- <option value="2">Jun 19</option>--}}
                    {{-- </select>--}}
                    {{-- </div>--}}
                    {{-- </div>--}}
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            @yield('content')

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            @include('includes.footer')

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    @include('includes.script_footer')
    @yield('js')
</body>

</html>
