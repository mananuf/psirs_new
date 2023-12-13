@extends('layout.main')
@section('content')
    <section class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>{{$directorate->title}}</h1>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{$directorate->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="service-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-text-area">
                        @php
                            $directorsImage = $directorate->getFirstMediaPath('directors_image') ? str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                            $directorate->getFirstMediaPath('directors_image'))
                            : 'images/avatar.jpg';
                            $directorateImage = $directorate->getFirstMediaPath('directorate_image') ? str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                            $directorate->getFirstMediaPath('directorate_image'))
                            : 'images/avatar.jpg';
                        @endphp
                        <img class="details-main-img" src="{{asset($directorsImage)}}" class="rounded" alt="image">
                        <h3>{{$directorate->directors_name}}</h3>
                        {!! html_entity_decode($directorate->body) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area pl-20 pt-30">
                        <img src="{{asset($directorateImage)}}" class="h-50" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection