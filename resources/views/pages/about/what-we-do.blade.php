@extends('layout.main')
@section('content')
    <x-banner bigHeading="About Us" smallHeading="What We Do" />
    <section class="about pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img position-relative">
                        <img class="rounded w-75" src="{{asset('images/psirs/staff_entrance.jpg')}}" alt="image">
                        <img class="rounded w-50 d-none d-md-block" style="position: absolute; top:15rem; left:15rem" src="{{asset('images/psirs/staff_sports.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span>{{__('WHO WE ARE')}}</span>
                            <h3>{{__('We are the major revenue generating Agency of the State')}}</h3>
                            <p>
                                {{__('Plateau State Internal Revenue Service (PSIRS) is saddled with the
                                responsibility of collecting all forms of taxes within its jurisdiction. Over the years PSIRS has increased the State’s
                                Internally Generated Revenue (IGR) by executing and implementing strategies which have impacted positively on revenue
                                generation and collection, with the IGR growing steadily thereby augmenting what the state is receiving from the federal
                                account.')}}
                            </p>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-government-building"></i>
                            <h4>{{__('Our Role Is To:')}}</h4>
                            <p>
                                {{__('Make tax assessment and payment convenient for tax payers, PSIRS established mini tax offices in over 15 locations
                                across the state and all the offices are in operation. Furthermore, PSIRS is strongly advising her esteem taxpayers to
                                explore the self-assessment option of assessment in order to enjoy the 1% waver. The essence is:')}}
                            </p>
                            <ul>
                                <li>{{__('To encourage taxpayers to come forward and submit themselves for taxation.')}}</li>
                                <li>{{__('To reduce the high incidence of tax evasion by this group of taxpayers')}}</li>
                                <li>{{__('To encourage taxpayer completing the self-assessment which they are entitled to a bonus of 1percent i.e. the tax payable
                                shall be 1% less the actual tax computed.')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection