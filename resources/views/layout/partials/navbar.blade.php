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
                            <a href="{{route('home')}}" class="nav-link @if (request()->routeIs('home'))active @endif">{{__('Home')}}</a>
                        </li>
                        <li class="nav-item">
                            @php
                                $aboutRouteIsActive= request()->routeIs('about.what-we-do') 
                                                || request()->routeIs('about.vision-and-mission')
                                                || request()->routeIs('about.ethical-conduct');
                            @endphp
                            <a href="#" class="nav-link dropdown-toggle @if($aboutRouteIsActive) active @endif">{{__('About Us')}}</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('about.what-we-do')}}" class="nav-link @if (request()->routeIs('about.what-we-do'))active @endif">{{__('What We Do')}}</a></li>
                                <li class="nav-item"><a href="{{route('about.vision-and-mission')}}" class="nav-link @if (request()->routeIs('about.vision-and-mission'))active @endif">{{__('Vision & Mission')}}</a></li>
                                <li class="nav-item"><a href="{{route('about.ethical-conduct')}}" class="nav-link @if (request()->routeIs('about.ethical-conduct'))active @endif">{{__('Ethical Conduct')}}</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">{{__('Organogram')}}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            @php
                            $directorates = \App\Models\Directorate::with('media')->orderBy('title', 'ASC')->get();
                            @endphp
                            <a href="#" class="nav-link dropdown-toggle">{{__('Directorate')}}</a>
                            <ul class="dropdown-menu">
                                @foreach ($directorates as $directorate)
                                    <li class="nav-item"><a href="{{route('show.directorate', $directorate)}}" class="nav-link @if (request()->routeIs('show.directorate', $directorate))active @endif">{{$directorate->title}}</a></li>
                                @endforeach
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
                            <a href="#" class="nav-link dropdown-toggle @if (request()->routeIs('individual.tax-calculator'))active @endif">{{__('Tax Calculator')}} </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item @if (request()->routeIs('individual.tax-calculator'))active @endif"><a href="{{route('individual.tax-calculator')}}" class="nav-link">{{__('Individual Calculator')}}</a></li>
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
                        <li class="nav-item @if (request()->routeIs('posts.index')) active @endif"><a href="{{route('posts.index')}}" class="nav-link @if (request()->routeIs('posts.index')) active @endif">Blog</a></li>
                    </ul>
                    <div class="menu-sidebar">
                        <ul>
                            <li><a class="default-button" href="#" style="font-size: 12px">Get in Touch</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>