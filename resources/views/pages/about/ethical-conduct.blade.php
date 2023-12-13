@extends('layout.main')
@section('content')
<x-banner bigHeading="About Us" smallHeading="Ethical Conduct" />
<section class="about pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-img">
                    <img class="a-img-1" src="{{asset('images/psirs/staff_entrance.jpg')}}" alt="image">
                    <img class="a-img-2" src="{{asset('images/psirs/staff_sports.jpg')}}" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="default-section-title">
                        <span>{{__('OUR CONDUCT')}}</span>
                        <h3>{{__('Ethical Conduct')}}</h3>
                        <p>
                            {{__('The PSIRS ethical conduct includes the following:')}}
                        </p>
                        <ul>
                            <li>{{__('Transparency')}}</li>
                            <li>{{__('Integrity')}}</li>
                            <li>{{__('Honesty')}}</li>
                            <li>{{__('Accountability')}}</li>
                            <li>{{__('Tactfulness')}}</li>
                            <li>{{__('Must have knowledge and skill e.g. taxation and tax laws')}}</li>
                            <li>{{__('Must have enquiry mind ie look beyond the surface')}}</li>
                            <li>{{__('Refuse temptation to collude with taxpayers')}}</li>
                            <li>{{__('Reject gratification in whatever form')}}</li>
                            <li>{{__('Carefulness')}}</li>
                            <li>{{__('Demonstrate professionalism and diligence')}}</li>
                            <li>{{__('Educate and encourage taxpayers to pay tax as and when due')}}</li>
                            <li>{{__('Implement the tax laws fairly, uniformly and equitably')}}</li>
                        </ul>
                    </div>
                    {{-- <div class="why-we-text-list">
                        <i class="flaticon-government-building"></i>
                        <h4>{{__('Ethical Conduct:')}}</h4>
                        <p>
                            {{__('Make tax assessment and payment convenient for tax payers, PSIRS established mini tax offices in over 15
                            locations
                            across the state and all the offices are in operation. Furthermore, PSIRS is strongly advising her esteem
                            taxpayers to
                            explore the self-assessment option of assessment in order to enjoy the 1% waver. The essence is:')}}
                        </p>
                        
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection