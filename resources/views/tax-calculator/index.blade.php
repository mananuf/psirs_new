@extends('layout.main')
@section('content')
    <div class="container">
        <section class="ptb-100">
            <div class="d-flex flex-column col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                {{-- @if (session()->has('calculatedTax')) --}}
                @php
                    $annualtax = (float) session()->get('annualTaxLiability');
                @endphp
                <div class="log-in-card">
                    <p class="text-success"><span class="text-black font-weight-bold">Your Annual Tax Liability:</span> {{config('app.currency_symbol') . formatPrice($annualtax)}}</p>
                    <p class="text-success"><span class="text-black font-weight-bold">Your Monthly Tax:</span> {{config('app.currency_symbol') . formatPrice($annualtax/12) }}</p>
                </div>
                {{-- @endif --}}
                <div class="log-in-card">
                    <div class="default-section-title">
                        <h3>{{__('PERSONAL INCOME TAX CALCULATOR')}}</h3>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{route('calculate.tax')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="number" class="form-control @error('monthly_income') is-invalid @enderror" name="monthly_income" placeholder="Enter Monthly Income">
                                <p class="mx-3 text-danger"><small>{{__('required')}}</small></p>
                                @error('monthly_income')
                                    <p class="mx-3 text-danger"><small>{{$message}}</small></p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control @error('nhis') is-invalid @enderror" name="nhis" placeholder="Enter NHIS Amount">
                                <p class="mx-3"><small>{{__('optional')}}</small></p>
                                @error('nhis')
                                <p class="mx-3 text-danger"><small>{{$message}}</small></p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control @error('life_insurance') is-invalid @enderror" name="life_insurance" placeholder="Enter Life Insurance amount">
                                <p class="mx-3"><small>{{__('optional')}}</small></p>
                                @error('life_insurance')
                                <p class="mx-3 text-danger"><small>{{$message}}</small></p>
                                @enderror
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between my-4">
                                <div class="d-flex align-items-center mb-3">
                                    <label class="mx-3">{{__('Are you pensionable?')}}</label>
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="pension" value="yes" id="pension1" autocomplete="off">
                                        <label class="btn btn-outline-success" for="pension1">{{__('Yes')}}</label>
                                
                                        <input type="radio" class="btn-check" name="pension" value="no" id="pension2" autocomplete="off" checked>
                                        <label class="btn btn-outline-success" for="pension2">{{__('No')}}</label>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex flex-column">
                                        <label class="mx-3">{{__('Are you under NHF?')}}</label>
                                        <p class="mx-3"><small>{{__('National Housing Fund')}}</small></p>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="nhf" value="yes" id="nhf1" autocomplete="off">
                                        <label class="btn btn-outline-success" for="nhf1">{{__('Yes')}}</label>
                                
                                        <input type="radio" class="btn-check" name="nhf" value="no" id="nhf2" autocomplete="off" checked>
                                        <label class="btn btn-outline-success" for="nhf2">{{__('No')}}</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="default-button">
                                <i class="fas fa-calculator"></i>
                                {{__('Calculate Now')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection