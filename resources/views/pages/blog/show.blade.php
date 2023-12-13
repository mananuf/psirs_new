@extends('layout.main')
@section('content')
<x-banner bigHeading="{!! $post->title !!}" smallHeading="{!! $post->title !!}" />
    <section class="blog-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @php
                    $postImage = $post->media ?
                    str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                    $post->getFirstMediaPath('post_image'))
                    : 'images/avatar.jpg';
                    @endphp
                    <div class="blog-details-text-area details-text-area">
                        <img src="{{asset($postImage)}}" alt="image">
                        <div class="blog-date">
                            <ul>
                                <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                <li><i class="far fa-comments"></i> No Comment</li>
                                <li><i class="far fa-calendar-alt"></i>{{now()->parse($post->created_at)->format('M d, Y')}}</li>
                            </ul>
                        </div>
                        <h3 class="mt-0">{{$post->title}}</h3>
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                    <div class="blog-text-footer mt-30">
                        <div class="tag-area">
                            <ul>
                                <li><i class="fas fa-tags"></i></li>
                                <li><a href="category.html">Culture,</a></li>
                                <li><a href="category.html">Business,</a></li>
                                <li><a href="category.html">Citizen</a></li>
                            </ul>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><span>Share:</span></li>
                                <li><a href="../../../www.facebook.com/index.html" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="../../../www.linkedin.com/index.html" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="../../../twitter.com/index.html" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="../../../www.instagram.com/index.html" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="bd-comments details-text-area">
                        <h3>Comments</h3>
                        <div class="comment-card">
                            <img src="assets/images/feedback/f2.jpg" alt="image">
                            <h5>David Makel</h5>
                            <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old off
                                his nut argy bargy vagabond buggered dropped.</p>
                            <a href="#bd-form">Reply</a>
                        </div>
                        <div class="comment-card">
                            <img src="assets/images/feedback/f1.jpg" alt="image">
                            <h5>Jemmy Makel</h5>
                            <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old off
                                his nut argy bargy vagabond buggered dropped.</p>
                            <a href="#bd-form">Reply</a>
                        </div>
                    </div>
                    <div class="bd-form details-text-area" id="bd-form">
                        <h3>Leave A Reply</h3>
                        <p>Your email address will not be published. Required fields are marked*</p>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <input type="text" class="form-control" placeholder="Name*" required>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <input type="email" class="form-control" placeholder="Email*" required>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <input type="text" class="form-control" placeholder="Phone*" required>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <input type="text" class="form-control" placeholder="Subject*" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="default-button" type="submit">Post A Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area pl-20 pt-30">
                        <div class="sidebar-card search-box">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Here.." required>
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-card sidebar-category mt-30">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Adveresting Permits</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                        Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                        Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Drainage Services</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Enviromental Services</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Survey Services</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-card recent-news mt-30">
                            <h3>Popular Posts</h3>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds1.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Responds To Citizenship Advices</a></h5>
                                <p>1st Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Housing Advisers Program For Beginner</a></h5>
                                <p>4th Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds3.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Responds To a National Reports</a></h5>
                                <p>2nd Sep 2022</p>
                            </div>
                        </div>
                        <div class="sidebar-card sidebar-tag mt-30">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="category.html">Councillor</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Citizen</a></li>
                                <li><a href="category.html">Program</a></li>
                                <li><a href="category.html">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection