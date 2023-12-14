@extends('layout.auth.master')
@section('content')
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="p-3">
    
                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-brand">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="{{asset('images/psirs-logo.png')}}" alt="" height="70">
                            </span>
                        </a>
    
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="{{asset('images/psirs-logo.png')}}" alt="" height="22">
                            </span>
                        </a>
                    </div>
                </div>
    
                <!-- title-->
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>
    
                <!-- form -->
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required=""
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <a href="#" class="text-muted float-end"><small>Forgot your
                                password?</small></a>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>
    
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn dark-green-btn" type="submit">Log In </button>
                    </div>
                </form>
                <!-- end form-->
    
            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->
    
    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center dark-green-bg">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">PSIRS Dashboard!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> {{("Taxation is not merely a civic duty; it's a powerful investment in the collective well-being of society. Embrace the
            opportunity to contribute, for in each tax paid, we pave the way for education, infrastructure, and a brighter future
            for all. Your financial participation today shapes a prosperous tomorrow for everyone.")}} <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                - Random Qoute
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
@endsection