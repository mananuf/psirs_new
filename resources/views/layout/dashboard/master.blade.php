<!DOCTYPE html>
<html lang="en" data-layout="two-column" data-two-column-color="brand">


<!-- Mirrored from coderthemes.com/ubold/layouts/saas/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 03:57:12 GMT -->

<head>
    <meta charset="utf-8" />
    <title>{{config('app.name', 'PSIRS')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Bankat Mananaf, Jurbe Bawa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    <!-- plugin css -->
    <link
        href="https://coderthemes.com/ubold/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{asset('dashboard/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('dashboard/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout.dashboard.inc.left-side-menu')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            @include('layout.dashboard.inc.topbar')
            <!-- ========== Topbar End ========== -->

            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{config('app.name', 'PSIRS')}}</a></li>
                                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li> --}}
                                        <li class="breadcrumb-item active">{{$pageTitle}}</li>
                                    </ol>
                                </div>
                                <h4 class="page-title dark-green-text">{{$pageTitle}}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    {{-- content --}}
                    @yield('content')
                    {{-- end content --}}
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('layout.dashboard.inc.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    {{-- @include('layout.dashboard.inc.theme-settings') --}}

    <!-- Vendor js -->
    <script src="{{asset('dashboard/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('dashboard/js/app.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script
        src="https://coderthemes.com/ubold/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="https://coderthemes.com/ubold/layouts/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
    </script>

    <!-- Dashboard 2 init -->
    <script src="{{asset('dashboard/js/pages/dashboard-2.init.js')}}"></script>

</body>


</html>