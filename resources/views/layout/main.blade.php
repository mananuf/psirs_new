<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf_token" id="csrf" content="{{ csrf_token() }}" />

<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawsome.min.css')}}">
<link rel="stylesheet" href="{{asset('fonts/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<title>{{config('app.name', 'PSIRS')}}</title>
<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>

    @include('layout.partials.top-bar')

    @include('layout.partials.navbar')

    @yield('content')

    @include('layout.partials.footer')


    <div class="popup">
        <div class="popup-content">
        <button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
        <form>
            <div class="input-group search-box">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        </div>
    </div>

    <div class="go-top"><i class="fas fa-chevron-up"></i></div>

    <script data-cfasync="false" src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/meanmenu.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/TweenMax.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('js/appear.min.js')}}"></script>
    <script src="{{asset('js/odometer.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        $(document).ready(function() {
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        };
        });
        @if(Session::has('message'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        }
        toastr.success("{{ session('message') }}");
        @endif
        
        @if(Session::has('success'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        }
        toastr.success("{{ session('success') }}");
        @endif
        
        @if(Session::has('error'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        }
        toastr.error("{{ session('error') }}");
        @endif
        
        @if(Session::has('info'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        }
        toastr.info("{{ session('info') }}");
        @endif
        
        @if(Session::has('warning'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "150",
        "hideDuration": "500",
        "timeOut": "1000",
        "extendedTimeOut": "500",
        }
        toastr.warning("{{ session('warning') }}");
        @endif
        toastr.success("This is a test success message.");
    </script>
</body>

</html>