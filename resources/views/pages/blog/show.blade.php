@extends('layout.main')
@section('content')
@php
    $postImage = $post->media ?
    str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
    $post->getFirstMediaPath('post_image'))
    : 'images/avatar.jpg';
@endphp
<x-banner bigHeading="{!! $post->title !!}" smallHeading="{!! $post->title !!}" />
    <section class="about ptb-100 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="">
                        <img src="{{asset($postImage)}}" class="img-fluid rounded" alt="image">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2 pl-20">
                        <div class="blog-date mb-3">
                            <ul>
                                <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                <li><i class="far fa-comments"></i> No Comment</li>
                                <li><i class="far fa-calendar-alt"></i>{{now()->parse($post->created_at)->format('M d, Y')}}</li>
                            </ul>
                        </div>  
                        <div class="default-section-title">
                            <h3>{{$post->title}}</h3>
                        </div>
                        <div class="mt-3">
                           {!! html_entity_decode($post->body) !!}
                        </div>
                    </div>
                    <div class="blog-text-footer mt-5">
                        <div class="social-icons">
                            <ul>
                                <li><span>Share:</span></li>
                                <li><a href="../../../www.facebook.com/index.html" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="../../../www.linkedin.com/index.html" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="../../../twitter.com/index.html" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="../../../www.instagram.com/index.html" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection