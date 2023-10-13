<div class="navbar-area">

    <div class="main-responsive-nav">
        <div class="container-fluid plr-100">
            <div class="mobile-nav">
                <a href="{{route('home')}}" class="small-logo"><img src="{{asset('images/psirs-logo.png')}}" class="w-25" alt="logo" /></a>
                <ul class="menu-sidebar menu-small-device">
                    <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                    <li><a class="default-button" href="contact.html">Get A Quote <i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-nav plr-100">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('images/psirs-logo.png')}}" class="logo-w-35" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">{{__('Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('About Us')}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">{{__('What We Do')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Vision & Mission')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Ethical Conduct')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Organogram')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('Directorate')}}</a>
                            <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">{{__('Admin & Personnel Mgt.')}}</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">{{__('Tax Academy')}}</a></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">{{__('Units')}}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">{{__('ICT Unit')}}</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">{{__('Legal Unit')}}</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">{{__('Internal Audit Unit')}}</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">{{__('Library')}}</a></li>
                                    </ul>    
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('Tax Report')}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Budget')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Tax Statistics')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{('IGR Reports')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('Tax Calculator')}} </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Individual Calculator')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Organization Mandate')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('Documentation')}} </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Tax Report & Related Doc.')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Audit Report & Other Doc.')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Journal Publication')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Career</a></li>
                    </ul>
                    <div class="menu-sidebar">
                        <ul>
                            {{-- <li><button class="popup-button"><i class="fas fa-search"></i></button></li> --}}
                            <li><a class="default-button" href="contact.html">Get in Touch</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>