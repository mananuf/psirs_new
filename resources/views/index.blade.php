@extends('layout.main')
@section('content')
    <section class="banner bg-f9fbfe">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="banner-text-area banner-text-area-3">
    <h6>{{__('WELCOME TO')}}</h6>
    <h1>{{__('Plateau State Internal Revenue Service')}}</h1>
    <p>
        {{__('Plateau State Internal Revenue Service (PSIRS) is the major revenue generating Agency of the State saddled with the responsibility of collecting all forms of taxes within its jurisdiction.')}}
    </p>
    <a class="default-button default-button-2" href="about.html">{{__('Learn More')}}</a>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="banner-img-3">
    <img src="{{asset('images/banner/banner-3-1.png')}}" alt="image">
    <a class="video-popup" href="../../../www.youtube.com/watchcbd1?v=ukfISpWHVWI"><i class="fas fa-play"></i></a>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="about pt-100">
    <div class="shape">
    <img src="{{asset('images/about/shape.png')}}" alt="image">
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="about-img-3">
    <img src="{{asset('images/about/a3-1.jpg')}}" alt="image">
    </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="why-we-text-area about-text-area-2 pl-20">
    <div class="default-section-title">
    <span>WHO WE ARE</span>
    <h3>Medzo Is An Inner Metropolitan Municipality Service</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="why-we-text-list">
    <i class="flaticon-government-building"></i>
    <h4>Our Role Is To:</h4>
    <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien massa convallis.</p>
    <ul>
    <li>Praesent sapien massa, convallis a pellentesque nec.</li>
    <li>Nulla porttitor accumsan tincidunt.</li>
    <li>Ivamus suscipit tortor eget felis porttitor volutpat.</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="services ptb-100">
    <div class="container">
    <div class="default-section-title default-section-title-middle">
    <h3>Find Government Services</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="row justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="service-card">
    <div class="service-card-img">
    <a href="service-detaisl.html"><img src="{{asset('images/service/s1.jpg')}}" alt="image"></a>
    <i class="flaticon-balance"></i>
    </div>
    <div class="service-card-text">
    <h4><a href="service-details.html">Salty And The Law</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="service-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="service-card">
    <div class="service-card-img">
    <a href="service-detaisl.html"><img src="{{asset('images/service/s2.jpg')}}" alt="image"></a>
    <i class="flaticon-delivery"></i>
    </div>
    <div class="service-card-text">
    <h4><a href="service-details.html">Travel & Immigration</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="service-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="service-card">
    <div class="service-card-img">
    <a href="service-detaisl.html"><img src="{{asset('images/service/s3.jpg')}}" alt="image"></a>
    <i class="flaticon-portfolio"></i>
    </div>
    <div class="service-card-text">
    <h4><a href="service-details.html">Business Services</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="service-details.html">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="fun-facts pt-70 pb-100 bg-f9fbfe">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card fun-facts-card-2">
    <i class="flaticon-smart-city"></i>
    <h2><span class="odometer" data-count="46712">00</span></h2>
    <p>People In The City</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card fun-facts-card-2">
    <i class="flaticon-location-1"></i>
    <h2><span class="odometer" data-count="22">00</span>K</h2>
    <p>Square Of City</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card fun-facts-card-2">
    <i class="flaticon-park-1"></i>
    <h2><span class="odometer" data-count="300">00</span>+</h2>
    <p>Year Of Foundation</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="fun-facts-card last-card fun-facts-card-2">
    <i class="flaticon-award"></i>
    <h2><span class="odometer" data-count="1000">00</span>+</h2>
    <p>Successful Programs</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="events pt-100">
    <div class="container">
    <div class="default-section-title default-section-title-middle mt-10">
    <h3>Upcoming City Events</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="row justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="events-card">
    <img src="{{asset('images/events/e1.jpg')}}" alt="image">
    <div class="events-card-text">
    <ul>
    <li>Conference</li>
    <li>Oct 12, 2022</li>
    </ul>
    <h4><a href="event-details.html">Annual Conference 2022</a></h4>
    <p><i class="fas fa-map-marker-alt"></i> <a href="../../../goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
    <a class="read-more-btn" href="event-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="events-card">
    <img src="{{asset('images/events/e2.jpg')}}" alt="image">
    <div class="events-card-text">
    <ul>
    <li>Conference</li>
    <li>Oct 13, 2022</li>
    </ul>
    <h4><a href="event-details.html">Negotiation In Government</a></h4>
    <p><i class="fas fa-map-marker-alt"></i> <a href="../../../goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
    <a class="read-more-btn" href="event-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="events-card">
    <img src="{{asset('images/events/e3.jpg')}}" alt="image">
    <div class="events-card-text">
    <ul>
    <li>Conference</li>
    <li>Oct 14, 2022</li>
    </ul>
    <h4><a href="event-details.html">Annual Health Conference</a></h4>
    <p><i class="fas fa-map-marker-alt"></i> <a href="../../../goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
    <a class="read-more-btn" href="event-details.html">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="about about-3 ptb-100">
    <div class="shape">
    <img src="{{asset('images/about/shape.png')}}" alt="image">
    </div>
    <div class="container">
    <div class="default-section-title default-section-title-middle mt-10">
    <h3>Explore City Events</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="why-we-text-area">
    <div class="default-section-title pr-20">
    <span>WHO WE ARE</span>
    <h3>Plan A Great City That Provides The Essence Of Success</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="why-we-text-list">
    <i class="flaticon-government"></i>
    <h4>Sustainable Innovation Is Our Pathway:</h4>
    <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien massa convallis.</p>
    <ul>
    <li>Praesent sapien massa, convallis a pellentesque nec.</li>
    <li>Nulla porttitor accumsan tincidunt.</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="about-img-3 ai-2-2">
    <img src="{{asset('images/about/a3-2.jpg')}}" alt="image">
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="team ptb-100 bg-f9fbfe">
    <div class="container">
    <div class="default-section-title default-section-title-middle">
    <h3>Our City Counselor</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="row justify-content-center">
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="team-card">
    <div class="team-card-img">
    <img src="{{asset('images/team/t1.jpg')}}" alt="image">
    <div class="team-social-icons">
    <ul>
    <li><a href="{{config('app.facebook_url')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="{{config('app.linkedin_url')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="{{config('app.twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="{{config('app.instagram_url')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="team-card-text">
    <h4>Mila Wilson</h4>
    <p>City Secratery</p>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="team-card">
    <div class="team-card-img">
    <img src="{{asset('images/team/t2.jpg')}}" alt="image">
    <div class="team-social-icons">
    <ul>
    <li><a href="../../../www.facebook.com/index.html" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="../../../www.linkedin.com/index.html" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="../../../twitter.com/index.html" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="../../../www.instagram.com/index.html" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="team-card-text">
    <h4>Bren Stork</h4>
    <p>Counsil President</p>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="team-card">
    <div class="team-card-img">
    <img src="{{asset('images/team/t3.jpg')}}" alt="image">
    <div class="team-social-icons">
    <ul>
    <li><a href="../../../www.facebook.com/index.html" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="../../../www.linkedin.com/index.html" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="../../../twitter.com/index.html" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="../../../www.instagram.com/index.html" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="team-card-text">
    <h4>Mukesh Sarkar</h4>
    <p>City Mayor</p>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
    <div class="team-card">
    <div class="team-card-img">
    <img src="{{asset('images/team/t4.jpg')}}" alt="image">
    <div class="team-social-icons">
    <ul>
    <li><a href="../../../www.facebook.com/index.html" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="../../../www.linkedin.com/index.html" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="../../../twitter.com/index.html" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="../../../www.instagram.com/index.html" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="team-card-text">
    <h4>David Jon</h4>
    <p>Assistant Mayor</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="feedback ptb-100">
    <div class="container">
    <div class="default-section-title default-section-title-middle mt-10">
    <h3>What Your Counselors Says</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="feedback-slider-area-2 owl-carousel">
    <div class="feedback-card mlr-15 mb-30">
    <i class="flaticon-quotation"></i>
    <div class="stars">
    <ul>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    </ul>
    </div>
    <p>Lorem ipsum dolor amet magna set dolor sit amet elite consectetur adipiscing do elite magna aliqua sit amet dolore adipiscing elite.</p>
    <div class="feedback-intro-area">
    <img src="{{asset('images/feedback/f1.jpg')}}" alt="image">
    <div class="feedback-intro">
    <h5>Jhon Abraham</h5>
    <span>City Council President</span>
    </div>
    </div>
    </div>
    <div class="feedback-card mlr-15 mb-30">
    <i class="flaticon-quotation"></i>
    <div class="stars">
    <ul>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    </ul>
    </div>
    <p>Lorem ipsum dolor amet magna set dolor sit amet elite consectetur adipiscing do elite magna aliqua sit amet dolore adipiscing elite.</p>
    <div class="feedback-intro-area">
    <img src="{{asset('images/feedback/f2.jpg')}}" alt="image">
    <div class="feedback-intro">
    <h5>Jhon Smith</h5>
    <span>City Council Advisor</span>
    </div>
    </div>
    </div>
    <div class="feedback-card mlr-15 mb-30">
    <i class="flaticon-quotation"></i>
    <div class="stars">
    <ul>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    </ul>
    </div>
    <p>Lorem ipsum dolor amet magna set dolor sit amet elite consectetur adipiscing do elite magna aliqua sit amet dolore adipiscing elite.</p>
    <div class="feedback-intro-area">
    <img src="{{asset('images/feedback/f3.jpg')}}" alt="image">
    <div class="feedback-intro">
    <h5>Peter Smith</h5>
    <span>City Council Secratery</span>
    </div>
    </div>
    </div>
    <div class="feedback-card mlr-15 mb-30">
    <i class="flaticon-quotation"></i>
    <div class="stars">
    <ul>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    <li><i class="fas fa-star"></i></li>
    </ul>
    </div>
    <p>Lorem ipsum dolor amet magna set dolor sit amet elite consectetur adipiscing do elite magna aliqua sit amet dolore adipiscing elite.</p>
    <div class="feedback-intro-area">
    <img src="{{asset('images/feedback/f4.jpg')}}" alt="image">
    <div class="feedback-intro">
    <h5>Peter Parker</h5>
    <span>City Council Secratery</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="blog pb-100">
    <div class="container">
    <div class="default-section-title default-section-title-middle mt-10">
    <h3>Latest News & Updates</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
    </div>
    <div class="section-content">
    <div class="row justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="blog-details.html"><img src="{{asset('images/blog/b1.jpg')}}" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <div class="blog-date">
    <ul>
    <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
    <li><i class="far fa-comments"></i> No Comment</li>
    <li><i class="far fa-calendar-alt"></i> 01 Nov 2022</li>
    </ul>
    </div>
    <h4><a href="blog-details.html">Responds To Citizens Advice</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="blog-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="blog-details.html"><img src="{{asset('images/blog/b2.jpg')}}" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <div class="blog-date">
    <ul>
    <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
    <li><i class="far fa-comments"></i> No Comment</li>
    <li><i class="far fa-calendar-alt"></i> 02 Nov 2022</li>
    </ul>
    </div>
    <h4><a href="blog-details.html">Housing Advisers Program</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="blog-details.html">Read More</a>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="blog-card">
    <div class="blog-card-img">
    <a href="blog-details.html"><img src="{{asset('images/blog/b3.jpg')}}" alt="image"></a>
    </div>
    <div class="blog-card-text-area">
    <div class="blog-date">
    <ul>
    <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
    <li><i class="far fa-comments"></i> No Comment</li>
    <li><i class="far fa-calendar-alt"></i> 03 Nov 2022</li>
    </ul>
    </div>
    <h4><a href="blog-details.html">Respond To National Report</a></h4>
    <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.</p>
    <a class="read-more-btn" href="blog-details.html">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection