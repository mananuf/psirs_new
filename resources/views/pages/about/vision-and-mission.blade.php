@extends('layout.main')
@section('content')
<x-banner bigHeading="About Us" smallHeading="Vision and Mission" />
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
                        <span>{{__('OUR VISION')}}</span>
                        <h3>{{__('Vision Statement')}}</h3>
                        <p>
                            {{__('A Leading Internal Revenue Service where teamwork and professionalism are combined to maximize revenue generation for
                            the development of the state.')}}
                        </p>
                    </div>
                    <div class="default-section-title pt-5">
                        <span>{{__('OUR MISSION')}}</span>
                        <h3>{{__('Mission Statement')}}</h3>
                        <p>
                            {{__('To collect and coordinate all revenues accruing to Plateau State Government in a transparent and professional manner
                            that create tax-payer friendly environment which encourages voluntary compliance in order to optimally fund government
                            budget.')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection