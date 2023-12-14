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
    <link rel="stylesheet" href="{{asset('css/ckeditor.css')}}">

    <!-- Icons css -->
    <link href="{{asset('dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://coderthemes.com/ubold/layouts/assets/libs/quill/quill.core.css" rel="stylesheet"
        type="text/css" />
    <link href="https://coderthemes.com/ubold/layouts/assets/libs/quill/quill.snow.css" rel="stylesheet"
        type="text/css" />
    <link href="https://coderthemes.com/ubold/layouts/assets/libs/dropify/css/dropify.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body class="auth-fluid-pages pb-0">

    <div class="auth-fluid">
        @yield('content')
    </div>
    <!-- end auth-fluid-->

    <!-- Authentication js -->
    <script src="{{asset('dashboard/js/pages/authentication.init.js')}}"></script>
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
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/select2/js/select2.min.js"></script>
    <!-- Dropzone file uploads-->
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/dropify/js/dropify.min.js"></script>

    <!-- Quill js -->
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/quill/quill.min.js"></script>

    <!-- Dashboard 2 init -->
    <script src="{{asset('dashboard/js/pages/dashboard-2.init.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/form-fileuploads.init.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/form-quilljs.init.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>
    <script src="{{asset('js/ck-editor.js')}}"></script>

</body>


</html>