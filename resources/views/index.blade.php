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
                            {{__('Your Gateway to Efficient Tax Services. Explore our website to access convenient tax
                            resources, services, and
                            information for a thriving and prosperous Plateau State. Pay your taxes and contribute to the
                            growth of our beautiful
                            state today!')}}
                        </p>
                        <a class="default-button default-button-2" href="about.html">{{__('Learn More')}}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img-3">
                        <img src="{{asset('images/banner/psirs-bg-1.png')}}" alt="image">
                        <a class="video-popup" href="https://www.youtube.com/embed/TKyCNLqDUrg"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Us --}}
    <section class="about pt-100 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">
                    <div class="about-img-section">
                        <img src="{{asset('images/psirs/team1.jpg')}}" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2 pl-20">
                        <div class="default-section-title">
                            <span>{{__('WHO WE ARE')}}</span>
                            <h3>{{__('Plateau State Internal Revenue Service (PSIRS)')}}</h3>
                            <p>{{__('We are the major revenue generating Agency of the State saddled with the
                                responsibility of collecting all forms of taxes within its jurisdiction. Over the years
                                PSIRS has increased the State’s
                                Internally Generated Revenue (IGR) by executing and implementing strategies which have
                                impacted positively on revenue
                                generation and collection, with the IGR growing steadily thereby augmenting what the state
                                is receiving from the federal
                                account.')}}</p>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-government-building"></i>
                            <h4>{{__('Our Role Is To:')}}</h4>
                            <p>{{('Make tax assessment and payment convenient for tax payers by:')}}.</p>
                            <ul>
                                <li>{{__('Encouraging taxpayers to come forward and submit themselves for taxation.')}}</li>
                                <li>{{__('Reducing the high incidence of tax evasion by this group of taxpayers.')}}</li>
                                <li>{{__('Encouraging taxpayer completing the self-assessment which they are entitled to a
                                    bonus of 1percent i.e. the tax payable
                                    shall be 1% less the actual tax computed.')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-block d-md-none mt-5">
                    <div class="about-img-section">
                        <img src="{{asset('images/psirs/team1.jpg')}}" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback ptb-100">
        <div class="container">
            <div class="default-section-title position-relative default-section-title-middle mt-10">
                <div class="position-absolute top-50 start-50 z-n1 light-green">
                    <i class="flaticon-quotation display-1"></i>
                </div>
                <h3>{{__('Our Vision')}}</h3>
                <p>{{__('"A leading Internal Revenue Service where teamwork and professionalism are combined to maximize revenue generation for
                the development of the state."')}}</p>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="default-section-title position-relative default-section-title-middle mt-10">
                <div class="position-absolute top-50 start-50 z-n1 light-green">
                    <i class="flaticon-quotation display-1"></i>
                </div>
                <h3>{{__('Our Mission')}}</h3>
                <p>{{__('"To collect and coordinate all revenues accruing to Plateau State Government in a transparent and professional manner
                that create tax-payer friendly environment which encourages voluntary compliance in order to optimally fund government
                budget."')}}</p>
            </div>
        </div>
    </section>
    {{-- Filing Your Returns Online --}}
    <section class="about ptb-100 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-block d-md-none">
                    <div class="about-img-section">
                        <img src="{{asset('images/file_returns.jpg')}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2 pl-20">
                        <div class="default-section-title">
                            <span>{{__('HOW TO')}}</span>
                            <h3>{{__('File Your Returns')}}</h3>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-portfolio"></i>
                            <h4>{{__('Filing Your Returns Online:')}}</h4>
                            <p> {{__('To file your returns, follow these steps:')}}</p>
                            <ul>
                                <li>{{__('Visit the PSIRS website at')}} <a href="https://piras.psirs.gov.ng" target="_blank" class="link-color-green">{{__('piras.psirs.gov.ng.')}}</a></li>
                                <li>{{__('Log in using your Tax Identification Number (TIN) or phone number, depending on your registration.')}}</li>
                                <li>{{__('Navigate to the "Assessment" or "Self-Assessment" section.')}}</li>
                                <li>{{__('Click on "Quick Assessment" on the website.')}}</li>
                                <li>{{__('Enter your TIN.')}}</li>
                                <li>{{__('Select "Plateau State Internal Revenue Service" from the drop-down menu for the Ministry, Department, and Agency (MDA).')}}</li>
                                <li>{{__('Choose "Revenue Returns - Individual" or "Revenue Returns - Corporate" based on your taxpayer status.')}}</li>
                                <li>{{__('Complete the required forms until the end.')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">
                    <div class="about-img-section">
                        <img src="{{asset('images/file_returns.jpg')}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Obtain Tax Clearance --}}
    <section class="about ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img-section">
                        <img src="{{asset('images/obtain_tcc.jpg')}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2 pl-20">
                        <div class="default-section-title">
                            <span>{{__('HOW TO')}}</span>
                            <h3>{{__('Obtain Tax Clearance')}}</h3>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-portfolio"></i>
                            <h4>{{__('Obtaining a Tax Clearance Certificate (TCC)')}}</h4>
                            <p> {{__('To obtain a Tax Clearance Certificate (TCC), you have two options:')}}</p>
                            <p> {{__('1. Visit our office:')}}</p>
                            <ul>
                                <li>{{__('Pick up a TCC form.')}}</a></li>
                                <li>{{__('Fill out the form.')}}</li>
                                <li>{{__('Navigate to the "Assessment" or "Self-Assessment" section.')}}</li>
                                <li>{{__('Take it to your organization for endorsement and stamping if you are representing a formal organization.')}}</li>
                            </ul>
                            <p class="mt-3"> {{__('2. For businesses or companies:')}}</p>
                            <ul>
                                <li>{{__('Submit your business name or company\'s income records for assessment, payment, and issuance of the TCC.')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- View Payable Taxes --}}
    <section class="about ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-block d-md-none">
                    <div class="about-img-section">
                        <img src="{{asset('images/view_taxable_items.jpg')}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2 pl-20">
                        <div class="default-section-title">
                            <span>{{__('HOW TO')}}</span>
                            <h3>{{__('View All Payable Taxes')}}</h3>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-portfolio"></i>
                            <h4>{{__('Viewing Plateau State Taxes Payable Online:')}}</h4>
                            <p> {{__('For information on taxes payable to Plateau State, follow these steps:')}}</p>
                            <ul>
                                <li>{{__('Visit the PSIRS website at')}} <a href="https://piras.psirs.gov.ng"
                                        target="_blank" class="link-color-green">{{__('piras.psirs.gov.ng.')}}</a></li>
                                <li>{{__('Navigate to the website to view all revenue items and tax types for Plateau State.')}}</li>
                            </ul>
                            <p class="mt-3">{{__("Follow these clear and simple instructions if you're seeking information on filing returns,
                            obtaining TCCs, and checking taxes payable to Plateau State.")}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">
                    <div class="about-img-section">
                        <img src="{{asset('images/view_taxable_items.jpg')}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-5">
        <section class="fun-facts pt-70 pb-100 bg-f9fbfe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card fun-facts-card-2">
                            <i class="flaticon-smart-city"></i>
                            <h2><span class="odometer" data-count="46712">00</span></h2>
                            <p>Tax payers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card fun-facts-card-2">
                            <i class="flaticon-location-1"></i>
                            <h2><span class="odometer" data-count="22">00</span>K</h2>
                            <p>Tax Clearance</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card fun-facts-card-2">
                            <i class="flaticon-park-1"></i>
                            <h2><span class="odometer" data-count="300">00</span>+</h2>
                            <p>companies</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card last-card fun-facts-card-2">
                            <i class="flaticon-award"></i>
                            <h2><span class="odometer" data-count="1000">00</span>+</h2>
                            <p>Indiviuals</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle mt-10">
                <h3>Latest News & Updates</h3>
                <p>{{__('Discover the most recent developments, updates, and important announcements from the Plateau State Internal Revenue
                Service (PSIRS).')}}</p>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    @foreach ($blogPosts as $post)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    @php
                                    $postImage = $post->media ?
                                    str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                                    $post->getFirstMediaPath('post_image'))
                                    : 'images/avatar.jpg';
                                    @endphp
                                    <a href="blog-details.html"><img src="{{asset($postImage)}}" class="card-img-top rounded" style="height:20rem; object-fit:cover" alt="image"></a>
                                </div>
                                <div class="blog-card-text-area">
                                    <div class="blog-date">
                                        <ul>
                                            <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                            <li><i class="far fa-comments"></i> No Comment</li>
                                            <li><i class="far fa-calendar-alt"></i> {{now()->parse($post->created_at)->format('M d, Y')}}</li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">{{$post->title}}</a></h4>
                                    <p>
                                        {!!Str::limit(strip_tags(html_entity_decode($post->body)), 80) !!}
                                    </p>
                                    <a class="read-more-btn" href="{{route('posts.show', $post)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-area pb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Get In Touch</h3>
                <p>{{__('Your concerns matter to us, and we are dedicated to providing prompt and helpful responses. Let\'s collaborate for a
                seamless and efficient experience.')}}</p>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="google-map pr-20">
                            <iframe
                                class="g-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.273890218031!2d8.886710674451997!3d9.911131690189777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105373686323de7d%3A0x4468d78fc309e1b0!2sPLATEAU%20STATE%20BOARD%20OF%20INTERNAL%20REVENUE%20HQ!5e0!3m2!1sen!2sng!4v1698994060336!5m2!1sen!2sng"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-text-area">
                            <form id="contactForm">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" id="name" required
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                id="email" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control"
                                                placeholder="Phone Number" id="phone_number" required
                                                data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" class="form-control" placeholder="Subject"
                                                id="msg_subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control"
                                                placeholder="Your Messages.." cols="30" rows="5" required
                                                data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                    class="form-check-input" type="checkbox" id="gridCheck" required>
                                                <label class="form-check-label" for="gridCheck">
                                                    I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>
                                                </label>
                                                <div class="help-block with-errors gridCheck-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <button class="default-button" type="submit"><span>Send Message</span></button>
                                        <div id="msgSubmit" class="h6 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection